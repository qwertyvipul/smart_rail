<?php //PAGE-0
require_once('connect.php');

function siteHeader(){
	require_once("site-header.php");
}

function siteFooter(){
	require_once("site-footer.php");
}

function loginHeader(){
	require_once("login-header.php");
}

function adminHeader(){
	require_once("adminHeader.php");
}

function query_check($result, $error, $show=0, $conn='#'){
	if(!$result){
		echo $error;
		if($show==1) echo(' : '.mysqli_error($conn));
		die();
	}
}

function query_protect($conn, $name){
	$name = mysqli_real_escape_string($conn, $name);
	return $name;
}

function insert_notification($conn, $userId, $title, $content, $link='notifications.php'){
	$query = "insert into user_notifications(user_id, link, title, content) values ($userId, '$link', '$title', '$content')";
	$result = mysqli_query($conn, $query);
	query_check($result, 'Error 0_101');
}
?>