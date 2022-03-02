<?php
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: GET,POST,PUT,DELETE,OPTIONS');
    header('Access-Control-Allow-Headers: *');
  
    $korisnickoime = file_get_contents("php://input");
    $lozinka = file_get_contents("php://input");
    $name = file_get_contents("php://input");
    $level = file_get_contents("php://input");
    $request = json_decode($postdata);

    $korisnickoime = $request->korisnickoime;
    $lozinka = $request->lozinka;
    $name = $request->name;
    $level = $request->level;
    
    

    $con = mysqli_connect('localhost', 'root', '', 'knjige');
    

    $q="INSERT INTO user (`id`,`uname`,`password`,`name`,`level`) VALUES (NULL,".$korisnickoime.",".$lozinka.",".$name.",".$level.");";
    $r = mysqli_query($con, $q);
