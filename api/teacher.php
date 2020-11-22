<?php
header('Content-Type: application/json');

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "teacher_system";

// Create connection
$conn  = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM uteacher";
$result = $conn->query($sql);

$list = array();

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    // $myObj = new stdClass();
    // $myObj->id = $row["uteacherid"];
    // $myObj->rank = $row["RANK"];
    // $myObj->name = $row["uteachername"];
    // $myObj->education = "Education";
    // $myObj->course = "001";
    // $myObj->facultyId = "002";
    $row["course"] = "001";
    array_push($list, $row);
  }
}

$conn->close();




$myJSON = json_encode($list);
echo $myJSON;
