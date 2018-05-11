<?php //PAGE-11
//getting the 3 announcements for the home page
function fullName($conn, $userId){
	$query = "select full_name from user_info where user_id = $userId";
	$result = mysqli_query($conn, $query);
	query_check($result, 'Error 11_101');
	$row = mysqli_fetch_assoc($result);
	return $row['full_name'];
}

function firstName(){
	null;
}
?>