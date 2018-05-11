<?php //PAGE-10
session_start();
//include files
require_once("app-includes/app-include.php");
require_once("app-includes/_profile.php");
$login=0;
if(isset($_SESSION['userId'])){
	$login=1;
	$userId = $_SESSION['userId'];
	$fullName = fullName($conn, $userId);
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
<?php include('meta-tags.html'); ?>
<link rel="stylesheet" href="css/main.css"/>

<style>
#smProfile{background:#eee; }
</style>
</head>
<body>
	<?php siteHeader(); 
		if($login==0) die('Login to view your profile! <a href="login.php"><button>Click Here</button></a>');
	?>
	
	<section class="index-section">
		<div class="cover-box" style="background:red;">
			<img src="assets/images/cover.jpg" class="cover-pic"/>
			<div class="profile-box">
				<img src="assets/images/profile.jpg" class="profile-pic"/>
				<h3 class="profile-name"><?php echo $fullName; ?></h3>
				<div style="clear:both"></div>
			</div>
		</div>
		<div class="pm-box">
			<ul class="pm-menu">
				<a href="index.php"><li class="pm-item pm-icon"><i class="material-icons">home</i></li></a>
				<a href="profile.php"><li class="pm-item pm-name"><?php echo $fullName; ?></li></a>
				<a href="#siteHead"><li class="pm-item pm-icon"><i class="material-icons">keyboard_arrow_up</i></li></a>
				<div style="clear:both"></div>
			</ul>
		</div>
		
		
		<div class="index-box">
			<header class="ib-head"><h4 class="ib-label">Heyy there,</h4></header>
			<section class="ib-section">
				<?php 
					indexApp('android', 'Agents');
					indexApp('android', 'Advertisements');
					indexApp('android', 'Book Meal');
					indexApp('android', 'Clean Rail');
					indexApp('android', 'Enquiries');
					indexApp('android', 'Flights');
					indexApp('android', 'Loyalty Program');
					indexApp('android', 'Offers');
					indexApp('android', 'Refund Rule');
					indexApp('android', 'Tourism');
					indexApp('android', 'User Guide');
				?>
			</section>
		</div>
		
		<div class="index-box expand-box" style="text-align:left;">
			<header class="ex-head">
				<h4 class="ex-title">Share your experience</h4>
				<button class="ex-plus"><pre> + </pre></button>
				<div style="clear:both"></div>
			</header>
			<hr class="sh-low-hr"/>
			<div class="ex-div">
				<form class="ex-form" method="get" action="share-experience.php">
					<label class="ex-label">From</label><br/>
					<input type="text" class="ex-input" name="start" value="PATIALA - PTA" placeholder="Your Location..." required/><br/>
					<label class="ex-label">To</label><br/>
					<input type="text" class="ex-input" name="finish" value="PUNE JN - PUNE" placeholder="Your Destination..." required/><br/>
					<button type="submit" class="ex-button">Go</button>
				</form>
			</div>
		</div>
	</section>
	<footer>
	<?php siteFooter(); ?>
	</footer>
</body>
</html>
