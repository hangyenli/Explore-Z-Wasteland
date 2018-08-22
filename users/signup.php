<?php
header("Content-Type: text/html; charset=utf8");

if (!isset($_POST['submit'])) {
    exit("Error");
}//valid submit or not

include("connect.php");
include ("signUpHelper.php");

$name = $_POST['name'];//get user name
$password = $_POST['password'];//get user password

//check duplication
$is_dup=checkDup($name,$con);
if($is_dup) {
    $con=null;
    echo "<script language=\"javascript\" type=\"text/javascript\">
    //set timeout go to welcome page
    alert('Please pick another Username');
    setTimeout(\"javascript:location.href='signup.html'\", 1);
    </script>";
}

//check password validity


//we insert user into to DB
$q = "insert into user(id,username,password) values (null,'$name','$password')";//insert value into database
$res = $con->query($q);


//redirect to home page and keep login status
echo "you have sign up successfully";

?>