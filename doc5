<?
include "db.php";
include "functions.php";


if($_GET["op"]=="refreshzahtjev"){
  $condition="";
  if($_SESSION["role"]=="klijent" || $_SESSION["role"]=="skladiste") $condition.=" AND t1.odjelID=".$_SESSION["odjelID"];
  
  if($_GET["searchstring"]==1) $condition.=" AND t1.datum>(NOW()-INTERVAL 2 DAY)";
  else if($_GET["searchstring"]==2) $condition.=" AND t1.status='nezavrsen' ";
  else if($_GET["searchstring"]) $condition.=" AND (t1.sifra LIKE '%".my_escape($_GET["searchstring"])."%' OR t2.knaziv LIKE '%".my_escape($_GET["searchstring"])."%' OR t3.ime LIKE '%".my_escape($_GET["searchstring"])."%')";
  
  $limit="20";
	$sql="SELECT 
          t1.ID AS ID,
          t1.datum AS datum,
          t2.knaziv AS odjel,
          t3.ime AS odgosoba,
          t1.sifra AS sifra,
          t4.naziv AS status,
          t4.color AS statuscolor
        FROM s_zahtjev t1 
        LEFT JOIN odjel t2 ON t1.odjelID=t2.ID
        LEFT JOIN osoba t3 ON t1.osobaID=t3.ID
        LEFT JOIN s_status t4 ON t1.status=t4.ID
        WHERE 1 $condition
        ORDER BY datum DESC
        LIMIT $limit
  ";
	$result=mysql_query($sql);
	while($row=mysql_fetch_assoc($result)){
    $row["datum"]=mysqldate2eurdate($row["datum"], true);
    $row["status"]='<div class="statusbut" style="background-color:'.$row["statuscolor"].'">'.$row["status"].'</div>';  
    $result2=mysql_query("SELECT * FROM s_stavka WHERE dokument='s_zahtjev' AND dokumentID=".$row["ID"]." ORDER BY position ASC");
    $cntr=1;
    $row["predmet"]="";
    while($row2=mysql_fetch_assoc($result2)){
      if($row["predmet"]) $row["predmet"].=", ";
      $row["predmet"].=$cntr.". ".$row2["naziv"]." - ".$row2["kolicina"]." ".$row2["jmj"];
      $cntr++;
    }    
    $row["link"]="index.php?menu=zahtjev&elID=".$row["ID"];
		$data["data"][]=$row;
	}
	echo json_encode($data);
	exit();
}

if($_GET["op"]=="refreshnarudzba"){
  $condition="";  
  if($_GET["searchstring"]==1) $condition.=" AND t1.datum>(NOW()-INTERVAL 2 DAY)";
  else if($_GET["searchstring"]==2) $condition.=" AND t1.status='nezavrsen' ";
  else if($_GET["searchstring"]) $condition.=" AND (t1.sifra LIKE '%".my_escape($_GET["searchstring"])."%' OR t2.knaziv LIKE '%".my_escape($_GET["searchstring"])."%' OR t3.ime LIKE '%".my_escape($_GET["searchstring"])."%')";
  
  $limit="20";
	$sql="SELECT 
          t1.ID AS ID,
          t1.datum AS datum,
          t2.naziv AS s_dobavljac,
          t3.ime AS odgosoba,
          t1.sifra AS sifra,
          t4.naziv AS status,
          t4.color AS statuscolor
        FROM s_narudzba t1 
        LEFT JOIN s_dobavljac t2 ON t1.s_dobavljacID=t2.ID
        LEFT JOIN osoba t3 ON t1.osobaID=t3.ID
        LEFT JOIN s_status t4 ON t1.status=t4.ID
        $condition
        ORDER BY datum DESC
        LIMIT $limit
  ";
	$result=mysql_query($sql);
	while($row=mysql_fetch_assoc($result)){
    $row["datum"]=mysqldate2eurdate($row["datum"], true);
    $row["status"]='<div class="statusbut" style="background-color:'.$row["statuscolor"].'">'.$row["status"].'</div>';
    $result2=mysql_query("SELECT * FROM s_stavka WHERE dokument='s_narudzba' AND dokumentID=".$row["ID"]." ORDER BY position ASC");
    $cntr=1;
    $row["predmet"]="";
    while($row2=mysql_fetch_assoc($result2)){
      if($row["predmet"]) $row["predmet"].=", ";
      $row["predmet"].=$cntr.". ".$row2["naziv"]." - ".$row2["kolicina"]." ".$row2["jmj"];
      $cntr++;
    }
    $row["link"]="index.php?menu=narudzba&elID=".$row["ID"];
		$data["data"][]=$row;
	}
	echo json_encode($data);
	exit();
}


