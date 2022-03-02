<?php
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: GET,POST,PUT,DELETE,OPTIONS');
    header('Access-Control-Allow-Headers: *');
    
    $level = file_get_contents("php://input");
    $id = file_get_contents("php://input");
    $naziv = file_get_contents("php://input");
    $autor = file_get_contents("php://input");
    $izdavac = file_get_contents("php://input");
    $datum_od = file_get_contents("php://input");
    $datum_do = file_get_contents("php://input");
    $godina = file_get_contents("php://input");
    $izdano = file_get_contents("php://input");
    $iduser = file_get_contents("php://input");
    $request = json_decode($postdata);

    $level = $request->level;
    $id = $request->id;
    $naziv = $request->naziv;
    $autor = $request->autor;
    $izdavac = $request->izdavac;
    $datum_od = $request->datum_od;
    $datum_do = $request->datum_do;
    $godina = $request->godina;
    $izdano = $request->izdano;
    $iduser = $request->iduser;
    

if($level==0){ 
    $con = mysqli_connect('localhost', 'root', '', 'knjige');
    
    $q = "INSERT INTO book(id,naziv,autor,izdavač,datum_od,datum_do,godina,izdano,iduser) VALUES (NULL,".$naziv.",".$autor.",".$izdavac.",".$datum_od.",".$datum_do.",".$godina.",".$izdano.",".$iduser.") ";
    
    $r = mysqli_query($con, $q);
}else{"Nemate ovlasti!";}
