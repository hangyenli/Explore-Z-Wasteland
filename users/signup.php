<?php
header("Content-Type: text/html; charset=utf8");

if (!isset($_POST['submit'])) {
    exit("Error");
}//valid submit or not

$name = $_POST['name'];//get user name
$password = $_POST['password'];//get user password

include("connect.php");



//no duplicate, then we insert user info to DB
$q = "insert into user(id,username,password) values (null,'$name','$password')";//insert value into database
$res = $con->prepare($q);
$res->execute();

if (!$res) {
    die('Error: ' . error_log("fail to sign up"));//if fail to insert
} else {
    echo "You have signed up!";//succes
    echo "<script language=\"javascript\" type=\"text/javascript\"> 
    //set timeout go to welcome page
    setTimeout(\"javascript:location.href='../htdocs/index.html'\", 3000); 
    </script>";

}

$con = null;

?>