if($_GET["op"]=="refreshs_izdatnica"){
  $condition="";
  if($_SESSION["role"]=="klijent") $condition.=" AND t1.odjelID=".$_SESSION["odjelID"];
  if($_SESSION["role"]=="skladiste") $condition.=" AND t1.s_skladisteID=".$_SESSION["s_skladisteID"];
  
  if($_GET["searchstring"]==1) $condition.=" AND t1.datum>(NOW()-INTERVAL 2 DAY)";
  else if($_GET["searchstring"]==2) $condition.=" AND t1.status='nezavrsen' ";
  else if($_GET["searchstring"]) $condition.=" AND (t1.sifra LIKE '%".my_escape($_GET["searchstring"])."%' OR t2.knaziv LIKE '%".my_escape($_GET["searchstring"])."%' OR t3.ime LIKE '%".my_escape($_GET["searchstring"])."%')";
  
  $limit="20";
	$sql="SELECT 
          t1.ID AS ID,
          t1.datum AS datum,
          t2.knaziv AS odjel,
          t3.ime AS odgosoba,
          t1.sifra AS sifra,
          t4.naziv AS status,
          t4.color AS statuscolor
        FROM s_izdatnica t1 
        LEFT JOIN odjel t2 ON t1.odjelID=t2.ID
        LEFT JOIN osoba t3 ON t1.osobaID=t3.ID
        LEFT JOIN s_status t4 ON t1.status=t4.ID
        $condition
        ORDER BY datum DESC
        LIMIT $limit
  ";
	$result=mysql_query($sql);
	while($row=mysql_fetch_assoc($result)){
    $row["datum"]=mysqldate2eurdate($row["datum"], true);
    $row["status"]='<div class="statusbut" style="background-color:'.$row["statuscolor"].'">'.$row["status"].'</div>';  
    $result2=mysql_query("SELECT * FROM s_stavka WHERE dokument='s_izdatnica' AND dokumentID=".$row["ID"]." ORDER BY position ASC");
    $cntr=1;
    $row["predmet"]="";
    while($row2=mysql_fetch_assoc($result2)){
      if($row["predmet"]) $row["predmet"].=", ";
      $row["predmet"].=$cntr.". ".$row2["naziv"]." - ".$row2["kolicina"]." ".$row2["jmj"];
      $cntr++;
    }    
    $row["link"]="index.php?menu=izdatnica&elID=".$row["ID"];
		$data["data"][]=$row;
	}
	echo json_encode($data);
	exit();
}

if($_GET["op"]=="refreshs_primka"){
  $condition="";
  
  if($_GET["searchstring"]==1) $condition.=" AND t1.datum>(NOW()-INTERVAL 2 DAY)";
  else if($_GET["searchstring"]==2) $condition.=" AND t1.status='nezavrsen' ";
  else if($_GET["searchstring"]) $condition.=" AND (t1.sifra LIKE '%".my_escape($_GET["searchstring"])."%' OR t2.knaziv LIKE '%".my_escape($_GET["searchstring"])."%' OR t3.ime LIKE '%".my_escape($_GET["searchstring"])."%')";
  
  $limit="20";
	$sql="SELECT 
          t1.ID AS ID,
          t1.datum AS datum,
          t2.naziv AS s_dobavljac,
          t3.ime AS odgosoba,
          t1.sifra AS sifra,
          t4.naziv AS status,
          t4.color AS statuscolor
        FROM s_primka t1 
        LEFT JOIN s_dobavljac t2 ON t1.s_dobavljacID=t2.ID
        LEFT JOIN osoba t3 ON t1.osobaID=t3.ID
        LEFT JOIN s_status t4 ON t1.status=t4.ID
        $condition
        ORDER BY datum DESC
        LIMIT $limit
  ";
	$result=mysql_query($sql);
	while($row=mysql_fetch_assoc($result)){
    $row["datum"]=mysqldate2eurdate($row["datum"], true);
    $row["status"]='<div class="statusbut" style="background-color:'.$row["statuscolor"].'">'.$row["status"].'</div>';
    $result2=mysql_query("SELECT * FROM s_stavka WHERE dokument='s_primka' AND dokumentID=".$row["ID"]." ORDER BY position ASC");
    $cntr=1;
    $row["predmet"]="";
    while($row2=mysql_fetch_assoc($result2)){
      if($row["predmet"]) $row["predmet"].=", ";
      $row["predmet"].=$cntr.". ".$row2["naziv"]." - ".$row2["kolicina"]." ".$row2["jmj"];
      $cntr++;
    }
    $row["link"]="index.php?menu=primka&elID=".$row["ID"];
		$data["data"][]=$row;
	}
	echo json_encode($data);
	exit();
}

