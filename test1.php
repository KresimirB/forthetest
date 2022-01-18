<?php
$vrjednosttd=$_POST['vrjednosttd'];
$vrjednostinputanovi=$_POST['vrjednostinputanovi'];
$kvadratic=$_POST['kvadratic'];

include('db.php');

$query="SELECT * FROM timegrid ";
 $result = $db->query($query);
 $rows = array();
 while($row = $result->fetch_assoc()){
     $rows[] = $row;
 }
 echo json_encode($rows);
