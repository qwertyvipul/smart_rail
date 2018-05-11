<?php //STATION PROFILE 
session_start();
//include files
require_once("../app-includes/app-include.php");
require_once("../app-includes/_station.php");
require_once("../app-includes/_train-enquiry.php");

if(isset($_SESSION['station']) and $_SESSION['station']==1){
	$stationId = $_SESSION['stationId'];
}else{
	die(header('Location:station.php'));
}
?>
<!--FIND STATION TRAINS-->
<!doctype html>
<html lang="en">
<head>
<title>Find Trains</title>
<?php include('../meta-tags.html'); ?>
<link rel="stylesheet" href="/sih/css/main.css"/>

<style>
</style>
</head>
<body>
	<?php siteHeader(); ?>
	<section class="index-section">
		<div class="pm-box">
			<ul class="pm-menu">
				<a href="station.php"><li class="pm-item pm-icon"><i class="material-icons">arrow_back</i></li></a>
				<li class="pm-item pm-name"><p><?php echo(getName($conn, $stationId).' | '.getCode($conn, $stationId)); ?></p></li>
				<a href="#siteHead"><li class="pm-item pm-icon"><i class="material-icons">keyboard_arrow_up</i></li></a>
				<div style="clear:both"></div>
			</ul>
		</div>
		
		
	</section>
	<?php siteFooter(); ?>
</body>
</html>