if($_GET["op"]=="newel"){
  $table=my_escape($_GET["table"]);
  
  if($table=="s_nalog"){
    $row=mysql_fetch_assoc(mysql_query("SELECT * FROM rnalog_nalog WHERE DATE(prijavljen) = DATE(NOW()) ORDER BY oznaka DESC"));
    if($row){
      $oldno=substr($row["oznaka"],-3);
      $oldno=intval($oldno)+1;
      $sifra=substr($row["oznaka"],0,-3).sprintf("%03d",$oldno);
    } else {
      $sifra="A".date("y-m-d/")."001";
    }
    if($_SESSION["odjelID"]==$_GET["zaodjelID"]) {
      $preuzeoID=$_SESSION[$usersession];
      $odjelID=0;
    } else {
      $preuzeoID=0;
      $odjelID=$_SESSION["odjelID"];
    }
    $tmpID=executeQuery("INSERT INTO rnalog_nalog (oznaka, naruciteljID,preuzeoID, odjelID, zaodjelID, prijavljen ) VALUES ('$sifra',".$_SESSION[$usersession].",$preuzeoID ,$odjelID ,".$_GET["zaodjelID"].",NOW())",0,0);
    echo $tmpID;
    exit();
  }
  
  else if($table=="s_racun"){
    $row=mysql_fetch_assoc(mysql_query("SELECT * FROM $table WHERE sifra LIKE '".date("y")."%' ORDER BY sifra DESC"));
    if(!$row) $oldno=0;
    else $oldno=substr($row["sifra"],3);
    $sifra=date("y")."/".sprintf("%04d",(intval($oldno)+1));
  }
  else {  
    $row=mysql_fetch_assoc(mysql_query("SELECT * FROM $table WHERE DATE(datum) = DATE(NOW()) ORDER BY sifra DESC"));
    if($row){
      $oldno=substr($row["sifra"],-3);
      $oldno=intval($oldno)+1;
      $sifra=substr($row["sifra"],0,-3).sprintf("%03d",$oldno);
    } else {
      $sifra=strtoupper(substr($table,2,1)).date("y-m-d/")."001";
    }
  }
  
  $tmpID=executeQuery("INSERT INTO $table (sifra,osobaID,datum) VALUES ('$sifra',$_SESSION[$usersession],NOW())",0,0);
  
  if($table=="s_zahtjev") {
    executeQuery("UPDATE $table t1 SET odjelID=(SELECT odjelID FROM osoba WHERE ID=".$_SESSION[$usersession].") WHERE ID=$tmpID",0,0);
  }
  if($table=="s_primka" || $table=="s_izdatnica") {
    executeQuery("UPDATE $table t1 SET s_skladisteID=(SELECT s_skladisteID FROM osoba WHERE ID=".$_SESSION[$usersession].") WHERE ID=$tmpID",0,0);
  }
  if($_GET["source"]){
    $source=my_escape($_GET["source"]);
    $sourceID=my_escape($_GET["sourceID"]);
    $sourcestatus=my_escape($_GET["sourcestatus"]);
    executeQuery("UPDATE $source SET status='$sourcestatus' WHERE ID=$sourceID ",0,0);
    if($table=="s_primka") {
      $row=mysql_fetch_assoc(mysql_query("SELECT dobavljacID FROM s_narudzba WHERE ID=$sourceID"));
      executeQuery("UPDATE s_primka SET dobavljacID=".$row["dobavljacID"]." WHERE ID=$tmpID",0,0);
    }
    if($table=="s_racun") {
      
      $row=mysql_fetch_assoc(mysql_query("SELECT * FROM s_primka WHERE ID=$sourceID"));
      executeQuery("UPDATE s_racun SET s_dobavljacID=".$row["s_dobavljacID"].", s_skladisteID=".$row["s_skladisteID"]." WHERE ID=$tmpID",0,0);
      executeQuery("UPDATE s_primka SET s_racunID=$tmpID WHERE ID=$sourceID",0,0);
      echo $tmpID;
      exit();
    }
  }
  if($_GET["stavke"]){
    $tmparr=explode("_",$_GET["stavke"]);
    executeQuery("UPDATE s_stavka SET sljedID=$tmpID WHERE ID=".implode(" OR ID=",$tmparr),0,0);
    $sql="SELECT * FROM s_stavka WHERE ID=".implode(" OR ID=",$tmparr);
    $result=mysql_query($sql);
    while($row=mysql_fetch_assoc($result)){
      $row["pretID"]=$row["dokumentID"];
      $row["sljedID"]=0;
      $row["dokument"]=$table;
      $row["dokumentID"]=$tmpID;
      executeQuery(duplicatesql($row, "s_stavka"),0,0);
    }
  } else {
    if($table!="s_racun" && $table!="rnalog_nalog") executeQuery("INSERT INTO s_stavka (dokumentID, dokument, position) VALUES ($tmpID,'$table',1)",0,0);
  }
  echo $tmpID;
  exit();
}


