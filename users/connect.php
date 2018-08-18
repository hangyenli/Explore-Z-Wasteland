<?php
    //Creates PDO connection to our database
    $db_name="test";
    $db_username="root";
    $db_password="";
    $con = new PDO('mysql:host=localhost;dbname='.$db_name, $db_username, $db_password);
    if(!$con){
        die("can't connect");
    }
?>