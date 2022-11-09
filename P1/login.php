<?php

require_once "config.php";
session_start();

$name = $_GET['username'];
$password = $_GET['password'];

if(isset($_SESSION['username']))
{
    header("location: profile.html");
    exit;
}
else {
    $sql2 = "SELECT Username FROM users where Username='$name'";
    $result1 = mysqli_query($conn,$sql2);
    $sql3 = "SELECT Password FROM users where Username='$name'";
    $result2 = mysqli_query($conn,$sql3);
    if($result1==$result2){
        session_start();
        $_SESSION["username"] = $name;
        header("location: profile.html");
    }
    else {
        echo "Incorrect login 🤡";
    }

}

?>