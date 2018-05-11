<!--GOOGLE ICONS--><link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<header class="site-head" id="siteHead">
	<div class="site-info">
		<a href="/sih/admin/admin-login.php"><h3 class="site-name">SMART RAIL ADMIN<text id="s-width"></text></h3></a>
		<?php adminHeader(); ?>
		<?php 
			if(isset($_SESSION['ann']) and $_SESSION['ann']==1){
				echo('<a href="/sih/admin/admin-logout.php"><button class="si-button">Logout</button></a>');
			}else{
				echo('<a href="/sih/admin/admin-login.php"><button class="si-button">Login</button></a>');
			}
		?>
	<div style="clear:both"></div>
</header><hr class="sh-low-hr"/>

<script src="js/jquery-3.2.1.min.js"></script>