<?php //PAGE-7
require_once("../app-includes/app-include.php");
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Indian Railways Admin Portal</title>
<link rel="stylesheet" href="/sih/css/main.css"/>
<link rel="stylesheet" href="/sih/css/admin.css"/>

<style>
</style>
</head>
<body>
	<?php adminHeader(); ?>
	<section class="index-section">
		<div class="index-box expand-box" style="text-align:left;">
			<header class="ex-head">
				<h4 class="ex-title">Announcement</h4>
				<button class="ex-plus"><pre> + </pre></button>
				<div style="clear:both"></div>
			</header>
			<hr class="sh-low-hr"/>
			<div class="ex-div">
				<form class="ex-form" method="post" action="/sih/php/_ann-login.php">
					<label class="ex-label">Username</label><br/>
					<input type="text" class="ex-input" name="username" value="" placeholder="Enter your username..." required/><br/>
					<label class="ex-label">Password</label><br/>
					<input type="password" class="ex-input" name="password" value="" placeholder="Enter your password..." required/><br/>
					<button class="ex-button">Login</button>
				</form>
			</div>
		</div>
		
		<div class="index-box expand-box" style="text-align:left;">
			<header class="ex-head">
				<h4 class="ex-title">Enquiry Window</h4>
				<button class="ex-plus"><pre> + </pre></button>
				<div style="clear:both"></div>
			</header>
			<hr class="sh-low-hr"/>
			<div class="ex-div">
				<form class="ex-form" method="post" action="/sih/php/_enq-login.php">
					<label class="ex-label">Username</label><br/>
					<input type="text" class="ex-input" name="username" value="" placeholder="Enter your username..." required/><br/>
					<label class="ex-label">Password</label><br/>
					<input type="password" class="ex-input" name="password" value="" placeholder="Enter your password..." required/><br/>
					<button class="ex-button">Login</button>
				</form>
			</div>
		</div>
		
		<div class="index-box expand-box" style="text-align:left;">
			<header class="ex-head">
				<h4 class="ex-title">Digital Safai</h4>
				<button class="ex-plus"><pre> + </pre></button>
				<div style="clear:both"></div>
			</header>
			<hr class="sh-low-hr"/>
			<div class="ex-div">
				<form class="ex-form" method="post" action="/sih/php/_safai-login.php">
					<label class="ex-label">Username</label><br/>
					<input type="text" class="ex-input" name="username" value="" placeholder="Enter your username..." required/><br/>
					<label class="ex-label">Password</label><br/>
					<input type="password" class="ex-input" name="password" value="" placeholder="Enter your password..." required/><br/>
					<button class="ex-button">Login</button>
				</form>
			</div>
		</div>
		
	</section>
</body>
</html>