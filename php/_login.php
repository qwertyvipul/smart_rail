<?php //PAGE-2
//echo(mysqli_error($conn));

require_once("../app-includes/app-include.php");
$username = $_POST['username'];
$password = $_POST['password'];

if(!isset($username)) die('Error 2_101');

$username = query_protect($conn, $username);
$password = query_protect($conn, $password);

$query = "select * from user_info where user_name = '$username' and password = '$password'";
$result = mysqli_query($conn, $query);

if(!$result) die('Error 2_102');
if(mysqli_num_rows($result)!=1) die('Error 2_103 : Invalid username or password!');

$row = mysqli_fetch_assoc($result);
$userId = $row['user_id'];

session_start();
$_SESSION['login']=1;
$_SESSION['userId'] = $userId;

die(header('Location:../index.php'));
?>