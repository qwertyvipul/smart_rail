<?php //DIGITAL SAFAI
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
	
	<?php 
		if(!isset($_SESSION['login']) or $_SESSION['login']!=1){
			die('<p>You must be logged in. <a href="../login.php"><button>Click Here</button></a>');
		}else{
			$userId = $_SESSION['userId'];
		}
	?>
	
	<div class="index-box expand-box" style="text-align:left;">
		<header class="ex-head">
			<h4 class="ex-title">Digital Safai</h4>
			<button class="ex-plus"><pre> + </pre></button>
			<div style="clear:both"></div>
		</header>
		<hr class="sh-low-hr"/>
		<div class="ex-div">
			<form action="/sih/php/_safai-request.php?<?php echo("user_id=$userId&station_id=$stationId"); ?>" method="post" enctype="multipart/form-data" name="form1" id="form1">
				<label class="ex-label">Description</label><br/>
				<input type="text" class="ex-input" name="content" placeholder="Description.." required/><br/>
				<label class="ex-label">Upload Image</label><br/>
				<input name="image" type="file" id="image" required/><br/><br/>
				<label class="ex-label">Latitude :  </label>
				<input type="text" name="latitude" value="" id="x"/><br/>
				<label class="ex-label">Longitude : </label>
				<input type="text" name="longitude" value="" id="y"/><br/>
				<button type="submit" class="ex-button">Safai Request</button>
			</form>
		</div>
	</div>
	
<?php siteFooter(); ?>

<script>
	var x = document.getElementById("x");
	var y = document.getElementById("y");

	function getLocation(){
		if(navigator.geolocation){
			navigator.geolocation.getCurrentPosition(showPosition);
		}else{
			x.value = "0";
			y.value = "0";
		}
	}
	
	function showPosition(position){
		x.value = position.coords.latitude;
		y.value = position.coords.longitude;
	}
	
	getLocation();
</script>	

</body>
</html>