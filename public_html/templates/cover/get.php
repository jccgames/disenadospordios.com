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
} else {
	echo "Connection made";
}


$sql = "SELECT id, firstname, lastname, age FROM prueba";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
// output data of each row
	while($row = mysqli_fetch_assoc($result)) {
		echo $row;
	}
} else {
	echo "0 results";
}

mysqli_close($conn);
?>