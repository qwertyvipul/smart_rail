<?php //PAGE-33
require_once("../app-includes/app-include.php");
$title = query_protect($conn, $_POST['title']);
$content = query_protect($conn, $_POST['content']);
$userId = query_protect($conn, $_GET['user_id']);

$query = "insert into forum_questions(user_id, title, content) values($userId, '$title', '$content')";
$result = mysqli_query($conn, $query);
query_check($result, 'Error 33_101', $conn, 1);

die(header('Location:../help.php'));
?>