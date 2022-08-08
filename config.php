<?php

$name=$_POST['name'];
$email = $_POST['email'];
$number=$_POST['phone_no'];
$password = $_POST['password'];
$c_password = $_POST['c_password'];
$conn = new mysqli('localhost','root','','jobs');
if($conn->connect_error){
echo "$conn->connect_error";
die("Connection Failed : ". $conn->connect_error);
} else {
$stmt = $conn->prepare("insert into user(name,email,phone_no,password,c_password) values(?,?,?,?,?)");
$stmt->bind_param("sssss",$name,$email,$number,$password,$c_password);
$execval = $stmt->execute();
echo '<script type ="text/javaScript">';  
echo 'alert("Successfully submitted ")'; 
header("Location:login.php");
echo '</script>';
$stmt->close();
$conn->close();
}
?>