<?php
$valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp' , 'pdf' , 'doc' , 'ppt', 'docx','ico'); // valid extensions
$path = 'images/'; // upload directory ovo je putanja gdje zelim da se sprema
if($_FILES['image'])
{
$img = $_FILES['image']['name'];

$tmp = $_FILES['image']['tmp_name'];
// get uploaded file's extension
$ext = pathinfo($img, PATHINFO_EXTENSION);
// can upload same image using rand function
$final_image = $img;
// check's valid format
if(in_array($ext, $valid_extensions)) 
{ 
$path = $path.$final_image; 
if(move_uploaded_file($tmp,$path)) 
{


//include database configuration file
include_once 'db.php';
//insert form data in the database
// $insert = $db->query("UPDATE govor SET file_name='$path'");
//echo $insert?'ok':'err';
}
} 
else 
{
echo 'invalid';
}
}

// if(isset($_GET['ime'])){
//     $image=$_POST['uploadImage'];
//     $rows = array();
//     $rows[] = $image;
//     echo json_encode($image);
// }
?>

