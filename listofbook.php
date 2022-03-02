<?php

     $con = mysqli_connect('localhost', 'root', '', 'knjige');
    $q = "SELECT * FROM book";
    $r = mysqli_query($con, $q);

    $rows = array();
    while($row = mysqli_fetch_assoc($r))
    {
        $rows[] = $row;
    }
    echo json_encode($rows); 
