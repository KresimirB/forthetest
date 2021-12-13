<?
include "db.php";
include "functions.php";
if($_POST["elID"]) $elID=$_POST["elID"];
else $elID=$_GET["elID"];
$context="artikl";
$contextID=$elID;

if($_GET["op"]=="refreshs_artikl"){
  $ID=my_escape($_GET["ID"]);
	$sql="SELECT 
          t1.ID AS ID,
          t1.ID AS sifra,
          t1.naziv AS naziv,
          t1.opis AS opis,
          t1.dod_sifra AS dod_sifra,
          t1.konto AS konto,
          t1.jmj AS jmj,
          t1.datum AS datum,
          SUM(t2.kolicina) AS stanje,
          t1.s_klasaID AS s_klasaID
        FROM s_artikl t1
        LEFT JOIN s_artikl_skladiste t2 ON t1.ID=t2.s_artiklID
        WHERE t1.ID='$ID'
  ";
	$result=mysql_query($sql);
  $row=mysql_fetch_assoc($result);
  
  $row["ispis"]="1";
  $row["ispis2"]="1";
  $row["brisanje"]="1";  
  $data["data"]=$row;
  
  $result=mysql_query("SELECT * FROM s_klasa");
  while($row=mysql_fetch_assoc($result))
    $data["opts"]["s_klasaID"][$row["ID"]]=$row["naziv"];
  
	echo json_encode($data);
	exit();
}

if($_GET["op"]=="refreshskladista"){
  $s_artiklID=my_escape($_GET["elID"]);
	$sql="SELECT
          t1.ID AS ID,
          t1.naziv AS naziv,
          t2.kolicina AS kolicina,
          t2.datum AS datum
        FROM s_skladiste t1
        LEFT JOIN s_artikl_skladiste t2 ON t2.s_artiklID='$s_artiklID' AND t1.ID=t2.s_skladisteID
  ";
	$result=mysql_query($sql);
  while($row=mysql_fetch_assoc($result)){
    $sql2="SELECT 
          SUM(t1.neizdato*t1.cijena) AS vrijednost,
          SUM(t1.neizdato) AS kolicina
        FROM s_stavka t1 
        LEFT JOIN s_primka t2 ON t1.dokumentID=t2.ID
        WHERE t1.s_artiklID='$s_artiklID' AND t1.dokument='s_primka' AND t2.s_skladisteID=".$row["ID"]." AND t1.neizdato>0
  ";
    $row2=mysql_fetch_assoc(mysql_query($sql2));
    $row["vrijednost"]=$row2["vrijednost"];
    $row["prosjek"]=$row["vrijednost"]/$row2["kolicina"];
    $data["data"][]=$row;
  }
	echo json_encode($data);
	exit();
}


