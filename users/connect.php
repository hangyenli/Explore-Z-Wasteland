<?php
    //Create connection to our database
    $con = new mysqli("127.0.0.1","root","","test");
    if(!$con){
        die("can't connect");
    }
?>