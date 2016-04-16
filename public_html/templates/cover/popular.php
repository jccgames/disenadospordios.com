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

$sql = "SELECT * FROM blogs ORDER BY vistas DESC LIMIT 20";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $fecha_unformat=$row['fecha'];
        include 'date_format.php';
    	echo 
            "<div class='blog-feed'>
                <div class='blog-box'>
                    <img src='http://www.disenadospordios.com/".$row['imagen']."'>
                    <a href='http://www.disenadospordios.com/blog/". $row['url'] ."'><h1 class='color'>".utf8_encode($row['titulo'])."</h1></a>
                    <small>Por: <a href='http://www.disenadospordios.com/buscar/escritor/".$row['escritor_id']."'>" . $row['escritor'] . "</a></small>
                    <p>".utf8_encode($row['descripcion'])."...</p>
                    <div class='show-info hide'> <span class='icon-clock'>".$fecha."</span> <span class='icon-view'>".$row['vistas']."</span></div>
                    <div class='read-more'><a href='http://www.disenadospordios.com/blog/". $row['url'] ."'>Leer mas...</a></div>";
                    $id=$row['id']; echo "<span class='icon-tag'>"; include 'feed_tag.php'; echo "</span>
                </div>
            </div>";
    }
}
mysqli_close($conn);


?>