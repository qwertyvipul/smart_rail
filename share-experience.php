<?php //SHARE EXPERIENCE
session_start();
//include files
require_once("app-includes/app-include.php");
require_once("app-includes/_profile.php");

if(!isset($_GET['start']) or !isset($_GET['finish'])){
	die(header('profile.php'));
}

$start = $_GET['start'];
$finish = $_GET['finish'];
$userId = $_SESSION['userId'];

?>
<!doctype html>
<html lang="en">
<head>
<title>John Doe</title>
<?php include('meta-tags.html'); ?>
<link rel="stylesheet" href="/sih/css/main.css"/>

<style>
</style>
</head>
<body>
	<?php siteHeader(); ?>
	<section class="index-section">
		<div class="pm-box">
			<ul class="pm-menu">
				<a href="profile.php"><li class="pm-item pm-icon"><i class="material-icons">arrow_back</i></li></a>
				<li class="pm-item pm-name"><p>SHARE YOUR EXPERIENCE</p></li>
				<a href="#siteHead"><li class="pm-item pm-icon"><i class="material-icons">keyboard_arrow_up</i></li></a>
				<div style="clear:both"></div>
			</ul>
		</div>
		
		<div class="index-box expand-box" style="text-align:left;">
			<h3>From : <?php echo $start; ?></h3>
			<h3>To : <?php echo $finish; ?></h3>
			<form class="ex-form" method="post" action="/sih/php/_submit-experience.php?<?php echo("user_id=$userId&start=$start&finish=$finish") ?>">
				<label class="ex-label">Description</label><br/>
				<textarea class="ex-input" name="content" value="" placeholder="Your experience..."></textarea><br/>
				<button class="ex-button">Share</button>
			</form>
			</div>
		</div>
	</section>
	<?php siteFooter(); ?>
</body>
</html>