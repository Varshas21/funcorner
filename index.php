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
$sql = "SELECT * FROM loginform_ where uname = '$uname' and password = '$password'";  
$result = mysqli_query($conn, $sql);  
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
$count = mysqli_num_rows($result);  
if($count == 1){  
    header("Location: http://localhost/potava/fun_corner.html");
}  
else{  
    header("Location: http://localhost/potava/invalid.html");
}

$conn->close();
?>