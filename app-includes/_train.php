<?php //PAGE-32

function getTrainName($conn, $trainNo){
	$query = "select * from train_info where train_no = $trainNo";
	$result = mysqli_query($conn, $query);
	query_check($result, 'Error 32_101');
	
	$row = mysqli_fetch_assoc($result);
	$trainName = $row['train_name'];
	
	return $trainName;
}
?>