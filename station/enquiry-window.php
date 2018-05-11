<?php //STATION PROFILE
session_start();
//include files
require_once("../app-includes/app-include.php");
require_once("../app-includes/_profile.php");
require_once("../app-includes/_enquiry-window.php");

if(isset($_SESSION['station']) and $_SESSION['station']==1){
	$stationId = $_SESSION['stationId'];
}else{
	die(header('Location:station.php'));
}

$userId = 0;
$sbtn = 'block';
$sdiv = 'none';
if(isset($_SESSION['login']) and $_SESSION['login']==1){
	$userId = $_SESSION['userId'];
	$sbtn = 'none';
	$sdiv = 'block';
}

function indexApp($appIcon, $appName, $link="#"){
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
				<li class="pm-item pm-name"><p>PATIALA JUNCTION | PTA</p></li>
				<a href="#siteHead"><li class="pm-item pm-icon"><i class="material-icons">keyboard_arrow_up</i></li></a>
				<div style="clear:both"></div>
			</ul>
		</div>
		
		<div class="index-box expand-box" style="text-align:left;">
			<header class="ex-head">
				<h4 class="ex-title">Make Enquiry</h4>
				<button class="ex-plus"><pre> + </pre></button>
				<div style="clear:both"></div>
			</header>
			<hr class="sh-low-hr"/>
			<p style="display:<?php echo($sbtn); ?>">Login to make an enquiry <a href="../login.php"><button>Click Here</button></a></p>
			<div class="ex-div" style="display:<?php echo($sdiv); ?>">
				<form class="ex-form" method="post" action="/sih/php/_make-enquiry.php?<?php echo('station_id='.$stationId.'&user_id='.$userId); ?>">
					<label class="ex-label">Title</label><br/>
					<input type="text" class="ex-input" name="title" value="" placeholder="Your title..." required/><br/>
					<label class="ex-label">Description</label><br/>
					<textarea class="ex-input" name="content" value="13307 - DHANBAD - FIROZPUR CANTT Ganga Sutlej Exp" placeholder="Your description..."></textarea><br/>
					<button class="ex-button">Ask</button>
				</form>
			</div>
		</div>
		
		<!--YOUR QUESTION-->
		<div class="index-box expand-box" style="text-align:left;">
			<header class="ex-head">
				<h4 class="ex-title">Already asked questions</h4>
				<div style="clear:both"></div>
			</header>
			
			<?php lastEnquiry($conn, $stationId, $userId); ?>
			<!--<button class="box-foot-button">SHOW MORE</button>-->
		</div>
		
		<!--OTHER QUESTIONS-->
		<div class="index-box expand-box" style="text-align:left;">
			<header class="ex-head">
				<h4 class="ex-title">Already asked questions</h4>
				<div style="clear:both"></div>
			</header>
			
			<?php latestEnquiry($conn, $stationId); ?>
			<!--<button class="box-foot-button">SHOW MORE</button>-->	
		</div>
	<?php siteFooter(); ?>
</body>
</html>