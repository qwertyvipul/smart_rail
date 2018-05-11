<?php //PAGE-34
function getUserQuestion($conn, $questionId){
	$query = "select * from forum_questions where question_id = $questionId";
	$result = mysqli_query($conn, $query);
	query_check($result, 'Error 34_101');
	
	$row = mysqli_fetch_assoc($result);
	$questionId = $row['question_id'];
	$title = $row['title'];
	$content = $row['content'];
	$userId = $row['user_id'];
	$reply = $row['official_reply'];
	$dateTime = $row['date_time'];
	
	$userName = fullName($conn, $userId);
	
	echo('
		<div class="enquiry-scroll">
			<header class="es-head">
				<h4 class="es-title">'.$title.'<!--<button class="es-title-button">Description</button>--></h4>
				<p class="es-description">'.$content.'</p>
				<p class="es-user">'.$userName.' | '.$dateTime.'</p>
				<div style="clear:both"></div>
			</header>
		</div>
	');
}

function getUserAnswers($conn, $questionId){
	$query = "select * from forum_answers where question_id = $questionId";
	$result = mysqli_query($conn, $query);
	query_check($result, 'Error 34_102');
	
	$list_1='';
	while($row = mysqli_fetch_assoc($result)){
		$questionId = $row['question_id'];
		$content = $row['answer'];
		$userId = $row['user_id'];
		$dateTime = $row['date_time'];
		
		$userName = fullName($conn, $userId);
		
		$list_1.='
			<div class="enquiry-scroll">
				<header class="es-head">
					<p class="es-description">'.$content.'</p>
					<p class="es-user">'.$userName.' | '.$dateTime.'</p>
					<div style="clear:both"></div>
				</header>
			</div>
		';
	}
	
	echo $list_1;
}

?>