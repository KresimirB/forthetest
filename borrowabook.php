<?php

    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: GET,POST,PUT,DELETE,OPTIONS');
    header('Access-Control-Allow-Headers: *');
    
    $iduser = file_get_contents("php://input");
    $izdano = file_get_contents("php://input");
    $id = file_get_contents("php://input");
    $request = json_decode($postdata);
    
    $iduser = $request->iduser;
    $izdano = $request->izdano;
    $id = $request->id;

    $con = mysqli_connect('localhost', 'root', '', 'eko');
    
    $q = "UPDATE stanje SET izdano = 1,iduser = ".$iduser." WHERE id = ".$id." ";
    
    $r = mysqli_query($con, $q);
