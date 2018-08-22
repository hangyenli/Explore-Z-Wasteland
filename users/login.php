<?PHP
header("Content-Type: text/html; charset=utf8");


if (!isset($_POST["submit"])) {
    exit("Error");
}//valid submit or not

include("connect.php");
include ("../api/view/alertAndPageJump.php");

$name = $_POST['name'];//get username
$passowrdH = md5($_POST['password']);//get password

if ($name and $_POST['password']) {//if username and password are entered, query
    $sql = "select * from user where username = '$name' and password='$passowrdH'";
    $result = $con->query($sql);

    if ($result->num_rows>0) {
        header("refresh:0;url=../htdocs/index.html");
        exit;
    } else {
        alertAndJump("Wrong username or Password","login.html",2000);
    }

} else {
    alertAndJump("Please fill in all fields","login.html",2400);
}

$con->close();
?>