<?php
function checkDup($username, $con){

//check duplicate
    $q = "SELECT * FROM `user` WHERE username=$username";
    //$result = $con->prepare($q);
    //$result->execute();
    $result = $con->query($q);
    if ($result->num_rows > 0) {
        echo "!!!";
        return true;
    } else {
        echo "...";
        return false;
    }
}
?>