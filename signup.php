<?php
session_start();

$dbServername ="localhost";
$dbUsername ="root";
$dbpassword ="";
$dbName ="ip";

$conn= new mysqli($dbServername,$dbUsername,$dbpassword,$dbName);
$user_name=$_POST["name"];
$password=$_POST["pass"];
$email = $_POST["email"];
$sql = "insert into emp(name,pass,email) values('$user_name','$password','$email');";
if($conn->query($sql) === TRUE)
{
    $_SESSION["uname"] = $user_name;
    $_SESSION["pwd"] = $password;
	header("location:http://localhost/main/main.php");
}
else{
    echo "Already you have account! Try Login";
}
$conn->close();
?>