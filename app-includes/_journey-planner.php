<?php //PAGE-22

function getExperience($conn, $start, $finish){
	$query = "select * from user_experience where start = '$start' and finish = '$finish' order by upvote desc";
	$result = mysqli_query($conn, $query);
	query_check($result, 'Error 22_101');
	
	$list_1='';
	while($row = mysqli_fetch_assoc($result)){
		$content = $row['description'];
		$upvotes = $row['upvote'];
		$dateTime = $row['date_time'];
		$userId = $row['user_id'];
		$userName = fullName($conn, $userId);
		
		$list_1.='
			<div class="index-box" style="text-align:center;">
				<section class="ib-section" style="text-align:left;">
					<div class="enquiry-scroll">
						<header class="es-head">
							
							<p class="es-description">'.$content.'</p>
							<p class="es-user">'.$userName.' | '.$dateTime.'</p><br/>
							<p class="es-description"><button>Upvote</button> ('.$upvotes.')</p>
							<div style="clear:both"></div>
						</header>
					</div>
					<hr class="es-mid-hr"/>
				</section><hr class="sh-low-hr" />
			</div>
		';
	}
	echo $list_1;
}

?>