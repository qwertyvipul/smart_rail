<?php //STATION PROFILE
session_start();
//include files
require_once("app-includes/app-include.php");
require_once("app-includes/_profile.php");
require_once("app-includes/_help.php");
require_once("app-includes/_view-answer.php");

$questionId = $_GET['question_id'];

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
<title>View Answer</title>
<?php include('meta-tags.html'); ?>
<link rel="stylesheet" href="/sih/css/main.css"/>

<style>

</style>
</head>
<body>
	<?php siteHeader(); ?>
	<section class="index-section">
		<div class="index-box">
			<h4 class="ex-title">Question</h4><br/>
			<?php getUserQuestion($conn, $questionId); ?>
		</div>
		
		<div class="index-box expand-box" style="text-align:left;">
			<header class="ex-head">
				<h4 class="ex-title">Answer</h4>
				<button class="ex-plus"><pre> + </pre></button>
				<div style="clear:both"></div>
			</header>
			<hr class="sh-low-hr"/>
			<p style="display:<?php echo($sbtn); ?>">Login to ask a question <a href="login.php"><button>Click Here</button></a></p>
			<div class="ex-div" style="display:<?php echo($sdiv); ?>">
				<form class="ex-form" method="post" action="/sih/php/_answer-question.php?<?php echo('question_id='.$questionId.'&user_id='.$userId); ?>">
					<label class="ex-label">Your Answer</label><br/>
					<textarea class="ex-input" name="content" value="" placeholder="Your description..."></textarea><br/>
					<button class="ex-button">Submit</button>
				</form>
			</div>
		</div>
		
		<div class="index-box">
			<?php getUserAnswers($conn, $questionId); ?>
		</div>
	</section>
	<?php siteFooter(); ?>
</body>
</html>