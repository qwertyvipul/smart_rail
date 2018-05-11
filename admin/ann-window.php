<?php //SITE INDEX
session_start();
require_once("../app-includes/app-include.php");
require_once("../app-includes/_station.php");
require_once("../app-includes/_ann-window.php");

if($_SESSION['ann'] and $_SESSION['ann']==1){
	$adminId = $_SESSION['adminId'];
}else{
	die(header('Location:index.php'));
}

$stationId = getAnnStation($conn, $adminId);

?>
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Admin Announcement Window</title>
<link rel="stylesheet" href="/sih/css/main.css"/>
<link rel="stylesheet" href="/sih/css/admin.css"/>

<style>
</style>
</head>
<body>
	<?php adminHeader() ?>
	<section class="index-section">
		<div class="pm-box">
			<ul class="pm-menu">
				<li class="pm-item pm-icon"><i class="material-icons">home</i></li>
				<li class="pm-item pm-name"><p><?php echo(getName($conn, $stationId).' | '.getCode($conn, $stationId)); ?></p></li>
				<a href="#siteHead"><li class="pm-item pm-icon"><i class="material-icons">keyboard_arrow_up</i></li></a>
				<div style="clear:both"></div>
			</ul>
		</div>
	
		<div class="index-box expand-box" style="text-align:left;">
			<header class="ex-head">
				<h4 class="ex-title">Make Announcement</h4>
				<button class="ex-plus"><pre> + </pre></button>
				<div style="clear:both"></div>
			</header>
			<hr class="sh-low-hr"/>
			<div class="ex-div">
				<form class="ex-form" method="post" action="/sih/php/_make-announcements.php?station_id=<?php echo $stationId; ?>">
					<label class="ex-label">Title</label><br/>
					<input type="text" class="ex-input" name="title" value="" placeholder="Announcement title..." required/><br/>
					<label class="ex-label">Description</label><br/>
					<input type="text" class="ex-input" name="content" value="" placeholder="Announcement description..." required/><br/>
					<button type="submit" class="ex-button">Go</button>
				</form>
			</div>
		</div>
		
		<div class="index-box" style="text-align:center;">
			<header class="ib-head"><h4 class="ib-label">Announcements</h4></header>
			<section class="ib-section" style="text-align:left;">
				<?php getAnn($conn, $stationId); ?> <!--Announcements for the station-->
			</section><hr class="sh-low-hr" />
			<footer class="ib-footer">
				<a href="../station/announcements.php"><button class="ib-button">View All</button></a>
			</footer>
		</div>
	</section>
	<?php siteFooter();?>
</body>
</html>