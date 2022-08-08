<?php include 'header.php'?>

<div class="content">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Candidate Name</th>
      <th scope="col">Position</th>
      <th scope="col">Qualification</th>
      <th scope="col">Year Passed</th>
    </tr>
  </thead>
    <tr>
    <?php
$conn = mysqli_connect("localhost", "root", "", "jobs");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id,name,apply,qual,year  FROM application";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td >" . $row["id"]. "</td> <td >" . $row["name"]. "</td><td>" . $row["apply"] . "</td><td>". $row["qual"]. "</td> <td>". $row["year"]. "</td><td>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
    </tr>
  
</table>
</div>