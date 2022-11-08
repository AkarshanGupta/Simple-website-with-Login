<?php
$idUser=filter_input(INPUT_POST,'idUser');
$Username=filter_input(INPUT_POST,'Username');
$password=filter_input(INPUT_POST,'password');
if(!empty($Username)){
if(!empty($password)){
$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="loginsystem";
$conn=new mysqli($host,$dbusername,$dbpassword,$dbname);
if(mysqli_connect_error()){
    die('Connect Error('.mysqli_connect_error.')'.mysqli_connect_error());
}
else{
    $sql ="INSERT INTO"
}
$Conn->close();
}
else{
    echo "password should not be empty";
    die();
}
}
else{
    echo "Username should not be empty";
    die();
}
?>