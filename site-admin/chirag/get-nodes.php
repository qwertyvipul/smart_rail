<?php 
$conn = mysqli_connect('localhost', 'root', '12345678', 'testdb');

$offset = $_GET['offset'];

$query = "select * from node_info limit $offset, 1";
$result = mysqli_query($conn, $query);

$rowCount = mysqli_num_rows($result);
if($rowCount==0) die('fail');

$row = mysqli_fetch_assoc($result);
$lat = $row['node_x'];
$lon = $row['node_y'];

echo('{"lat":"'.$lat.'", "lon":"'.$lon.'"}');
?>