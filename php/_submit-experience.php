<?php //PAGE-21
//echo(mysqli_error($conn));

require_once("../app-includes/app-include.php");
$start = $_GET['start'];
$finish = $_GET['finish'];
$userId = $_GET['user_id'];
$content = $_POST['content'];

$start = query_protect($conn, $start);
$finish = query_protect($conn, $finish);
$userId = query_protect($conn, $userId);
$content = query_protect($conn, $content);

$query = "insert into user_experience(user_id, start, finish, description) values ($userId, '$start', '$finish', '$content')";
$result = mysqli_query($conn, $query);
query_check($result, 'Error 21_101', 1, $conn);

die(header('Location:../profile.php'));
?>