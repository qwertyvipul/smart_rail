<?php //HOME PAGE //PAGE-3
session_start();
require_once("app-includes/app-include.php");
require_once("app-includes/_station.php");
require_once("app-includes/_train.php");
require_once("app-includes/_personalization.php");

$login=0;
if(isset($_SESSION['userId'])){
	$login=1;
	$userId = $_SESSION['userId'];
	//$fullName = fullName($conn, $userId);
}

function indexApp($appIcon, $appName, $link="#"){
	echo('
	<a href="'.$link.'"><div class="index-app">
		<div class="ip-pic"><i class="material-icons">'.$appIcon.'</i></div>
		<h4 class="ip-name">'.$appName.'</h4>
	</div></a>
	');
}

function userApp($appPic, $appName, $link="#"){
	echo('
	<a href="'.$link.'"><div class="user-app">
		<div class="up-pic"><img src="assets/images/profile-cover.jpg" style="width:100px; height:100px"/></div>
		<h4 class="up-name">'.$appName.'</h4>
		<h4 class="up-info">Thapar Institute</h4>
	</div></a>
	');
}

?>
<!--HOME PAGE-->
<!doctype html>
<html lang="en">
<head>
<title>Indian Railways</title>
<?php include('meta-tags.html'); ?>
<link rel="stylesheet" href="css/main.css"/>
<link rel="author" href="humans.txt">

<style>
#smHome{background:#eee;}
</style>


</head>
<body>
	<?php siteHeader(); ?>
	<div id="google_translate_element"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

	
	<section class="index-section">
	
		<?php if($login==1) checkDay($conn); ?>
		<?php if($login==1) stationConfirm($conn, $userId); ?>
		
	<?php if(isset($_SESSION['login']) and $_SESSION['login']==1){
		echo('
		<div class="index-box expand-box" style="text-align:left;">
			<header class="ex-head">
				<h4 class="ex-title">Digital Assistant</h4>
				<button class="ex-plus"><pre> + </pre></button>
				<div style="clear:both"></div>
			</header>
			<hr class="sh-low-hr"/>
			<div class="ex-div">
				<form class="ex-form" method="get" action="php/_book-assistant.php">
					<label class="ex-label">PNR No.</label><br/>
					<input type="text" class="ex-input" name="pnr_no" value="" placeholder="Your PNR No." required/><br/>
					<button type="submit" class="ex-button">Go</button>
				</form>
			</div>
		</div>
		');
	}
	?>
		<div class="index-box expand-box" style="text-align:left;">
			<header class="ex-head">
				<h4 class="ex-title">Plan Your Journey</h4>
				<button class="ex-plus"><pre> + </pre></button>
				<div style="clear:both"></div>
			</header>
			<hr class="sh-low-hr"/>
			<div class="ex-div">
				<form class="ex-form" method="get" action="journey-planner.php">
					<label class="ex-label">From</label><br/>
					<input type="text" class="ex-input" name="start" value="PATIALA - PTA" placeholder="Your Location..." required/><br/>
					<label class="ex-label">To</label><br/>
					<input type="text" class="ex-input" name="finish" value="PUNE JN - PUNE" placeholder="Your Destination..." required/><br/>
					<label class="ex-label">Date</label><br/>
					<input type="text" class="ex-input" name="date" value="27-03-2018" placeholder="dd-mm-yyyy" required/><br/>
					<button type="submit" class="ex-button">Go</button>
				</form>
			</div>
		</div>
		
		<div class="index-box expand-box" style="text-align:left;">
			<header class="ex-head">
				<h4 class="ex-title">Visit Station</h4>
				<button class="ex-plus"><pre> + </pre></button>
				<div style="clear:both"></div>
			</header>
			<hr class="sh-low-hr"/>
			<div class="ex-div">
				<form class="ex-form" method="get" action="station/station.php">
					<label class="ex-label">Station Name</label><br/>
					<input type="text" class="ex-input" name="code_name" value="PATIALA - PTA" placeholder="Station Name..." required/><br/>
					<button type="submit" class="ex-button">Go</button>
				</form>
			</div>
		</div>
		
		<div class="index-box expand-box" style="text-align:left;">
			<header class="ex-head">
				<h4 class="ex-title">PNR Status</h4>
				<button class="ex-plus"><pre> + </pre></button>
				<div style="clear:both"></div>
			</header>
			<hr class="sh-low-hr"/>
			<div class="ex-div">
				<form class="ex-form" method="get" action="pnr-status.php">
					<label class="ex-label">PNR Number</label><br/>
					<input type="text" class="ex-input" name="start" value="6507840802" placeholder="PNR Number..." required/><br/>
					<button type="submit" class="ex-button">Go</button>
				</form>
			</div>
		</div>
		
		<div class="index-box expand-box" style="text-align:left;">
			<header class="ex-head">
				<h4 class="ex-title">Train Status</h4>
				<button class="ex-plus"><pre> + </pre></button>
				<div style="clear:both"></div>
			</header>
			<hr class="sh-low-hr"/>
			<div class="ex-div">
				<form class="ex-form" method="get" action="train-status.php">
					<label class="ex-label">Train Name/No.</label><br/>
					<input type="text" class="ex-input" name="train" value="13307 - DHANBAD - FIROZPUR CANTT Ganga Sutlej Exp" placeholder="Train Name/No." required/><br/>
					<button class="ex-button">Go</button>
				</form>
			</div>
		</div>
		
		<!--<div class="index-box" style="text-align:center;">
			<header class="ib-head"><h4 class="ib-label">Top Stories</h4></header>
			<section class="ib-section" style="text-align:left;">
				<hr class="sh-low-hr" />
				<div class="top-stories" id="topStories">
					<div class="ts-pic" id="tsPic"><img src="assets/images/profile-cover.jpg" style="width:100%; height:100%"/></div>
					<div class="ts-content" id="tsContent">
						<h4 class="ts-title">This picture is a very good one. This title is gonna be bigger than the usual ones. I an make it look huge and un-necessary.</h4>
						<p>OMG! This just worked awesome! I am truly happy with the result.</p>
					</div>
					<div style="clear:both"></div>
				</div>
			</section><hr class="sh-low-hr" />
			<footer class="ib-footer">
				<a href="#"><button class="ib-button">View All</button></a>
			</footer>
		</div>-->
	</section>
	<?php siteFooter(); ?>
	
<script>
$(document).ready(function(){
	var tsWidth = $('.top-stories').width();
	var tsHeight = $('.top-stories').height();
	var tsPicWidth = (tsWidth*0.3>100)?100:tsWidth*0.3;
	$('.ts-pic').width(tsPicWidth).height(tsPicWidth);
	$('.ts-content').height(tsPicWidth);
	
	$(window).resize(function(){
		var tsWidth = $('.top-stories').width();
		var tsHeight = $('.top-stories').height();
		var tsPicWidth = (tsWidth*0.3>100)?100:tsWidth*0.3;
		$('.ts-pic').width(tsPicWidth).height(tsPicWidth);
		$('.ts-content').height(tsPicWidth);
	});
});
</script>
</body>
</html>