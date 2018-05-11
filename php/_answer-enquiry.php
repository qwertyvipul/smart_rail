<?php //PAGE-20
require_once("../app-includes/app-include.php");
$reply = query_protect($conn, $_POST['official_reply']);
$enquiryId = query_protect($conn, $_GET['enquiry_id']);

$query = "update enquiry_questions set official_reply = '$reply' where enquiry_id=$enquiryId";
$result = mysqli_query($conn, $query);
query_check($result, 'Error 20_101');

die(header('Location:../admin/enq-window.php'));
?>