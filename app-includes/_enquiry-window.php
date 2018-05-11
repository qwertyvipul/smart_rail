<?php //PAGE-12
function latestEnquiry($conn, $stationId){
	$query = "select * from enquiry_questions where station_id = $stationId order by date_time desc limit 5";
	$result = mysqli_query($conn, $query);
	query_check($result, '12_101');
	
	$list_1='';
	while($row = mysqli_fetch_assoc($result)){
		$enquiryId = $row['enquiry_id'];
		$title = $row['title'];
		$content = $row['content'];
		$userId = $row['user_id'];
		$userName = fullName($conn, $userId);
		$reply = $row['official_reply'];
		$dateTime = $row['date_time'];
		
		$query_2 = "select count(*) as total from enquiry_answers where enquiry_id = $enquiryId";
		$result_2 = mysqli_query($conn, $query_2);
		query_check($result_2, '12_102');
		
		$row_2 = mysqli_fetch_assoc($result_2);
		$answerCount = $row_2['total'];
		
		$list_1.='
			<div class="enquiry-scroll">
				<header class="es-head">
					<h4 class="es-title">'.$title.'<!--<button class="es-title-button">Description</button>--></h4>
					<p class="es-description">'.$content.'</p>
					<p class="es-user">'.$userName.' | '.$dateTime.'</p>
					<div style="clear:both"></div>
				</header>
				<section class="es-section">
					<p class="es-reply"><b>Official Reply : </b>'.$reply.'</p>
				</section>
				<!--<footer>
					<button class="ib-button">View Answers ('.$answerCount.')</button>
				</footer>-->
			</div>
			<hr class="es-mid-hr"/>
		';
	}
	echo($list_1);
}

function lastEnquiry($conn, $stationId, $userId){
	$query = "select * from enquiry_questions where station_id = $stationId and user_id = $userId order by date_time desc";
	$result = mysqli_query($conn, $query);
	query_check($result, '12_103');
	
	$list_1='';
	while($row = mysqli_fetch_assoc($result)){
		$enquiryId = $row['enquiry_id'];
		$title = $row['title'];
		$content = $row['content'];
		$userId = $row['user_id'];
		$userName = fullName($conn, $userId);
		$reply = $row['official_reply'];
		$dateTime = $row['date_time'];
		
		$query_2 = "select count(*) as total from enquiry_answers where enquiry_id = $enquiryId";
		$result_2 = mysqli_query($conn, $query_2);
		query_check($result_2, '12_104');
		
		$row_2 = mysqli_fetch_assoc($result_2);
		$answerCount = $row_2['total'];
		
		$list_1.='
				
				<div class="enquiry-scroll">
					<header class="es-head">
						<h4 class="es-title">'.$title.'<!--<button class="es-title-button">Description</button>--></h4>
						<p class="es-description">'.$content.'</p>
						<p class="es-user">'.$userName.' | '.$dateTime.'</p>
						<div style="clear:both"></div>
					</header>
					<section class="es-section">
						<p class="es-reply"><b>Official Reply : </b>'.$reply.'</p>
					</section>
					<!--<footer>
						<button class="ib-button">View Answers ('.$answerCount.')</button>
					</footer>-->
				</div>
				<hr class="es-mid-hr"/>
		';
	}
	
	echo ($userId==0)?'':$list_1;
}
?>