if($_GET["op"]=="refreshulazi"){
  $s_artiklID=my_escape($_GET["elID"]);
	$sql="SELECT 
          t1.ID AS ID,
          t1.dokumentID AS s_primkaID,
          t2.sifra AS sifraprimke,
          t2.otpremnica AS otpremnica,
          t3.naziv AS dobavljac,
          t4.naziv AS skladiste,
          t1.kolicina AS kolicina,
          t1.napomena AS napomena,
          t1.cijena AS cijena,
          (t1.cijena*t1.kolicina) AS vrijednost
        FROM s_stavka t1 
        LEFT JOIN s_primka t2 ON t1.dokumentID=t2.ID
        LEFT JOIN s_dobavljac t3 ON t2.s_dobavljacID=t3.ID
        LEFT JOIN s_skladiste t4 ON t2.s_skladisteID=t4.ID
        WHERE t1.s_artiklID='$s_artiklID' AND t1.dokument='s_primka'
        ORDER BY t2.datum DESC
        LIMIT 15000
  ";
	$result=mysql_query($sql);
  $totalkol=0;
  $totalvr=0;
  $kolPS=0;
  $vrPS=0;
  while($row=mysql_fetch_assoc($result)){
    $row["s_primkaID"]='<a href="index.php?menu=primka&elID='.$row["s_primkaID"].'" >'.$row["sifraprimke"].'</a>';
		$data["data"][]=$row;
    if(substr($row["sifraprimke"],0,2)=="PS"){
      $vrPS+=$row["vrijednost"];
      $kolPS+=$row["kolicina"];
    } else {
      $totalvr+=$row["vrijednost"];
      $totalkol+=$row["kolicina"];
    }
	}
  $data["data"][]=array("napomena"=>"TOTAL BEZ POČ. STANJA:", "vrijednost"=>$totalvr, "kolicina"=>$totalkol, "cijena"=>$totalvr/$totalkol );
  $data["data"][]=array("napomena"=>"TOTAL SA POČ. STANJEM:", "vrijednost"=>$totalvr+$vrPS, "kolicina"=>$totalkol+$kolPS, "cijena"=>($totalvr+$vrPS)/($totalkol+$kolPS) );
	echo json_encode($data);
	exit();
}
if($_GET["op"]=="refreshizlazi"){
  $s_artiklID=my_escape($_GET["elID"]);
	$sql="SELECT 
          t1.ID AS ID,
          t1.dokumentID AS s_izdatnicaID,
          t2.sifra AS sifraizdatnice,
          t2.preuzeo AS preuzeo,
          t3.knaziv AS odjel,
          t4.naziv AS skladiste,
          t1.kolicina AS kolicina,
          t1.napomena AS napomena,
          t1.cijena AS cijena,
          (t1.cijena*t1.kolicina) AS vrijednost
        FROM s_stavka t1 
        LEFT JOIN s_izdatnica t2 ON t1.dokumentID=t2.ID
        LEFT JOIN odjel t3 ON t2.odjelID=t3.ID
        LEFT JOIN s_skladiste t4 ON t2.s_skladisteID=t4.ID
        WHERE t1.s_artiklID='$s_artiklID' AND t1.dokument='s_izdatnica'
        ORDER BY t2.datum DESC
        LIMIT 15000
  ";
  $totalkol=0;
  $totalvr=0;
	$result=mysql_query($sql);
  while($row=mysql_fetch_assoc($result)){
    $row["s_izdatnicaID"]='<a href="index.php?menu=izdatnica&elID='.$row["s_izdatnicaID"].'" >'.$row["sifraizdatnice"].'</a>';
		$data["data"][]=$row;
    $totalvr+=$row["vrijednost"];
    $totalkol+=$row["kolicina"];
 	}
  $data["data"][]=array("napomena"=>"TOTAL:", "vrijednost"=>$totalvr, "kolicina"=>$totalkol, "cijena"=>$totalvr/$totalkol );

	echo json_encode($data);
	exit();
}

if($_GET["op"]=="saveval"){
  if($_POST["table"]=="s_artikl"){
    if($_POST["key"]=="s_klasaID"){
      $newid=newid($_POST["value"]);
      $ID=$_POST["ID"];
      executeQuery("UPDATE s_artikl SET ID='$newid', s_klasaID='".$_POST["value"]."' WHERE ID='$ID' |-|-| UPDATE s_artikl_skladiste SET datum=NOW(), s_artiklID='$newid' WHERE s_artiklID='$ID' |-|-| UPDATE s_stavka SET ID='$newid' WHERE ID='$ID' ", $context, $contextID);
      echo $newid;
      exit();
    }
  }
  if($_POST["table"]=="skladista"){
    $s_skladisteID=my_escape($_POST["ID"]);
    $kolicina=my_escape($_POST["value"]);
    $row=mysql_fetch_assoc(mysql_query("SELECT * FROM s_artikl_skladiste WHERE s_artiklID='$elID' AND s_skladisteID=$s_skladisteID"));
    if($row) executeQuery("UPDATE s_artikl_skladiste SET datum=NOW(), kolicina='$kolicina' WHERE s_artiklID='$elID' AND s_skladisteID=$s_skladisteID ", $context, $contextID);
    else executeQuery("INSERT INTO s_artikl_skladiste (kolicina,s_artiklID,s_skladisteID, datum) VALUES('$kolicina','$elID',$s_skladisteID, NOW()) ", $context, $contextID);
    exit();
  }
	savepost();
}

function newid($inprefix){
  $row=mysql_fetch_assoc(mysql_query("SELECT ID FROM s_artikl WHERE ID LIKE '$inprefix%' ORDER BY ID DESC LIMIT 1"));
  $nr=intval(substr($row["ID"], 1))+1;
  return $inprefix.str_pad($nr, 4, "0", STR_PAD_LEFT);
}

?>
