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
				<a href="train-status.php?train=<?php echo($_GET['train']); ?>"><li class="pm-item pm-name"><p><?php echo($_GET['train']); ?></p></li>
				<a href="#siteHead"><li class="pm-item pm-icon"><i class="material-icons">keyboard_arrow_up</i></li></a>
				<div style="clear:both"></div>
			</ul>
		</div>
		<hr class="sh-low-hr"/>
		<section class="ib-section" style="text-align:left;">
			<div class="ans-div">
				<hr class="sh-low-hr" />
				<header class="ans-head">
					<span class="ans-date">Start Date : 04-03-2018</span>
					<div style="clear:both"></div>
				</header>
				<section class="ans-section">
					<p class="ans-content">13:50 - Left from Patiala Junction.</p>
				</section>
				<footer class="ans-footer">
					<a href="track-train.php"><button class="ans-button">Track</button></a>
				</footer>
			</div>
			
			<div class="ans-div">
				<hr class="sh-low-hr" />
				<header class="ans-head">
					<span class="ans-date">Start Date : 04-03-2018</span>
					<div style="clear:both"></div>
				</header>
				<section class="ans-section">
					<p class="ans-content">13:50 - Left from Patiala Junction.</p>
				</section>
				<footer class="ans-footer">
					<a href="#"><button class="ans-button">Track</button></a>
				</footer>
			</div>
			
			<div class="ans-div">
				<hr class="sh-low-hr" />
				<header class="ans-head">
					<span class="ans-date">Start Date : 04-03-2018</span>
					<div style="clear:both"></div>
				</header>
				<section class="ans-section">
					<p class="ans-content">13:50 - Left from Patiala Junction.</p>
				</section>
				<footer class="ans-footer">
					<a href="#"><button class="ans-button">Track</button></a>
				</footer>
			</div>
		</section>
	</section>
</body>
</html>