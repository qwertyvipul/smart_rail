<?php //PAGE-8
//echo(mysqli_error($conn));

require_once("../app-includes/app-include.php");
$username = $_POST['username'];
$password = $_POST['password'];

if(!isset($username)) die('Error 8_101');

$username = mysqli_real_escape_string($conn, $username);
$password = mysqli_real_escape_string($conn, $password);

$query = "select * from ann_admin where user_name = '$username' and password = '$password'";
$result = mysqli_query($conn, $query);

query_check($result, 'Error 8_102');
if(mysqli_num_rows($result)!=1) die('Error 8_103 : Invalid username or password!');

$row = mysqli_fetch_assoc($result);
$adminId = $row['admin_id'];

session_start();
$_SESSION['ann']=1;
$_SESSION['adminId'] = $adminId;

die(header('Location:../admin/ann-window.php'));
?>