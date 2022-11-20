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
$sql = "DELETE FROM loginform_ where uname = '$uname'";  

if ($conn->query($sql) === TRUE)
{
    echo "Account deleted successfully";
}
else
{
    echo "Error deleting account: " . $conn->error;
}
$conn->close();
?>