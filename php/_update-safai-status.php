<?php //PAGE-26
//echo(mysqli_error($conn));

require_once("../app-includes/app-include.php");
$newStatus = query_protect($conn, $_POST['new_status']);
$requestId = query_protect($conn, $_GET['request_id']);

if(!isset($newStatus) or !isset($requestId)) die('Error 26_101');

$query = "update safai_request set status = '$newStatus' where request_id = $requestId";
$result = mysqli_query($conn, $query);
query_check($result, 'Error 26_101');

die(header('Location:../admin/safai-window.php'));
?>