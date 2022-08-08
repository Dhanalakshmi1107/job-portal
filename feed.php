<?php

$name=$_POST['name'];
$email = $_POST['email'];
$number=$_POST['number'];
$review = $_POST['review'];
$conn = new mysqli('localhost','root','','jobs');
if($conn->connect_error){
echo "$conn->connect_error";
die("Connection Failed : ". $conn->connect_error);
} else {
$stmt = $conn->prepare("insert into feedback(name,email,number,review) values(?,?,?,?)");
$stmt->bind_param("ssss",$name,$email,$number,$review);
$execval = $stmt->execute();
echo '<script type ="text/javaScript">';  
echo 'alert("Thank you for your feedback")'; 
header("Location:feedback.php");
echo '</script>';
$stmt->close();
$conn->close();
}
?>