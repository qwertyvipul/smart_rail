<?php //STATION PROFILE
session_start();
//include files
require_once("app-includes/app-include.php");
require_once("app-includes/_notifications.php");

$login=0;
if(isset($_SESSION['userId'])){
	$login=1;
	$userId = $_SESSION['userId'];
	//$fullName = fullName($conn, $userId);
}

?>
<!doctype html>
<html lang="en">
<head>
<title>John Doe</title>
<?php include('meta-tags.html'); ?>
<link rel="stylesheet" href="/sih/css/main.css"/>

<style>
#smNotifications{background:#eee;}
.index-section{background:#ddd;}
.ans-div{border:1px solid #777;}
</style>
</head>
<body>
	<?php siteHeader(); 
		if($login==0) die('Login to view your notifications! <a href="login.php"><button>Click Here</button></a>');
	?>
	<section class="index-section">
		<div class="pm-box">
			<ul class="pm-menu">
				<a href="notifications.php"><li class="pm-item pm-icon"><i class="material-icons">refresh</i></li></a>
				<li class="pm-item pm-name"><p>NOTIFICATIONS</p></li>
				<a href="#siteHead"><li class="pm-item pm-icon"><i class="material-icons">keyboard_arrow_up</i></li></a>
				<div style="clear:both"></div>
			</ul>
		</div>
		<hr class="sh-low-hr"/>
		<section class="ib-section" style="text-align:left;">
			<?php newNotifications($conn, $userId); ?>
			<?php readNotifications($conn, $userId); ?>
		</section>
	</section>
</body>
</html>