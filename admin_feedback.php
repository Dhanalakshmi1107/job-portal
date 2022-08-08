<?php include 'header.php'?>

<div class="content">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Contact number</th>
      <th scope="col">Review</th>
    </tr>
  </thead>
  <!-- <tbody> -->
    <tr>
    <?php
$conn = mysqli_connect("localhost", "root", "", "jobs");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id,name,email,number,review  FROM feedback";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td >" . $row["id"]. "</td> <td >" . $row["name"]. "</td><td>" . $row["email"] . "</td><td>". $row["number"]. "</td><td >" . $row["review"]. "</td><td>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>

     <!-- <th scope="row">1</th>
      <td>Sam</td>
      <td>Software Developer</td>
      <td><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Kim</td>
      <td>Digital Marketing</td>
      <td><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td> -->
    </tr>
  <!-- </tbody> -->
</table>
</div>