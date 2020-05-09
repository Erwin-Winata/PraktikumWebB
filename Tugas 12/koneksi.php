<?php
    $connect = new mysqli("localhost","root","","perpus");
    if(!$connect){
        echo "Connection Error!!";
        exit();
    } 
?>