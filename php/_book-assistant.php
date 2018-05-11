<?php //PAGE-28
//echo(mysqli_error($conn));
session_start();
require_once("../app-includes/app-include.php");
$pnr = query_protect($conn, $_GET['pnr_no']);
$userId = $_SESSION['userId'];
$query = "update pnr_info set user_id = $userId where pnr_no = $pnr";
$result = mysqli_query($conn, $query);
query_check($result, 'Error 28_101');

$_SESSION['message'] = 'Congratulations, a virtual assistant will always be there for you through out your journey.';

$title = 'Congratulations';
$content = 'We will always be there for you'.
insert_notification($conn, $userId, $title, $content);

die(header('Location:../index.php'));
?>