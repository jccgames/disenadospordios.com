<?php
$servername = "168.235.69.194";
$username = "editor";
$password = "c9tz6CEsCSs4a3TV";
$dbname = "disenadospordios";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


//We are connected

$url = $_GET["url"];

$sql = "SELECT * FROM articles WHERE url='$url'";
$result = mysqli_query($conn, $sql);
$data = array();
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
    	$data=$row;
    }
}
mysqli_close($conn);

echo json_encode($data);



?>