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


$sql = "SELECT imagen, titulo, descripcion FROM blogs ORDER BY id DESC LIMIT 4";
$result = mysqli_query($conn, $sql);

$pos=0;

if (mysqli_num_rows($result) > 0) {
// output data of each row
	while($row = mysqli_fetch_assoc($result)) {
		echo $pos;
		echo json_encode($row);
		$pos += 1;
	}
} else {
	echo "0 results";
}

mysqli_close($conn);
?>