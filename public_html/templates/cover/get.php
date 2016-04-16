<?php
require "/app/connect.php";

$sql = "SELECT id, firstname, lastname, age FROM prueba";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
// output data of each row
	while($row = mysqli_fetch_assoc($result)) {
		echo $row["id"];
	}
} else {
	echo "0 results";
}

mysqli_close($conn);
?>