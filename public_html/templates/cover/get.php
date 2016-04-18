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

$sql = "SELECT title, picture FROM posts ORDER BY id DESC LIMIT 3";
$result = mysqli_query($conn, $sql);
$cover = array('pos' => 0, 'title' => 'Bienvenido a Dise&ntilde;ados por Dios', 'picture' => '/images/cover.jpg');
$data = array();
$data[] = $cover;
$pos = 0;
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
    	$pos += 1;
    	$row['pos'] = $pos;
    	$data[]=$row;
    }
}
mysqli_close($conn);

echo html_entity_decode(stripcslashes(json_encode($data)));


?>