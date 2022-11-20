<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";
$uname = $_POST["username"];
$password = $_POST["password"];

$conn= new mysqli('localhost', 'root','','login');

if($conn->connect_error)
{
    die("Connection failed:". $conn->connect_error);

}
$sql="INSERT INTO loginform_(uname,password) VALUES('$uname','$password')";

if($conn->query($sql) === TRUE){
    header("Location: http://localhost/potava/fun_corner.html");

}
else{
    echo"Error: ". $sql. "<br>". $conn->error;
}

$conn->close();
?>