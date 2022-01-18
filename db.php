<?php
//$db = new mysqli('localhost', 'root', '', 'vote');
//$db=mysqli_connect('localhost','fbapothe_kreso','!kresimir123!','fbapothe_ljekarna');
$db = mysqli_connect('localhost', 'root', '', 'task');
mysqli_set_charset($db, "utf8");
if(mysqli_connect_errno()){
    echo 'Sie können sich nicht mit der Basis verbinden!';
    exit;
}
?>
