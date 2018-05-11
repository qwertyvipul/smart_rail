<?php //JOURNEY PAGE
session_start();
//include files
require_once("app-includes/app-include.php");
require_once("app-includes/_profile.php");
require_once("app-includes/_journey-planner.php");

if(!isset($_GET['start']) or !isset($_GET['finish']) or !isset($_GET['date'])) die(header('Location:index.php'));
$start = query_protect($conn, $_GET['start']);
$finish = query_protect($conn, $_GET['finish']);
$date = query_protect($conn, $_GET['date']);

?>
<!--JOURNEY PAGE-->
<!doctype html>
<html lang="en">
<head>
<title>Plan Your Journey</title>
<?php include('meta-tags.html'); ?>
<link rel="stylesheet" href="css/main.css"/>

<style>

</style>


</head>
<body>
	<?php siteHeader(); ?>
	<section class="index-section">
		<div class="index-box">
			<header class="ib-head"><h4 class="ib-label">Plan Your Journey</h4></header>
			<section class="ib-section">
				<p>From : </p><?php echo $start; ?>
				<p>To : </p><?php echo $finish; ?>
				<p>Date : </p><?php echo $date; ?>
			</section>
		</div>
		
		<div class="index-box">
			<header class="ib-head"><h4 class="ib-label">Trains from <br><?php echo($start.'<br>to<br>'.$finish); ?>.</h4></header>
			<section class="ib-section">
				<p>From : </p><?php echo $start; ?>
				<p>To : </p><?php echo $finish; ?>
				<p>Date : </p><?php echo $date; ?>
			</section>
		</div>
		
		<div class="index-box">
			<header class="ib-head"><h4 class="ib-label">Alternative Routes</h4></header>
			<section class="ib-section">
				<p>From : </p><?php echo $start; ?>
				<p>To : </p><?php echo $finish; ?>
				<p>Date : </p><?php echo $date; ?>
			</section>
		</div>
		
		<div class="index-box">
			<header class="ib-head"><h4 class="ib-label">Past Experiences</h4></header>
			<section class="ib-section">
				<?php getExperience($conn, $start, $finish); ?>
			</section>
		</div>
	</section>
	<?php siteFooter(); ?>
</body>
</html>

