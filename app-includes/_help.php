<?php //PAGE-13
function latestQuestions($conn){
	$query = "select * from forum_questions order by date_time desc limit 5";
	$result = mysqli_query($conn, $query);
	query_check($result, 'Error 13_101', 1, $conn);
	
	$list_1='';
	while($row = mysqli_fetch_assoc($result)){
		$questionId = $row['question_id'];
		$title = $row['title'];
		$content = $row['content'];
		$userId = $row['user_id'];
		$reply = $row['official_reply'];
		$dateTime = $row['date_time'];
		
		$userName = fullName($conn, $userId);
		
		$query_2 = "select count(*) as total from forum_answers where question_id = '$questionId'";
		$result_2 = mysqli_query($conn, $query_2);
		query_check($result_2, 'Error 13_102');
		
		$row_2 = mysqli_fetch_assoc($result_2);
		$totalAnswers = $row_2['total'];
		
		$list_1.='
			<div class="enquiry-scroll">
				<header class="es-head">
					<h4 class="es-title">'.$title.'<!--<button class="es-title-button">Description</button>--></h4>
					<p class="es-description">'.$content.'</p>
					<p class="es-user">'.$userName.' | '.$dateTime.'</p>
					<div style="clear:both"></div>
				</header>
				<!--<section class="es-section">
					<p class="es-reply"><b>Official Reply : </b>'.$reply.'</p>
				</section>-->
				<footer>
					<a href="view-answer.php?question_id='.$questionId.'"><button class="ib-button">View Answers ('.$totalAnswers.')</button></a>
				</footer>
			</div>
			<hr class="es-mid-hr"/>
		';
	}
	echo($list_1);
}
?>