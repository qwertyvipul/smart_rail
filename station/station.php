<?php //STATION PROFILE //PAGE-4
session_start();
require_once("../app-includes/app-include.php"); //all functions
require_once("../app-includes/_station.php"); //backend

//getting the station id is our aim
if(isset($_GET['code_name'])){ //new request

	$codeName = $_GET['code_name'];
	$codeName = query_protect($conn, $codeName); //will return safe value
	
	//getting station id
	$query = "select station_id from station_info where concat(station_name, ' - ', station_code) = '$codeName'";
	$result = mysqli_query($conn, $query);
	query_check($result, 'Error 4_101'); //check if the query was executed
	
	$row = mysqli_fetch_assoc($result);
	$stationId = $row['station_id'];
	$_SESSION['station']=1;
	$_SESSION['stationId'] = $stationId; //set the last visited station in the session
	
}else if(isset($_SESSION['station']) and $_SESSION['station']==1){ //already set the station
	$stationId = $_SESSION['stationId']; //get the station id
}else{
	die(header('Location:../index.php')); //send to home page
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
<!--VISIT STATION-->
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
		<div class="cover-box" style="background:red;">
			<img src="assets/images/cover/cover.jpg" class="cover-pic"/>
			<div class="profile-box">
				<img src="assets/images/profile/profile.jpg" class="profile-pic"/>
				<h3 class="profile-name"><?php echo getName($conn, $stationId); ?></h3>
				<div style="clear:both"></div>
			</div>
		</div>
		<div class="pm-box">
			<ul class="pm-menu">
				<li class="pm-item pm-icon"><i class="material-icons">home</i></li>
				<li class="pm-item pm-name"><p><?php echo(getName($conn, $stationId).' | '.getCode($conn, $stationId)); ?></p></li>
				<a href="#siteHead"><li class="pm-item pm-icon"><i class="material-icons">keyboard_arrow_up</i></li></a>
				<div style="clear:both"></div>
			</ul>
		</div>
		
		<div class="index-box">
			<header class="ib-head"><h4 class="ib-label">Services</h4></header>
			<section class="ib-section">
				<?php 
					indexApp('android', 'Safai', 'digital-safai.php');
					indexApp('android', 'Map', 'Map_final/map.php');
				?>
			</section>
		</div>
		
		<div class="index-box" style="text-align:center;">
			<header class="ib-head"><h4 class="ib-label">Announcements</h4></header>
			<section class="ib-section" style="text-align:left;">
				<?php getAnn($conn, $stationId); ?> <!--Announcements for the station-->
			</section><hr class="sh-low-hr" />
			<footer class="ib-footer">
				<a href="announcements.php"><button class="ib-button">View All</button></a>
			</footer>
		</div>
		
		<!--TRAIN ENQUIRY-->
		<div class="index-box expand-box" style="text-align:left;">
			<header class="ex-head">
				<h4 class="ex-title">Train Enquiry</h4>
				<button class="ex-plus"><pre> + </pre></button>
				<div style="clear:both"></div>
			</header>
			<hr class="sh-low-hr"/>
			<div class="ex-div">
				<form class="ex-form" method="get" action="train-enquiry.php?station_id=<?php echo $stationId; ?>">
					<label class="ex-label">Train Name/No.</label><br/>
					<input type="text" class="ex-input" name="train" value="" placeholder="Train Name/No." required/><br/>
					<button class="ex-button">Go</button>
				</form>
				<?php require_once('../train_names.html'); ?>
			</div>
		</div>
		
		<!--FIND TRAINS-->
		<div class="index-box expand-box" style="text-align:left;">
			<header class="ex-head">
				<h4 class="ex-title">Find Train</h4>
				<button class="ex-plus"><pre> + </pre></button>
				<div style="clear:both"></div>
			</header>
			<hr class="sh-low-hr"/>
			<div class="ex-div">
				<form class="ex-form" method="get" action="station-find-trains.php">
					<label class="ex-label">Your Destination</label><br/>
					<input type="text" class="ex-input" name="destiny" value="" placeholder="Station Name/Code" required/><br/>
					<button type="submit" class="ex-button">Go</button>
				</form>
				<?php require_once('../station-names.html'); ?>
			</div>
		</div>
		
		<!--OTHER ENQUIRY-->
		<a href="enquiry-window.php"><button class="other-ebutton">OTHER ENQUIRY</button></a>
	</section>
	<?php siteFooter(); ?>
</body>
</html>