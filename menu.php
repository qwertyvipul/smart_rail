<?php //STATION PROFILE
//include files
require_once("app-includes/app-include.php");

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
<title>IRCTC Apps</title>
<?php include('meta-tags.html'); ?>
<link rel="stylesheet" href="/sih/css/main.css"/>

<style>
#smMenu{background:#eee;}
</style>
</head>
<body>
	<?php siteHeader(); ?>
	<section class="index-section">
	
		<div class="index-box">
			<header class="ib-head"><h4 class="ib-label">Services</h4></header>
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
		
		<div class="index-box ma-box">
			<header class="ib-head ma-head"><h4 class="ib-label ma-label">Category - 1</h4></header>
			<ul class="menu-app">
				<li class="ma-name">App Name</li>
				<li class="ma-name">App Name</li>
				<li class="ma-name">App Name</li>
				<li class="ma-name">App Name</li>
				<li class="ma-name">App Name</li>
			</ul>
		</div>
		
		<div class="index-box ma-box">
			<header class="ib-head ma-head"><h4 class="ib-label ma-label">Category - 1</h4></header>
			<ul class="menu-app">
				<li class="ma-name">App Name</li>
				<li class="ma-name">App Name</li>
				<li class="ma-name">App Name</li>
				<li class="ma-name">App Name</li>
				<li class="ma-name">App Name</li>
			</ul>
		</div>
		
		<div class="index-box ma-box">
			<header class="ib-head ma-head"><h4 class="ib-label ma-label">Category - 1</h4></header>
			<ul class="menu-app">
				<li class="ma-name">App Name</li>
				<li class="ma-name">App Name</li>
				<li class="ma-name">App Name</li>
				<li class="ma-name">App Name</li>
				<li class="ma-name">App Name</li>
			</ul>
		</div>
	</section>
</body>
</html>