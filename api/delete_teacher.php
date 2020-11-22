<?php
include('../config/db.php');

if (isset($_POST)) {
  $id = $_POST['id'];
}

// sql to delete a record
$sql = "DELETE FROM uteacher WHERE UteacherID ='$id'";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
  header("location: /");
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
