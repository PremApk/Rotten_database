<?php
session_start();
session_destroy();
session_start();

$dbServername ="localhost";
$dbUsername ="root";
$dbpassword ="";
$dbName ="ip";

$conn= new mysqli($dbServername,$dbUsername,$dbpassword,$dbName);
$user_name=$_POST["username"];
$password=$_POST["password"];

$sql="select * from emp where name like '$user_name' and pass like '$password';";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
	$_SESSION["uname"] = $user_name;
	$_SESSION["pwd"] = $password;

	header("location:http://localhost/main/main.php");
}
else{
   
	header("location:https://rottendatabase.herokuapp.com//signup/index.html");
}
?>
