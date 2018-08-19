<?php
    header("Content-Type: text/html; charset=utf8");

    if(!isset($_POST['submit'])){
        exit("Error");
    }//valid submit or not

    $name=$_POST['name'];//get user name
    $password=$_POST['password'];//get user password

    include("connect.php");

    $q="insert into user(id,username,password) values (null,'$name','$password')";//insert value into database
    $reslut=$con->query($q);

    if (!$reslut){
        die('Error: ' . mysql_error());//if fail to insert
    }else{
        echo "You have signed up!";//succes
    }

    $con = null;

?>