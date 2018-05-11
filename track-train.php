<?php //STATION PROFILE
//include files
require_once("app-includes/app-include.php");
?>
<!doctype html>
<html lang="en">
<head>
<title>John Doe</title>
<?php include('meta-tags.html'); ?>
<link rel="stylesheet" href="/sih/css/main.css"/>

<style>
.index-section{background:#ddd;}
.ans-div{border:1px solid #777;}
</style>
</head>
<body>
	<?php siteHeader(); ?>
	<section class="index-section">
		<div class="pm-box">
			<ul class="pm-menu">
				<a href="notifications.php"><li class="pm-item pm-icon"><i class="material-icons">refresh</i></li></a>
				<a href=""><li class="pm-item pm-name"><p>TRAIN STATUS</p></li>
				<a href="#siteHead"><li class="pm-item pm-icon"><i class="material-icons">keyboard_arrow_up</i></li></a>
				<div style="clear:both"></div>
			</ul>
		</div>
		<hr class="sh-low-hr"/>
		
		<div class="index-box tt-box" style="text-align:left;">
			<header class="tt-head">
				<h3 class="tt-title">13307 - DHANBAD - FIROZPUR CANTT Ganga Sutlej Exp</h3>
				<h4 class="tt-date">Start date : 14-03-2018</h4>
			</header><hr class="sh-low-hr"/>
			<section class="tt-update">
				<p class="tt-status"><b>12 minutes ago : </b>Left from Patiala Junction.</p>
			</section>
		</div>
	</section>
</body>
</html>