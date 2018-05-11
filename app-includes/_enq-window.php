<?php //PAGE-19
function getEnqStation($conn, $adminId){
	$query = "select station_id from enq_admin where admin_id = $adminId";
	$result = mysqli_query($conn, $query);
	query_check($result, 'Error 19_101');
	
	$row = mysqli_fetch_assoc($result);
	$stationId = $row['station_id'];
	
	return $stationId;
}


function getNullQuestions($conn, $stationId){
	$query = "select * from enquiry_questions where official_reply is null";
	$result = mysqli_query($conn, $query);
	query_check($result, 'Error 19_102');
	
	$list_1='';
	while($row = mysqli_fetch_assoc($result)){
		$enquiryId = $row['enquiry_id'];
		$title = $row['title'];
		$content = $row['content'];
		$dateTime = $row['date_time'];
		$userId = $row['user_id'];
		$userName = fullName($conn, $userId);
		
		$list_1.='
			<div class="index-box" style="text-align:center;">
				<header class="ib-head"><h4 class="ib-label">Answer Enquiry</h4></header>
				<section class="ib-section" style="text-align:left;">
					<div class="enquiry-scroll">
						<header class="es-head">
							<h4 class="es-title">'.$title.'<!--<button class="es-title-button">Description</button>--></h4>
							<p class="es-description">'.$content.'</p>
							<p class="es-user">'.$userName.' | '.$dateTime.'</p>
							<div style="clear:both"></div>
						</header><br/>
						<section class="es-section">
							<form method="post" action="/sih/php/_answer-enquiry.php?enquiry_id='.$enquiryId.'">
								<textarea name="official_reply" value="" placeholder="Official Reply..."></textarea>
								<button type="submit" class="ib-button">Reply</button>
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
?>