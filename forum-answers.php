<?php //STATION PROFILE
session_start();
//include files
require_once("app-includes/app-include.php");
require_once("app-includes/_profile.php");
require_once("app-includes/_help.php");
require_once("app-includes/_forum.php");
require_once("app-includes/_forum-answers.php");

if(!isset($_GET['question_id'])) die(header('Location:forum.php'));
$questionId = $_GET['question_id'];

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
		<div class="forum-question"><?php forumQuestion($conn, $questionId); ?></div>
		<hr class="es-mid-hr"/>
	
		<!--LATEST QUESTIONS-->
		<div class="index-box expand-box" style="text-align:left;">
			<header class="ex-head">
				<h4 class="ex-title">Answers</h4>
				<div style="clear:both"></div>
			</header>
			
			<!--ANSWERS-->
			<div class="fa-div">
				<section class="fa-section"><p class="fa-answer">This is an answer.</p></section>
				<footer class="fa-footer">
					<ul class="fa-foot-ul">
						<li class="fa-foot-li"><button class="fa-foot-button">Upvote (2)</button></li>
						<li class="fa-foot-li"><button class="fa-foot-button">Comments (63)</button></li>
						<li class="fa-foot-li"><button class="fa-foot-button">Downvote (3)</button></li>
						<div style="clear:both"></div>
					</ul>
				</footer>
			</div>
			<div class="fa-div">
				<section class="fa-section"><p class="fa-answer">This is an answer.</p></section>
				<footer class="fa-footer">
					<ul class="fa-foot-ul">
						<li class="fa-foot-li"><button class="fa-foot-button">Upvote (2)</button></li>
						<li class="fa-foot-li"><button class="fa-foot-button">Comments (63)</button></li>
						<li class="fa-foot-li"><button class="fa-foot-button">Downvote (3)</button></li>
						<div style="clear:both"></div>
					</ul>
				</footer>
			</div>
			<div class="fa-div">
				<section class="fa-section"><p class="fa-answer">This is an answer.</p></section>
				<footer class="fa-footer">
					<ul class="fa-foot-ul">
						<li class="fa-foot-li"><button class="fa-foot-button">Upvote (2)</button></li>
						<li class="fa-foot-li"><button class="fa-foot-button">Comments (63)</button></li>
						<li class="fa-foot-li"><button class="fa-foot-button">Downvote (3)</button></li>
						<div style="clear:both"></div>
					</ul>
				</footer>
			</div>
		</div>
	</section>
	<?php siteFooter(); ?>
</body>
</html>