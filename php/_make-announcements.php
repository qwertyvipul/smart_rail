<?php //PAGE - 16
require_once("../app-includes/app-include.php");
$title = $_POST['title'];
$content = $_POST['content'];
$stationId = $_GET['station_id'];

$query = "insert into ann_info(station_id, title, content) values ($stationId, '$title', '$content')";
$result = mysqli_query($conn, $query);
query_check($result, 'Error 16_101');

die(header('Location:../admin/ann-window.php'));
?>