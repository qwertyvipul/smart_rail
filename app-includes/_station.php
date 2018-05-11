<?php 
//getting the 3 announcements for the home page
function getAnn($conn, $stationId){
	//fetching announcements
	$query = "select * from ann_info where station_id = $stationId order by date_time desc limit 3";
	$result = mysqli_query($conn, $query);
	query_check($result, 'Error 5_101');
	
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
	echo $list_1;
}

function getName($conn, $stationId){
	$query = "select station_name from station_info where station_id = $stationId";
	$result = mysqli_query($conn, $query);
	query_check($result, 'Error 5_102');
	
	$row = mysqli_fetch_assoc($result);
	$stationName = $row['station_name'];
	
	return $stationName;
}

function getCode($conn, $stationId){
	$query = "select station_code from station_info where station_id = $stationId";
	$result = mysqli_query($conn, $query);
	query_check($result, 'Error 5_103');
	
	$row = mysqli_fetch_assoc($result);
	$stationCode = $row['station_code'];
	
	return $stationCode;
}
?>