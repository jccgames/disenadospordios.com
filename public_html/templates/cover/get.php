<?php

$servername = "168.235.69.194";
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

$sql = "SELECT title, picture, views, likes, description FROM articles WHERE publish='1' ORDER BY datePublish DESC LIMIT 3";
$result = mysqli_query($conn, $sql);
$cover = array('pos' => 0, 'title' => 'Bienvenido a Dise&ntilde;ados por Dios', 'picture' => '/images/cover.jpg', 'views' => 0, 'likes' => 0, 'description' => 'Reflexiones para tu vida cristiana.');
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

echo json_encode($data);


?>