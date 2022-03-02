<?php
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: GET,POST,PUT,DELETE,OPTIONS');
    header('Access-Control-Allow-Headers: *');

    $korisnickoime = file_get_contents("php://input");
    $lozinka = file_get_contents("php://input");
    $request = json_decode($postdata);

    $korisnickoime = $request->korisnickoime;
    $lozinka = $request->lozinka;
    


    
    $con = mysqli_connect('localhost', 'root', '', 'knjige');
    $q=" SELECT  *  FROM user WHERE `uname`=".$korisnickoime." AND `password`=".$lozinka." ";
    $r = mysqli_query($con, $q);
