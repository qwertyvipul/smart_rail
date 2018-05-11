<?php //SAFAI ADMIN WINDOW
session_start();
require_once("../app-includes/app-include.php");
require_once("../app-includes/_profile.php");
require_once("../app-includes/_station.php");
require_once("../app-includes/_safai-window.php");

if($_SESSION['safai'] and $_SESSION['safai']==1){
	$adminId = $_SESSION['adminId'];
}else{
	die(header('Location:index.php'));
}

$stationId = getSafaiStation($conn, $adminId);

?>
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Admin Enquiry Window</title>
<link rel="stylesheet" href="/sih/css/main.css"/>
<link rel="stylesheet" href="/sih/css/admin.css"/>

<style>
</style>
</head>
<body>
	<?php adminHeader() ?>
	<section class="index-section">
		<div class="pm-box">
			<ul class="pm-menu">
				<li class="pm-item pm-icon"><i class="material-icons">home</i></li>
				<li class="pm-item pm-name"><p><?php echo(getName($conn, $stationId).' | '.getCode($conn, $stationId)); ?></p></li>
				<a href="#siteHead"><li class="pm-item pm-icon"><i class="material-icons">keyboard_arrow_up</i></li></a>
				<div style="clear:both"></div>
			</ul>
		</div>
		
		<?php newNullStatus($conn, $stationId); ?>
		<?php getNullStatus($conn, $stationId); ?>
	</section>
	<?php siteFooter(); ?>
</body>
</html>