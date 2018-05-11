<?php //STATION PROFILE
session_start();
//include files
require_once("app-includes/app-include.php");
require_once("app-includes/_profile.php");
require_once("app-includes/_help.php");

$userId = 0;
$sbtn = 'block';
$sdiv = 'none';
if(isset($_SESSION['login']) and $_SESSION['login']==1){
	$userId = $_SESSION['userId'];
	$sbtn = 'none';
	$sdiv = 'block';
}
?>
<!doctype html>
<html lang="en">
<head>
<title>IRCTC Help</title>
<?php include('meta-tags.html'); ?>
<link rel="stylesheet" href="/sih/css/main.css"/>

<style>
#smHelp{background:#eee;}
</style>
</head>
<body>
	<?php siteHeader(); ?>
	<section class="index-section">
	
		<div class="index-box expand-box" style="text-align:left;">
			<header class="ex-head">
				<h4 class="ex-title">Ask a question</h4>
				<button class="ex-plus"><pre> + </pre></button>
				<div style="clear:both"></div>
			</header>
			<hr class="sh-low-hr"/>
			<p style="display:<?php echo($sbtn); ?>">Login to ask a question <a href="login.php"><button>Click Here</button></a></p>
			<div class="ex-div" style="display:<?php echo($sdiv); ?>">
				<form class="ex-form" method="post" action="/sih/php/_ask-question.php?<?php echo('user_id='.$userId); ?>">
					<label class="ex-label">Title</label><br/>
					<input type="text" class="ex-input" name="title" value="" placeholder="Your title..." required/><br/>
					<label class="ex-label">Description</label><br/>
					<textarea class="ex-input" name="content" value="" placeholder="Your description..."></textarea><br/>
					<button class="ex-button">Ask</button>
				</form>
			</div>
		</div>
		
		<!--OTHER QUESTIONS-->
		<div class="index-box expand-box" style="text-align:left;">
			<header class="ex-head">
				<h4 class="ex-title">Railway Forum</h4>
				<div style="clear:both"></div>
			</header>
			
			<!--ENQUIRY SCROLL-->
			<?php latestQuestions($conn); ?>
			<!--<a href="forum.php"><button class="box-foot-button">SHOW MORE</button></a>-->
		</div>
	</section>
	<?php siteFooter(); ?>
</body>
</html>