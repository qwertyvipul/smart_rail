

<?php 
require_once('../php/connect.php');
$name = $_GET['name'];
$lat = $_GET['lat'];
$lon = $_GET['lng'];

$query = "insert into node_info(node_name, node_x, node_y) values('$name', '$lat', '$lon')";
mysqli_query($conn, $query);
die(header('Location:map.html'));


/*
create table node_info(
	node_id int auto_increment,
	node_name varchar(255),
	node_x varchar(255),
	node_y varchar(255),
	primary key(node_id)
);
*/
?>