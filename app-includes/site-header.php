<!--GOOGLE ICONS--><link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<header class="site-head" id="siteHead">
	<div class="site-info">
		<a href="/sih"><h3 class="site-name">SMART RAIL<text id="s-width"></text></h3></a>
		
		<?php 
			if(isset($_SESSION['login']) and $_SESSION['login']==1){
				echo('<a href="/sih/logout.php"><button class="si-button">Logout</button></a>');
			}else{
				echo('<a href="/sih/login.php"><button class="si-button">Login</button></a>');
			}
		?>
		<div style="clear:both"></div>
	</div><hr class="sh-mid-hr"/>
	<ul class="site-menu">
		<a href="/sih"><li id="smHome"><i class="material-icons sm-icon">home</i><p class="sm-name">Home</p></li></a>
		<a href="/sih/profile.php"><li id="smProfile"><i class="material-icons sm-icon">account_circle</i><span class="sm-name">Profile</span></li></a>
		<a href="/sih/notifications.php"><li id="smNotifications"><i class="material-icons sm-icon">notifications</i><span class="sm-name">Notifications</span></li></a>
		<a href="/sih/help.php"><li class="sm-last" id="smHelp"><i class="material-icons sm-icon">help</i><span class="sm-name">Help</span></li></a>
		<a href="/sih/menu.php"><li class="sm-last" id="smMenu"><i class="material-icons sm-icon">menu</i><span class="sm-name">About Us</span></li></a>
	</ul>
	<div style="clear:both"></div>
</header><hr class="sh-low-hr"/>

<a href="/sih/chatbot_bholu/demo/bholu.php"><button class="bholu-chat">CHAT</button></a>

<?php
if(isset($_SESSION['message'])){
	echo('
		<section class="index-section">
			<div class="index-box" style="padding:0px;">
				<p class="top-message">'.$_SESSION['message'].'</p>
			</div>
		</section>
	');
	unset($_SESSION['message']);
}
?>

	

<script src="js/jquery-3.2.1.min.js"></script>
<script>
/*$(document).ready(function(){
	var screenWidth = $(window).outerWidth();
	$('#s-width').text(screenWidth);
	$(window).resize(function(){
		var screenWidth = $(window).outerWidth();
		$('#s-width').text(screenWidth);
	});
});*/
</script>