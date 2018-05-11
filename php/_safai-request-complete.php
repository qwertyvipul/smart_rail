<?php //PAGE-27 
require_once("../app-includes/app-include.php");
$requestId = query_protect($conn, $_GET['request_id']);

$query = "update safai_request set final = 1 where request_id = $requestId";
$result = mysqli_query($conn, $query);
query_check($result, 'Error 27_101');

die(header('Location:../admin/safai-window.php'));
?>