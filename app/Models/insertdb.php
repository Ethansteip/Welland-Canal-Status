<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "welland_canal";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Fetch Canal Status and convert to array
$jsondata = file_get_contents("https://canalstatus.com/api/v1/bridges/");
$json = json_decode($jsondata, true);
$bridges = $json['bridges'];

// Select location, name, status and update time for bridges from array for each bridge.
//Can I clean this up using a the foreach() method??

$bridgeLocation0 = $json['bridges'][0]['location'];
$bridgeName0 = $json['bridges'][0]['name'];
$bridgeStatus0 = $json['bridges'][0]['status']['status'];
$updatedAt0 = $json['bridges'][0]['status']['updated_at'];

$bridgeLocation1 = $json['bridges'][1]['location'];
$bridgeName1 = $json['bridges'][1]['name'];
$bridgeStatus1 = $json['bridges'][1]['status']['status'];
$updatedAt1 = $json['bridges'][1]['status']['updated_at'];

$bridgeLocation2 = $json['bridges'][2]['location'];
$bridgeName2 = $json['bridges'][2]['name'];
$bridgeStatus2 = $json['bridges'][2]['status']['status'];
$updatedAt2 = $json['bridges'][2]['status']['updated_at'];

$bridgeLocation3 = $json['bridges'][3]['location'];
$bridgeName3 = $json['bridges'][3]['name'];
$bridgeStatus3 = $json['bridges'][3]['status']['status'];
$updatedAt3 = $json['bridges'][3]['status']['updated_at'];

$bridgeLocation4 = $json['bridges'][4]['location'];
$bridgeName4 = $json['bridges'][4]['name'];
$bridgeStatus4 = $json['bridges'][4]['status']['status'];
$updatedAt4 = $json['bridges'][4]['status']['updated_at'];

$bridgeLocation5 = $json['bridges'][5]['location'];
$bridgeName5 = $json['bridges'][5]['name'];
$bridgeStatus5 = $json['bridges'][5]['status']['status'];
$updatedAt5 = $json['bridges'][5]['status']['updated_at'];;

$bridgeLocation6 = $json['bridges'][6]['location'];
$bridgeName6 = $json['bridges'][6]['name'];
$bridgeStatus6 = $json['bridges'][6]['status']['status'];
$updatedAt6 = $json['bridges'][6]['status']['updated_at'];

// insert into db

$sql = "INSERT INTO bridge_status(bridge_location, updated_at, bridge_status, bridge_name)
VALUES ('$bridgeLocation0', '$updatedAt0', '$bridgeStatus0', '$bridgeName0'),
('$bridgeLocation1', '$updatedAt1', '$bridgeStatus1', '$bridgeName1'),
('$bridgeLocation2', '$updatedAt2', '$bridgeStatus2', '$bridgeName2'),
('$bridgeLocation3', '$updatedAt3', '$bridgeStatus3', '$bridgeName3'),
('$bridgeLocation4', '$updatedAt4', '$bridgeStatus4', '$bridgeName4'),
('$bridgeLocation5', '$updatedAt5', '$bridgeStatus5', '$bridgeName5'),
('$bridgeLocation6', '$updatedAt6', '$bridgeStatus6', '$bridgeName6')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>