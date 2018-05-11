<?php //STATION PROFILE //PAGE-6
session_start();
require_once("../app-includes/app-include.php");

function indexApp($appIcon, $appName, $link="#"){
	echo('
	<a href="'.$link.'"><div class="index-app">
		<div class="ip-pic"><i class="material-icons">'.$appIcon.'</i></div>
		<h4 class="ip-name">'.$appName.'</h4>
	</div></a>
	');
}

$stationId = $_SESSION['stationId'];

//fetching announcements
$query = "select * from ann_info order by date_time desc";
$result = mysqli_query($conn, $query);
query_check($result, 'Error 6_101');

$list_1='';
while($row = mysqli_fetch_assoc($result)){
	$dateTime = $row['date_time'];
	$netTime = date_create_from_format('Y-m-d H:i:s', $dateTime);
	$time = date_format($netTime, 'H:i');
	$date = date_format($netTime, 'd-m-Y');
	$title = $row['title'];
	$content = $row['content'];
	
	$list_1.='
		<div class="ans-div">
			<hr class="sh-low-hr" />
			<header class="ans-head">
				<span class="ans-date">'.$date.'</span><span class="ans-time">'.$time.'</span>
				<div style="clear:both"></div>
			</header>
			<section class="ans-section">
				<h4 class="ans-title">'.$title.'</h4>
				<p class="ans-content">'.$content.'</p>
			</section>
		</div>
	';
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
		
		<div class="index-box" style="text-align:center;">
			<header class="ib-head"><h4 class="ib-label">Announcements</h4></header>
			<section class="ib-section" style="text-align:left;">
				<?php echo($list_1); ?>
			</section><hr class="sh-low-hr" />
		</div>
		
		<!--SHOW MORE-->
		<!--<a href=""><button class="other-ebutton">SHOW MORE</button></a>-->
	</section>
	<?php siteFooter(); ?>
</body>
</html>