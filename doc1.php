<?
include "db.php";
include "functions.php";
$context="analitika";
$contextID="0";

/*
 * TRAŽENJE SLOBODNIH DANA DJELATNIKA
SELECT 
DISTINCT(DATE(t1.vrijeme)), 
COUNT(*) AS cnt
FROM osoba_login t1 
WHERE t1.vrijeme>'2013-07-01' 
AND WEEKDAY(t1.vrijeme)<5
AND NOT EXISTS (SELECT * FROM osoba_login t2 WHERE t2.osobaID=4 AND DATE(t2.vrijeme)=DATE(t1.vrijeme)) 
GROUP BY DATE(t1.vrijeme)
HAVING cnt>10
 */
if($_GET["op"]=="refreshdjelatnici"){
	$sqlx="SELECT ID, ime FROM osoba WHERE odjelID=".$_SESSION["odjelID"]." ORDER BY ime ASC";
	$resultx=mysql_query($sqlx);
	while($rowx=mysql_fetch_assoc($resultx)){
    //$ndays=date("t",strtotime(date("Y")."-".date("m")."-01"));
    $ndays=date("j");
    $slobodni=0;
    $res="";
    $osobaID=$rowx["ID"];
    for($i=1;$i<=$ndays;$i++){
      $day=date("N",strtotime(date("Y")."-".date("m")."-".$i));
      $timestr=date("Y")."-".date("m")."-".$i;
      $timestr2=date("Y")."-".date("m")."-".($i+1);
      $row=mysql_fetch_assoc(mysql_query("SELECT vrijeme, IP FROM osoba_login WHERE osobaID=$osobaID AND vrijeme > '$timestr' AND vrijeme < '$timestr2' ORDER BY vrijeme ASC LIMIT 1"));
      if($row){
        $expl1=explode(" ",$row["vrijeme"]);
        $expl2=explode(":",$expl1[1]);
        if($expl2[0]>7 || ($expl2[0]==7 && $expl2[1]>30)){
          $bgcolor=2;
        } else {
          $bgcolor=1;
        }
        $vrijemedolaska=$expl2[0].":".$expl2[1];
      } else {
        $bgcolor=0;
        $vrijemedolaska="NA";
        if($day<=5) $slobodni++;
      }
      if($day>5) {
        $bgcolor=3;
      }
      $res.='<div class="vx vc'.$bgcolor.'" title="'.$vrijemedolaska."-".$row["IP"].'">'.$i.'</div>';
    }
    
    $timestr=date("Y")."-".date("m")."-".$i;
    $timestr2=date("Y")."-".date("m")."-".($i+1);
    $row=mysql_fetch_assoc(mysql_query("SELECT COUNT(*) as cnt FROM rnalog_nalog WHERE prijavljen > (NOW()- INTERVAL 30 DAY) AND (preuzeoID=$osobaID OR sudjelovali LIKE '%\"$osobaID\"%')"));
    $rowx["nalmj"]=$row["cnt"];
    $rowx["dolasci"]=$res;
    $rowx["mjesec"]=$slobodni;
		$data["data"][]=$rowx;
	}
	echo json_encode($data);
	exit();
}

?>
