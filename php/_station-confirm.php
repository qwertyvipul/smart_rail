<?php //PAGE-31
session_start();
//echo(mysqli_error($conn));
require_once("../app-includes/app-include.php");

if(!isset($_GET['pnr_no'])) die(header('Location:../index.php'));
$pnrNo = query_protect($conn, $_GET['pnr_no']);

$query = "update pnr_info set status = 2 where pnr_no = $pnrNo";
$result = mysqli_query($conn, $query);
query_check($result, 'Error 31_101');
$_SESSION['message'] = 'Thank you for confirming your visit.';

$userId = $_SESSION['userId'];
$title = 'Great you are on time.';
$content = 'Now, get ready to board your train.';
insert_notification($conn, $userId, $title, $content);

die(header('Location:../index.php'));
?>