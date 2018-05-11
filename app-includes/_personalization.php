<?php //PAGE-30

function checkDay($conn){
	$query = "select * from journey_info where status = 0";
	$result = mysqli_query($conn, $query);
	query_check($result, 'Error 30_101');
	while($row = mysqli_fetch_assoc($result)){
		$journeyId = $row['journey_id'];
		$date = $row['date'];
		$date = date_create_from_format('d-m-Y', $date);
		$journeyDay = $date;
		
		$today = date("d-m-Y");
		$today = date_create_from_format('d-m-Y', $today);
		$diff = date_diff($today, $journeyDay);
		$diff = $diff->format("%a");
		//echo($diff);
		//die();
		if($diff==1){
			$query_2 = "select * from pnr_info where journey_id = $journeyId";
			$result_2 = mysqli_query($conn, $query_2);
			query_check($result_2, 'Error 30_102');
			
			while($row_2 = mysqli_fetch_assoc($result_2)){
				$userId = $row_2['user_id'];
				$pnrNo = $row_2['pnr_no'];
				
				$title = 'Get ready for your journey';
				$content = 'Less than 24hrs left for your journey. Get ready for an awesome travel experience.';
				insert_notification($conn, $userId, $title, $content);
				changePNRStatus($conn, $pnrNo, 1); //first notification sent
			}
			
			$query_3 = "update journey_info set status = 1 where journey_id = $journeyId";
			$result_3 = mysqli_query($conn, $query_3);
			query_check($result_3, 'Error 30_104');
		}
	}
}


function changePNRStatus($conn, $pnrNo, $status){
	$query = "update pnr_info set status = $status where pnr_no = $pnrNo";
	$result = mysqli_query($conn, $query);
	query_check($result, 'Error 30_103');
}


function stationConfirm($conn, $userId){
	$query = "select * from pnr_info where user_id = $userId and status = 1 limit 1";
	$result = mysqli_query($conn, $query);
	query_check($result, 'Error 30_105');
	
	if(mysqli_num_rows($result)==1){
		$row = mysqli_fetch_assoc($result);
		$pnrNo = $row['pnr_no'];
		$stationId = $row['start_point'];
		
		$stationName = getName($conn, $stationId);
		
		echo('
			<div class="index-box" style="padding:0px;">
				<p class="station-confirm">If your are on '.$stationName.' : <a href="/sih/php/_station-confirm.php?pnr_no='.$pnrNo.'"><button>Click Here</button></a></p>
			</div>
		');
	}
}


function trainStatus($conn, $pnrNo){
	$query = "select * from pnr_info where user_id = $userId and status = 2 limit 1";
	$result = mysqli_query($conn, $query);
	query_check($result, 'Error 30_106');
	
	if(mysqli_num_rows($result)==1){
		
		$pnrNo = $row['pnr_no'];
		$trainNo = $row['train_no'];
		$trainName = getTrainName($conn, $trainNo);
		
		echo('
			<div class="index-box" style="padding:0px;">
				<p class="station-confirm">If your are on '.$stationName.' : <a href="/sih/php/_station-confirm.php?pnr_no='.$pnrNo.'"><button>Click Here</button></a></p>
			</div>
		');
	}
	
}


//check this
function trainConfirm($conn, $pnrNo){
	$query = "select * from pnr_info where user_id = $userId and status = 2 limit 1";
	$result = mysqli_query($conn, $query);
	query_check($result, 'Error 30_107');
	
	if(mysqli_num_rows($result)==1){
		$row = mysqli_fetch_assoc($result);
		$pnrNo = $row['pnr_no'];
		$stationId = $row['start_point'];
		$trainNo = $row['train_no'];
		
		echo('
			<div class="index-box" style="padding:0px;">
				<p class="station-confirm">If your have... '.$stationName.' : <a href="/sih/php/_station-confirm.php?pnr_no='.$pnrNo.'"><button>Click Here</button></a></p>
			</div>
		');
	}
}
?>