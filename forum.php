<?php //STATION PROFILE
session_start();
//include files
require_once("app-includes/app-include.php");
require_once("app-includes/_profile.php");
require_once("app-includes/_help.php");
require_once("app-includes/_forum.php");

function indexApp($appIcon, $appName, $link=""){
	echo('
	<a href="'.$link.'"><div class="index-app">
		<div class="ip-pic"><i class="material-icons">'.$appIcon.'</i></div>
		<h4 class="ip-name">'.$appName.'</h4>
	</div></a>
	');
}
?>
<!doctype html>
<html lang="en">
<head>
<title>IRCTC Forum</title>
<?php include('meta-tags.html'); ?>
<link rel="stylesheet" href="/sih/css/main.css"/>

<style>

</style>
</head>
<body>
	<?php siteHeader(); ?>
	<section class="index-section">
		<!--LATEST QUESTIONS-->
		<div class="index-box expand-box" style="text-align:left;">
			<header class="ex-head">
				<h4 class="ex-title">Latest Questions</h4>
				<div style="clear:both"></div>
			</header>
			
			<!--ENQUIRY SCROLL-->
			<?php latestQuestions($conn); ?>
			<a href="forum.php"><button class="box-foot-button">SHOW MORE</button></a>
		</div>
	</section>
	
	<section class="index-section">
		<!--LATEST QUESTIONS-->
		<div class="index-box expand-box" style="text-align:left;">
			<header class="ex-head">
				<h4 class="ex-title">All Questions</h4>
				<div style="clear:both"></div>
			</header>
			
			<!--ENQUIRY SCROLL-->
			<?php allQuestions($conn); ?>
			<div class="flink-div"><a href="" class="flink">1. This is some question?</a><br/></div><hr/>
			<a><button class="box-foot-button">SHOW MORE</button></a>
		</div>
	</section>
	<?php siteFooter(); ?>
</body>
</html>