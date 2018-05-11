<?php //STATION PROFILE 
session_start();
//include files
require_once("../app-includes/app-include.php");
require_once("../app-includes/_station.php");
require_once("../app-includes/_train-enquiry.php");

if(isset($_SESSION['station']) and $_SESSION['station']==1){
	$stationId = $_SESSION['stationId'];
}
?>
<!--VISIT STATION-->
<!doctype html>
<html lang="en">
<head>
<title>John Doe</title>
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
		
		<div class="index-box" style="text-align:center;">
			<header class="ib-head"><h4 class="ib-label" style="padding:5px;">13307 - DHANBAD - FIROZPUR CANTT - Ganga Sutlej Exp</h4></header>
			<section class="ib-section" style="text-align:left;">
				<div class="ans-div">
					<hr class="sh-low-hr" />
					<header class="ans-head">
						<span class="ans-date">Last updated - 2 hours ago.</span>
						<div style="clear:both"></div>
					</header>
					<section class="ans-section">
						<h4 class="ans-title">13307 - DHANBAD - FIROZPUR CANTT - Ganga Sutlej Exp</h4>
						<p class="ans-content"><b>Status : </b>Will arrive at Patiala Junction on Platform No-2 at 13:00 hrs. The train is running late by 2hrs and 50 min. We are deeply regret for your inconvenience.</p>
					</section>
				</div>
			</section>
		</div>
		
		<div class="index-box" style="text-align:center;">
			<header class="ib-head"><h4 class="ib-label">Train Status</h4></header>
			<section class="ib-section" style="text-align:left;">
				<div class="ans-div">
					<hr class="sh-low-hr" />
					<header class="ans-head">
						<span class="ans-date">Last updated - 2 hours ago.</span>
						<div style="clear:both"></div>
					</header>
					<section class="ans-section">
						<h4 class="ans-title">13307 - DHANBAD - FIROZPUR CANTT - Ganga Sutlej Exp</h4>
						<p class="ans-content"><b>Status : </b>Will arrive at Patiala Junction on Platform No-2 at 13:00 hrs. The train is running late by 2hrs and 50 min. We are deeply regret for your inconvenience.</p>
					</section>
				</div>
			</section>
		</div>
	</section>
	<?php siteFooter(); ?>
</body>
</html>