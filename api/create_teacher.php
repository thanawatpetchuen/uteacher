<?php
include('../config/db.php');

if (isset($_POST)) {
  $teacher_name = $_POST['UteacherNAME'];
  $rank = $_POST['RANK'];
  $education = $_POST['Education'];
}

$sql = "INSERT INTO uteacher (UteacherNAME,RANK,Education)
	 VALUES ('$teacher_name','$rank','$education')";
if (mysqli_query($conn, $sql)) {
  header("location: /");
} else {
  echo "Error: " . $sql . "
" . mysqli_error($conn);
}

$conn->close();