if($_GET["op"]=="delel"){
  $table=my_escape($_GET["table"]);
  $ID=my_escape($_GET["ID"]);
  if($table=="s_artikl"){ 
    mysql_query("DELETE FROM $table WHERE ID='$ID'");
    mysql_query("DELETE FROM s_artikl_skladiste WHERE s_artiklID='$ID'");
    exit();
  }
  if($table=="s_racun"){ 
    mysql_query("DELETE FROM $table WHERE ID='$ID'");
    $sql="SELECT * FROM s_primka WHERE s_racunID='$ID'";
    $result=mysql_query($sql);
    while($row=mysql_fetch_assoc($result)){
      executeQuery("UPDATE s_stavka SET cijena=0, datfakt='0000-00-00 00:00:00' WHERE dokument='s_primka' AND dokumentID=".$row["ID"], "home", 0);
    }
    executeQuery("UPDATE s_primka SET s_racunID=0 WHERE s_racunID=$ID", "home", 0);
    exit();
  }
  $rowx=mysql_fetch_assoc(mysql_query("SELECT * FROM $table WHERE ID=$ID"));
  $sqlarr[]="DELETE FROM $table WHERE ID=$ID";
  $sql="SELECT * FROM s_stavka WHERE dokument='$table' AND dokumentID=$ID";
  $result=mysql_query($sql);
  while($row=mysql_fetch_assoc($result)){
    if($rowx["status"]=="zavrsen" || $rowx["status"]=="2" || $rowx["status"]=="3"){
      if($table=="s_primka") $sqlarr[]="UPDATE s_artikl_skladiste SET datum=NOW(), kolicina=kolicina-".$row["kolicina"]." WHERE s_artiklID='".$row["s_artiklID"]."' AND s_skladisteID=".$rowx["s_skladisteID"];
      if($table=="s_izdatnica" || $table=="rnalog_nalog") $sqlarr[]="UPDATE s_artikl_skladiste SET datum=NOW(), kolicina=kolicina+".$row["kolicina"]." WHERE s_artiklID='".$row["s_artiklID"]."' AND s_skladisteID=".$rowx["s_skladisteID"];
      if($table=="s_izdatnica" && $rowx["u_skladisteID"]) $sqlarr[]="UPDATE s_artikl_skladiste SET datum=NOW(), kolicina=kolicina-".$row["kolicina"]." WHERE s_artiklID='".$row["s_artiklID"]."' AND s_skladisteID=".$rowx["u_skladisteID"];
    }
    $sqlarr[]="DELETE FROM s_stavka WHERE ID=".$row["ID"];
  }
  executeQuery(implode("|-|-|",$sqlarr), $table, $ID);
  exit();
}

