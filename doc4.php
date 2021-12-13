<?
include "db.php";
include "functions.php";

if($_GET["op"]=="saveval"){
	$ID=$_POST["ID"];
	$table=$_POST["table"];
	$key=$_POST["key"];
	$value=$_POST["value"];
	
  if($table=="s_evaluation_predef" || $table=="l_evaluation_predef"){
		if(substr($key,0,5)=="grade"){
			$keyarr=explode("_",$key);
			$row=mysql_fetch_assoc(mysql_query("SELECT * FROM $table WHERE ID=$ID"));
			$oldvals=explode("|", $row[$keyarr[0]]);
			$oldvals[$keyarr[1]]=$value;
			$value=implode("|",$oldvals);
			$key=$keyarr[0];
		}
	}
	
	saveval($ID, $table, $key, $value, "customization", 0);
}

if($_GET["op"]=="createrow"){
	$table=$_POST["table"];
	$result=mysql_query("SHOW COLUMNS FROM $table WHERE FIELD =  'position'");
	if(mysql_num_rows($result)){
		$row=mysql_fetch_assoc(mysql_query("SELECT MAX(position) AS maxpos FROM $table"));
		$data["position"]=$row["maxpos"]+1;
	}
	if($_POST["searchstring"]){
		$arr1=explode("=",$_POST["searchstring"]);
		$arr2=explode(" ",$arr1[0]);
		$data[$arr2[1]]=$arr1[1];
	}
	
	$tmpID=saverow(0, $table, $data, "customization", 0);
	$row=mysql_fetch_assoc(mysql_query("SELECT * FROM $table WHERE ID=$tmpID"));

	if($table=="c_option_set"){
		$row["linkB"]="fc_option_type(".$row["ID"].")";
	}
	if($table=="c_option_type"){
		$row["linkB"]="fc_option_predef(".$row["ID"].")";
	}
	
	if($table=="s_risk_set"){
		$row["linkB"]="fs_risk_type(".$row["ID"].")";
	}
	if($table=="s_risk_type"){
		$row["linkB"]="fs_risk_predef(".$row["ID"].")";
	}
	if($table=="c_risk_set"){
		$row["linkB"]="fc_risk_type(".$row["ID"].")";
	}
	if($table=="c_risk_type"){
		$row["linkB"]="fc_risk_predef(".$row["ID"].")";
	}
	
	if($table=="s_option_set"){
		$row["linkB"]="fs_option_type(".$row["ID"].")";
	}
	if($table=="s_option_type"){
		$row["linkB"]="fs_option_predef(".$row["ID"].")";
	}

	if($table=="s_evaluation_type"){
		$row["linkB"]="fs_evaluation_predef(".$row["ID"].")";
	}

	if($table=="s_evaluation_predef"){
		$row["no"]="C".$row["ID"];
	}
	
	if($table=="s_economic_predef"){
		$row["no"]="C".$row["ID"];
	}

	if($table=="l_evaluation_predef"){
		$row["no"]="C".$row["ID"];
	}
  
	if($table=="l_statement_set"){
		$row["duplicate"]="duplicate(".$row["ID"].",'l_statement')";
		$row["linkB"]="fl_statement_type(".$row["ID"].")";
	}
	if($table=="l_statement_type"){
		$row["linkB"]="fl_statement_predef(".$row["ID"].")";
	}


	echo json_encode($row);
	exit();
}

if($_GET["op"]=="delrow"){
	$ID=$_POST["ID"];
	$table=$_POST["table"];
	$elID=$_POST["elID"];
	delrow($ID, $table, "customization", 0);
}

