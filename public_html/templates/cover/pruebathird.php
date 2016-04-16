<?php

$servername = "localhost";
$username = "lector";
$password = "VnFeEAJKs463UHLU";
$dbname = "disenadospordios";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


//We are connected

$sql = "SELECT id, imagen, titulo FROM blogs";
$result = mysqli_query($conn, $sql);
$data = array();
$pos=0;
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
    	$data[]=$row;
    	$data[$pos]['position']=$pos;
    	$pos += 1;
    }
}
mysqli_close($conn);

echo json_encode($data);


?>