<?php //PAGE-16
function getAnnStation($conn, $adminId){
	$query = "select station_id from ann_admin where admin_id = $adminId";
	$result = mysqli_query($conn, $query);
	query_check($result, 'Error 16_101');
	
	$row = mysqli_fetch_assoc($result);
	$stationId = $row['station_id'];
	
	return $stationId;
}
?>