if($_GET["op"]=="search"){
  $table=my_escape($_GET["table"]);
  $field=my_escape($_GET["field"]);
  $term=my_escape($_GET["term"]);
  if($table=="s_artikl"){
    $result=mysql_query("SELECT ID,naziv,jmj FROM $table WHERE $field LIKE '%$term%'");
    while($row=mysql_fetch_assoc($result)){
      $data[]=$row["ID"]." | ".$row["naziv"]." | ".$row["jmj"];
    }
    echo json_encode($data);
    exit();
  } else {
    if($table=="x_artikl") $table="s_artikl";
    $result=mysql_query("SELECT $field FROM $table WHERE $field LIKE '%$term%'");
    while($row=mysql_fetch_assoc($result)){
      $data[]=$row[$field];
    }
    echo json_encode($data);
    exit();
  }
}

if($_GET["op"]=="newtemplate"){
  $table=my_escape($_GET["table"]);
  $sourceID=my_escape($_GET["sourceID"]);
  $naziv=my_escape($_POST["naziv"]);
  mysql_query("INSERT INTO s_predlozak (osobaID,odjelID,naziv,datum) VALUES ('".$_SESSION[$usersession]."', '".$_SESSION["odjelID"]."', '$naziv', NOW()) ");
  $ID=mysql_insert_id();
  $result=mysql_query("SELECT * FROM s_stavka WHERE dokument='$table' AND dokumentID=$sourceID ORDER BY position ASC");
  $brojac=0;
  while($row=mysql_fetch_assoc($result)){
    $brojac++;
    mysql_query("INSERT INTO s_stavka (s_artiklID, jmj, naziv, kolicina, dokument, dokumentID, position) VALUES ('".$row["s_artiklID"]."', '".$row["jmj"]."', '".$row["naziv"]."', '".$row["kolicina"]."', 's_predlozak', $ID, $brojac) ");
  }
}
if($_GET["op"]=="loadtemplate"){
  $table=my_escape($_GET["table"]);
  $sourceID=my_escape($_GET["sourceID"]);
  $ID=my_escape($_POST["ID"]);
  $row=mysql_fetch_assoc(mysql_query("SELECT * FROM s_stavka WHERE dokument='$table' AND dokumentID=$sourceID ORDER BY position DESC LIMIT 1"));
  if($row["naziv"]==""){
    mysql_query("DELETE FROM s_stavka WHERE ID=".$row["ID"]);
    $brojac=0;
  }
  else $brojac=$row["position"];
  $result=mysql_query("SELECT * FROM s_stavka WHERE dokument='s_predlozak' AND dokumentID=$ID ORDER BY position ASC");
  while($row=mysql_fetch_assoc($result)){
    $brojac++;
    mysql_query("INSERT INTO s_stavka (s_artiklID, jmj, naziv, kolicina, dokument, dokumentID, position) VALUES ('".$row["s_artiklID"]."', '".$row["jmj"]."', '".$row["naziv"]."', '".$row["kolicina"]."', '$table', $sourceID, $brojac) ");
  }
}

//if($_GET["op"]=="sif"){
//  $result=mysql_query("SELECT * FROM s_racun ORDER BY sifra ASC");
//  $brojac=1;
//  while($row=mysql_fetch_assoc($result)){
//    $sifra=date("y")."/".sprintf("%04d",($brojac));
//    $sqlarr[]="UPDATE s_racun SET sifra='$sifra' WHERE ID=".$row["ID"];
//    $brojac++;
//  }
//  for($i=0;$i<count($sqlarr);$i++){
//    mysql_query($sqlarr[$i]);
//  }
//}

if($_GET["op"]=="rac"){
  $result=mysql_query("SELECT * FROM s_racun ORDER BY sifra ASC");
  while($row=mysql_fetch_assoc($result)){
    $tmpcijena=0;
    $result2=mysql_query("SELECT * FROM s_primka WHERE s_racunID=".$row["ID"]);
    while($row2=mysql_fetch_assoc($result2)){
      $row3=mysql_fetch_assoc(mysql_query("SELECT SUM(kolicina*cijena) AS total FROM s_stavka WHERE dokument='s_primka' AND dokumentID=".$row2["ID"]));
      $tmpcijena+=$row3["total"];
    }
    $sqlarr[]="UPDATE s_racun SET cijena='$tmpcijena' WHERE ID=".$row["ID"];
  }
  for($i=0;$i<count($sqlarr);$i++){
    mysql_query($sqlarr[$i]);
  }
}

?>
