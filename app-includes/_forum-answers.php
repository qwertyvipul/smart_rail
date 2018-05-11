<?php //PAGE-15

function forumQuestion($conn, $questionId){
	$query = "select * from forum_questions where question_id = $questionId";
	$result = mysqli_query($conn, $query);
	query_check($result, 'Error 15_101');
	
	$row = mysqli_fetch_assoc($result);
	$title = $row['title'];
	$content = $row['content'];
	$userId = $row['user_id'];
	$reply = $row['official_reply'];
	$userName = fullName($conn, $userId);
	$dateTime = $row['date_time'];
	
	echo('
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
		</div>
	');
}

function forumAnswers($conn, $questionId){
	
	
	echo('
		
	');
	
	$query = 
	$list_1='';
	while($row = mysqli_fetch_assoc($result)){
		$questionId = $row['question_id'];
		$title = $row['title'];
		
		$list_1.='
			<div class="forum-questions"><a href="forum-answer.php?question_id='.$questionId.'" class="fview-link">'.$title.'</a><br/></div><hr/>
		';
	}
	echo $list_1;
}
?>