<?php

// Database credentials
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

forEach($bridges as $val) {

  $bridgeLocation = $val['location'];
  $updatedAt = $val['status']['updated_at'];
  $bridgeStatus = $val['status']['status'];
  $bridgeName = $val['name'];

  $sql = "INSERT INTO Bridge_status(bridge_location, updated_at, bridge_status, bridge_name)
  VALUES ('$bridgeLocation', '$updatedAt', '$bridgeStatus', '$bridgeName')";

  DB::insert('INSERT INTO `bridge_status` (`bridge_location`, `updated_at`, `bridge_status`, `bridge_name`)
  VALUES (?,?,?,?)', [$bridgeLocation, $updatedAt, $bridgeStatus, $bridgeName]);

  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    echo "\n";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
};


$conn->close();

?>
