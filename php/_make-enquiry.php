<?php //PAGE-17
require_once("../app-includes/app-include.php");
$title = query_protect($conn, $_POST['title']);
$content = query_protect($conn, $_POST['content']);
$stationId = query_protect($conn, $_GET['station_id']);
$userId = query_protect($conn, $_GET['user_id']);

$query = "insert into enquiry_questions(station_id, user_id, title, content) values($stationId, $userId, '$title', '$content')";
$result = mysqli_query($conn, $query);
query_check($result, 'Error 17_101', $conn, 1);

die(header('Location:../station/enquiry-window.php'));
?>