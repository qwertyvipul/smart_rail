<?php //PAGE-14
function allQuestions($conn){
	$query = "select * from forum_questions";
	$result = mysqli_query($conn, $query);
	query_check($result, 'Error 14_101');
	
	$list_1='';
	while($row = mysqli_fetch_assoc($result)){
		$questionId = $row['question_id'];
		$title = $row['title'];
		
		$list_1.='
			<div class="flink-div"><a href="forum-answers.php?question_id='.$questionId.'" class="flink">'.$title.'</a><br/></div><hr/>
		';
	}
	echo $list_1;
}
?>