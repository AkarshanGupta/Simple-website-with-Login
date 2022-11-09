<?php
    require_once "config.php";

    // define('DB_SERVER','localhost');
    // define('DB_USERNAME','root');
    // define('DB_PASSWORD','');
    // define('DB_NAME','login');

    $conn = mysqli_connect(DB_SERVER, DB_USERNAME,DB_PASSWORD,DB_NAME);

    if($conn == false){
        die('Error: Cannot connect');
    }

    // $name = $_POST['username'];
    // $phone = $_POST['phone'];
    // $email = $_POST['email'];
    // $password = $_POST['password'];
    $name = $_GET['username'];
    $phone = $_GET['phone'];
    $email = $_GET['email'];
    $password = $_GET['password'];

    $sql = "INSERT INTO `users` ( `Username`, `Phone`, `Email`, `Password`) VALUES ( '$name', '$phone', '$email', '$password')";
            
    $results = mysqli_query($conn,$sql);


    header("location: siginup.html");


?>