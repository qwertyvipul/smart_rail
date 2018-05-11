<?php //PAGE-25 

function getSafaiStation($conn, $adminId){
	$query = "select station_id from safai_admin where admin_id = $adminId";
	$result = mysqli_query($conn, $query);
	query_check($result, 'Error 25_101');
	
	$row = mysqli_fetch_assoc($result);
	$stationId = $row['station_id'];
	
	return $stationId;
}

function newNullStatus($conn, $stationId){
	$query = "select * from safai_request where station_id = $stationId and status is null";
	$result = mysqli_query($conn, $query);
	query_check($result, 'Error 25_102');
	$list_1='';
	while($row = mysqli_fetch_assoc($result)){
		$content = $row['content'];
		$userId = $row['user_id'];
		$dateTime = $row['date_time'];
		$link = $row['file_name'];
		$userName = fullName($conn, $userId);
		$requestId = $row['request_id'];
		$currentStatus = $row['status'];
		$list_1.='
			<div class="index-box" style="text-align:center;">
				<header class="ib-head"><h4 class="ib-label">New Safai Request</h4></header>
				<section class="ib-section" style="text-align:left;">
					<div class="enquiry-scroll">
						<header class="es-head">
							<h4 class="es-title"><a href="../safai_images/'.$link.'"><button class="es-title-button">View Image</button><a/></h4>
							<p class="es-description">'.$content.'</p>
							<p class="es-user">'.$userName.' | '.$dateTime.'</p><br/>
							<p class="es-description">Current Status : '.$currentStatus.'</p>
							<div style="clear:both"></div>
						</header>
						<section class="es-section">
							<form method="post" action="/sih/php/_update-safai-status.php?request_id='.$requestId.'">
								<textarea name="new_status" value="" placeholder="Update status..."></textarea>
								<button type="submit" class="ib-button">Update Status</button>
							</form>
						</section>
					</div>
					<hr class="es-mid-hr"/>
				</section><hr class="sh-low-hr" />
			</div>
		';
	}
	
	echo $list_1;
}


function getNullStatus($conn, $stationId){
	$query = "select * from safai_request where station_id = $stationId and final = 0 and status is not null";
	$result = mysqli_query($conn, $query);
	query_check($result, 'Error 25_103', $conn, 1);
	$list_2='';
	while($row = mysqli_fetch_assoc($result)){
		$requestId = $row['request_id'];
		$content = $row['content'];
		$userId = $row['user_id'];
		$dateTime = $row['date_time'];
		$currentStatus = $row['status'];
		$userName = fullName($conn, $userId);
		$list_2.='
			<div class="index-box" style="text-align:center;">
				<header class="ib-head"><h4 class="ib-label">Past Safai Request</h4></header>
				<section class="ib-section" style="text-align:left;">
					<div class="enquiry-scroll">
						<header class="es-head">
							<h4 class="es-title"><button class="es-title-button">View Image</button></h4>
							<p class="es-description">'.$content.'</p>
							<p class="es-user">'.$userName.' | '.$dateTime.'</p><br/>
							<p class="es-description">Current Status : '.$currentStatus.'</p>
							<div style="clear:both"></div>
						</header>
						<section class="es-section">
							<form method="post" action="/sih/php/_update-safai-status.php?request_id='.$requestId.'">
								<textarea name="new_status" value="" placeholder="Update status..."></textarea>
								<button type="submit" class="ib-button">Update Status</button>
							</form>
						</section>
						<a href="../php/_safai-request-complete.php?request_id='.$requestId.'"><button class="ib-button">Mark as Complete</button></a>
					</div>
					<hr class="es-mid-hr"/>
				</section><hr class="sh-low-hr" />
			</div>
		';
	}
	
	echo $list_2;
}
?>