if(substr($_GET["op"],0,7)=="refresh"){
	$table=substr($_GET["op"],7);
	$row=mysql_fetch_assoc(mysql_query("SELECT * FROM $table LIMIT 1"));
	if(array_key_exists("position",$row)){
		$sort=" ORDER BY position ASC ";
	} else 	if(array_key_exists("no",$row)){
		$sort=" ORDER BY no ASC ";
	} else {
		$sort="";
	}
	if($_GET["searchstring"]){
		$condition=my_escape($_GET["searchstring"]);
	} else {
		$condition="";
	}
	$sql="SELECT * FROM $table $condition $sort";
	$result=mysql_query($sql);
	while($row=mysql_fetch_assoc($result)){
		
		if($table=="c_option_set"){
			$row["linkB"]="fc_option_type(".$row["ID"].")";
		}
		if($table=="c_option_type"){
			$row["linkB"]="fc_option_predef(".$row["ID"].")";
		}
		
		if($table=="s_risk_set"){
			$row["linkB"]="fs_risk_type(".$row["ID"].")";
		}
		if($table=="s_risk_type"){
			$row["linkB"]="fs_risk_predef(".$row["ID"].")";
		}
		if($table=="c_risk_set"){
			$row["linkB"]="fc_risk_type(".$row["ID"].")";
		}
		if($table=="c_risk_type"){
			$row["linkB"]="fc_risk_predef(".$row["ID"].")";
		}
		
		if($table=="s_option_set"){
			$row["linkB"]="fs_option_type(".$row["ID"].")";
		}
		if($table=="s_option_type"){
			$row["linkB"]="fs_option_predef(".$row["ID"].")";
		}

		if($table=="s_evaluation_type"){
			$row["linkB"]="fs_evaluation_predef(".$row["ID"].")";
		}

		if($table=="s_evaluation_predef"){
			$row["no"]="C".$row["ID"];
		}
		
		if($table=="s_evaluation_predef"){
			$tmparr1=explode("|", $row["grades"]);
			$tmparr2=explode("|", $row["gradenames"]);
			$tmparr3=explode("|", $row["gradecolors"]);
			for($i=0;$i<=5; $i++){
				if(count($tmparr1)<=$i) $tmparr1[$i]="";
				if(count($tmparr2)<=$i) $tmparr2[$i]="";
				if(count($tmparr3)<=$i) $tmparr3[$i]="";
				$row["grades_".$i]=$tmparr1[$i];				
				$row["gradenames_".$i]=$tmparr2[$i];				
				$row["gradecolors_".$i]=$tmparr3[$i];				
			}
		}
		
		if($table=="s_economic_predef"){
			$row["no"]="C".$row["ID"];
		}
    
    
		if($table=="l_statement_set"){
			$row["duplicate"]="duplicate(".$row["ID"].",'l_statement')";
			$row["linkB"]="fl_statement_type(".$row["ID"].")";
		}
		if($table=="l_statement_type"){
			$row["linkB"]="fl_statement_predef(".$row["ID"].")";
		}

		
		$data["data"][]=$row;
	}
	
	if($table=="c_option_type" || $table=="s_option_type"){
		$data["opts"]["gradetype"][0]="(none)";
		$data["opts"]["gradetype"][1]="B.R.E.K.S.";
		$data["opts"]["gradetype"][2]="Slider";
	}
	if($table=="s_economic_predef"){
		$data["opts"]["tableset"][0]="(none)";
		$data["opts"]["tableset"][1]="Key figures";
		$data["opts"]["tableset"][2]="Key ratios";
	}
	echo json_encode($data);
	exit();
}

if($_GET["op"]=="duplicate"){
	$ID=$_POST["ID"];
	$table=$_POST["table"];
	$row=mysql_fetch_assoc(mysql_query("SELECT * FROM ".$table."_set WHERE ID=$ID"));
  $row["name"]=$row["name"]." copy";
  mysql_query(duplicatesql($row,$table."_set"));
  $newID=mysql_insert_id();
  $result=mysql_query("SELECT * FROM ".$table."_type WHERE ".$table."_setID=$ID ");
  while($row=mysql_fetch_assoc($result)){
    $row[$table."_setID"]=$newID;
    mysql_query(duplicatesql($row,$table."_type"));
    $newID2=mysql_insert_id();
    $result2=mysql_query("SELECT * FROM ".$table."_predef WHERE ".$table."_typeID=".$row["ID"]);
    while($row2=mysql_fetch_assoc($result2)){
      $row2[$table."_typeID"]=$newID2;
      mysql_query(duplicatesql($row2,$table."_predef"));
    }
  }
  return 1;
}

?>
