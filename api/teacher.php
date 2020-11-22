<?php
header('Content-Type: application/json');
include('../config/db.php');

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
