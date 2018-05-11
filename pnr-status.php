<?php //SITE INDEX
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
<title>PNR Status</title>
<?php include('meta-tags.html'); ?>
<link rel="stylesheet" href="css/main.css"/>

<style>
</style>


</head>
<body>
	<?php siteHeader(); ?>
	<section class="index-section">
		<div class="pm-box">
			<ul class="pm-menu">
				<a href="index.php"><li class="pm-item pm-icon"><i class="material-icons">arrow_back</i></li></a>
				<li class="pm-item pm-name"><p>PNR STATUS</p></li>
				<a href="#siteHead"><li class="pm-item pm-icon"><i class="material-icons">keyboard_arrow_up</i></li></a>
				<div style="clear:both"></div>
			</ul>
		</div>
		
		<div class="index-box" style="text-align:center;">
			<header class="ib-head"><h4 class="ib-label">PNR Details</h4></header>
			<section class="ib-section" style="text-align:left;">
				
			</section>
		</div>

	</section>
	<footer></footer>
</body>
</html>