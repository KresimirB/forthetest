<?php
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: GET,POST,PUT,DELETE,OPTIONS');
    header('Access-Control-Allow-Headers: *');
    
    
    $level = file_get_contents("php://input");
    $id = file_get_contents("php://input");
    $request = json_decode($postdata);

    $level = $request->$level;
    $id = $request->id;

    if($level==0){ 
        
    $con = mysqli_connect('localhost', 'root', '', 'knjige');
    
    $q = "DELETE  FROM book WHERE id = ".$id." ";
    
    $r = mysqli_query($con, $q);
    }else{"Nemate Ovlasti!";}
