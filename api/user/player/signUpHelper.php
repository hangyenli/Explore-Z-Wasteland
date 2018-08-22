<?php

include "playerDataInitializer.php";

function checkDup($username, $con){

//check duplicate
    $q = "SELECT * FROM `user` WHERE username=$username";
    $result = $con->query($q);
    if ($result->num_rows > 0) {
        return true;
    } else {
        return false;
    }
}

function register($username, $passwordH, $con)
{
    $q = "insert into user(id,username,password) values (null,'$username','$passwordH')";//insert value into database
    $con->query($q);


    playerDataInitialize($username,$con);
}

?>