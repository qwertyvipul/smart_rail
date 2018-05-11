<?php //PAGE-29
function newNotifications($conn, $userId){
	$query = "select * from user_notifications where user_id = $userId and read_code = 0 order by date_time desc";
	$result = mysqli_query($conn, $query);
	query_check($result, 'Error 29_101');
	
	$list_1='';
	while($row = mysqli_fetch_assoc($result)){
		$notificationId = $row['notification_id'];
		$link = $row['link'];
		$title = $row['title'];
		$content = $row['content'];
		$dateTime = $row['date_time'];
		
		
		$list_1.='
			<a href="'.$link.'"><div class="ans-div">
				<hr class="sh-low-hr" />
				<header class="ans-head">
					<span class="ans-date">'.$dateTime.'</span><span class="ans-time"><!--13:50--></span>
					<div style="clear:both"></div>
				</header>
				<section class="ans-section">
					<h4 class="ans-title"><p class="unread-notification">New</p> '.$title.'</h4>
					<p class="ans-content">'.$content.'</p>
				</section>
			</div><a/>
		';
	}
	
	echo $list_1;
}

function readNotifications($conn, $userId){
	$query = "select * from user_notifications where user_id = $userId and read_code = 1 order by date_time desc";
	$result = mysqli_query($conn, $query);
	query_check($result, 'Error 29_103');
	
	$list_2='';
	while($row = mysqli_fetch_assoc($result)){
		$notificationId = $row['notification_id'];
		$link = $row['link'];
		$title = $row['title'];
		$content = $row['content'];
		$dateTime = $row['date_time'];
		
		
		$list_2.='
			<a href="'.$link.'"><div class="ans-div">
				<hr class="sh-low-hr" />
				<header class="ans-head">
					<span class="ans-date">'.$dateTime.'</span><span class="ans-time"><!--13:50--></span>
					<div style="clear:both"></div>
				</header>
				<section class="ans-section">
					<h4 class="ans-title">'.$title.'</h4>
					<p class="ans-content">'.$content.'</p>
				</section>
			</div></a>
		';
	}
	
	echo($list_2);
	
	$query_2 = "update user_notifications set read_code = 1 where user_id = $userId and read_code = 0";
	$result_2 = mysqli_query($conn, $query_2);
	query_check($result, 'Error 29_104');
}
?>