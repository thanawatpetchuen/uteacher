<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "teacher_system";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST)) {
  $teacher_name = $_POST['UteacherNAME'];
  $rank = $_POST['RANK'];
  $education = $_POST['Education'];
}

$sql = "INSERT INTO uteacher (UteacherNAME,RANK,Education)
	 VALUES ('$teacher_name','$rank','$education')";
if (mysqli_query($conn, $sql)) {
  header( "location: /" );
} else {
  echo "Error: " . $sql . "
" . mysqli_error($conn);
}

$conn->close();
