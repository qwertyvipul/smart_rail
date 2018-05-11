<?php
//include files
require_once("app-includes/app-include.php");
?>
<!doctype html>
<html lang="en">
<head>
<title>John Doe</title>
<?php include('meta-tags.html'); ?>
<link rel="stylesheet" href="css/main.css"/>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/cent-div.js"></script>

<style>
</style>
</head>
<body>
	<?php loginHeader(); ?>
	<section class="index-section">
		<div class="index-box expand-box" style="text-align:left;">
			<header class="ex-head">
				<h4 class="ex-title">User Login</h4>
				<button class="ex-plus"><pre> + </pre></button>
				<div style="clear:both"></div>
			</header>
			<hr class="sh-low-hr"/>
			<div class="ex-div">
				<form class="ex-form" method="post" action="php/_login.php">
					<label class="ex-label">Username</label><br/>
					<input type="text" class="ex-input" name="username" value="" placeholder="Enter your username" required/><br/>
					<label class="ex-label">Password</label><br/>
					<input type="password" class="ex-input" name="password" value="" placeholder="Enter your password" required/><br/>
					<button type="submit" class="ex-button">Login</button>
				</form>
			</div>
		</div>
		
		<div class="index-box expand-box" style="text-align:left;">
			<header class="ex-head">
				<h4 class="ex-title">PNR Login</h4>
				<button class="ex-plus"><pre> + </pre></button>
				<div style="clear:both"></div>
			</header>
			<hr class="sh-low-hr"/>
			<div class="ex-div">
				<form class="ex-form" method="get">
					<label class="ex-label">PNR Number</label><br/>
					<input type="text" class="ex-input" name="start" value="" placeholder="Enter your mobile no." required/><br/>
					<button class="ex-button">Login</button>
				</form>
			</div>
		</div>
		
		<div class="index-box expand-box" style="text-align:left;">
			<header class="ex-head">
				<h4 class="ex-title">Guest Login</h4>
				<button class="ex-plus"><pre> + </pre></button>
				<div style="clear:both"></div>
			</header>
			<hr class="sh-low-hr"/>
			<div class="ex-div">
				<form class="ex-form" method="get">
					<label class="ex-label">Mobile Number</label><br/>
					<input type="text" class="ex-input" name="start" value="" placeholder="Enter your mobile no." required/><br/>
					<button class="ex-button">Login</button>
				</form>
			</div>
		</div>
	</section>
	<?php siteFooter(); ?>
</body>
</html>