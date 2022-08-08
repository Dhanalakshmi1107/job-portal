<?php

$cname=$_POST['cname'];
$position = $_POST['position'];
$Jdesc=$_POST['Jdesc'];
$skills = $_POST['skills'];
$CTC = $_POST['CTC'];
$conn = new mysqli('localhost','root','','jobs');
if($conn->connect_error){
echo "$conn->connect_error";
die("Connection Failed : ". $conn->connect_error);
} else {
$stmt = $conn->prepare("insert into jobs(cname,position,Jdesc,skills,CTC) values(?,?,?,?,?)");
$stmt->bind_param("sssss",$cname,$position,$Jdesc,$skills,$CTC);
$execval = $stmt->execute();
echo '<script type ="text/javaScript">';  
echo 'alert("Successfully submitted ")'; 
header("Location:index.php");
echo '</script>';
$stmt->close();
$conn->close();
}
?>