<?php //PAGE-35
require_once("../app-includes/app-include.php");
$content = query_protect($conn, $_POST['content']);
$userId = query_protect($conn, $_GET['user_id']);
$questionId = query_protect($conn, $_GET['question_id']);

$query = "insert into forum_answers(user_id, question_id, answer) values($userId, $questionId, '$content')";
$result = mysqli_query($conn, $query);
query_check($result, 'Error 35_101', $conn, 1);

die(header("Location:../view-answer.php?question_id=$questionId"));
?>