<?php
$name=$_POST['name'];
$apply = $_POST['apply'];
$qual=$_POST['qual'];
$year = $_POST['year'];
$conn = new mysqli('localhost','root','','jobs');
if($conn->connect_error){
echo "$conn->connect_error";
die("Connection Failed : ". $conn->connect_error);
} else {
$stmt = $conn->prepare("insert into application(name,apply,qual,year) values(?,?,?,?)");
$stmt->bind_param("ssss",$name,$apply,$qual,$year);
$execval = $stmt->execute();
echo '<script type ="text/javaScript">';  
echo 'alert("Successfully submitted ")'; 
header("Location:career.php");
echo '</script>';
$stmt->close();
$conn->close();
}
?>