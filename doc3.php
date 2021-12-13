<?
include "db.php";
include "functions.php";


if($_GET["op"]=="refreshartikl"){
  $havingstr="";
  $condition="";
  if($_GET["searchstring"]){
    if($_GET["searchstring"]==1) $havingstr="HAVING SUM(t2.kolicina)>0";
    else if($_GET["searchstring"]==2) $havingstr="HAVING SUM(t2.kolicina)<t1.minkol";
    else if($_GET["searchstring"]==3) $condition="WHERE t1.konto=''";
    else {
      $ss=my_escape($_GET["searchstring"]);
      $condition="WHERE t1.ID LIKE '%$ss%' OR t1.naziv LIKE '%$ss%' ";
    }
  }
  
  $page=$_GET["page"];
  $resperpage=100;  
  $limit=($page-1)*$resperpage.", ".$resperpage;
  
  if($_GET["sortkey"]){
    $sortstr="ORDER BY ".my_escape($_GET["sortkey"]);
    if($_GET["sortorder"]<0) $sortstr.=" DESC";
  } else {
    $sortstr="ORDER BY datum DESC";
  }

  $sql="SELECT 
          t1.ID AS ID,
          t1.ID AS sifra,
          t1.jmj AS jmj,
          t1.naziv AS naziv,
          t1.konto AS konto,
          t1.datum AS datum,
          t1.s_klasaID AS s_klasaID,
          t1.datum AS datum,
          SUM(t2.kolicina) AS kol,
          t1.minkol AS minkol
        FROM s_artikl t1 
        LEFT JOIN s_artikl_skladiste t2 ON t1.ID=t2.s_artiklID
        $condition
        GROUP BY t1.ID
        $havingstr
        $sortstr
        LIMIT $limit
  ";

  $sql="SELECT 
          t1.ID AS ID,
          t1.ID AS sifra,
          t1.jmj AS jmj,
          t1.naziv AS naziv,
          t1.konto AS konto,
          t1.datum AS datum,
          t1.s_klasaID AS s_klasaID,
          SUM(t2.neizdato) AS kol,
          t1.minkol AS minkol
        FROM s_artikl t1 
        LEFT JOIN s_stavka t2 ON t1.ID=t2.s_artiklID
        $condition
        GROUP BY t1.ID
        $havingstr
        $sortstr
        LIMIT $limit
  ";
  $result=mysql_query($sql);
  
	while($row=mysql_fetch_assoc($result)){
    $row["link"]="index.php?menu=artikl&elID=".$row["ID"];
    if(!$row["kol"]) $row["kol"]=0;
		$data["data"][]=$row;
	}
	echo json_encode($data);
	exit();
}

if($_GET["op"]=="noviartikl"){
  $klasa=substr($_POST["klasa"],0,1);
  if($klasa!="M" && $klasa!="S" && $klasa!="O"){
    echo 0;
    exit();
  }
  $tmpid=newid($klasa);
  mysql_query("INSERT INTO s_artikl (ID,s_klasaID, datum) VALUES ('$tmpid','$klasa',NOW())");
  echo $tmpid;
  exit;
}


function newid($inprefix){
  $row=mysql_fetch_assoc(mysql_query("SELECT ID FROM s_artikl WHERE ID LIKE '$inprefix%' ORDER BY ID DESC LIMIT 1"));
  $nr=intval(substr($row["ID"], 1))+1;
  return $inprefix.str_pad($nr, 4, "0", STR_PAD_LEFT);
}

?>
