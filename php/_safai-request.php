<?php //PAGE-23

require_once("../app-includes/app-include.php");

$userId = $_GET['user_id'];
$stationId = $_GET['station_id'];
$content = $_POST['content'];
$latitude = $_POST['latitude'];
$longitude = $_POST['longitude'];

$link = '';

if(isset($_FILES['image'])){
	$errors= array();
	$file_name = $_FILES['image']['name'];
	$file_size =$_FILES['image']['size'];
	$file_tmp =$_FILES['image']['tmp_name'];
	$file_type=$_FILES['image']['type'];
	$file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
	$extensions= array("jpeg","jpg","png");

	if(in_array($file_ext,$extensions)=== false){
		$errors[]="extension not allowed, please choose a JPEG or PNG file.";
	}

	if($file_size > 2097152){
		$errors[]='File size must be excately 2 MB';
	}

	$new_name = sha1(microtime());
	$new_name.='.'.$file_ext;

	if(empty($errors)==true){
		move_uploaded_file($file_tmp,"../safai_images/".$new_name);
		//echo "Success : $new_name";
	}else{
		print_r($errors);
		die();
	}
}

$link = $new_name;

$query = "insert into safai_request(user_id, station_id, latitude, longitude, file_name, content)
values($userId, $stationId, '$latitude', '$longitude', '$link', '$content')";

$result = mysqli_query($conn, $query);
query_check($result, 'Error 23_101');


die(header('Location:../station/station.php'));
















/* FAILURE

$upload_file = $_POST['image_file'];

//if file exists
if((empty($_FILES[$upload_file])) or ($_FILES[$upload_file]['error'] != 0)) die('Error 23_101 : Unknown Error!');

$file_info = pathinfo($_FILES[$upload_file]['name']);
$file_name = $file_info['filename']; //file name
$file_ext = $file_info['extension']; //file extension

$path = '../uploads';
$max_size = 1000000; //max file size
$valid_ext = array('jpeg','jpg','png','gif'); //permissible extensions
$valid_type = array('image/jpeg', 'image/jpg', 'image/png','image/gif'); //file types

if (!in_array($file_ext, $valid_ext)) die("Error 23_102 : Invalid file Extension"); //extension check
if (!in_array($_FILES[$upload_file]["type"], $valid_type)) die("Error 23_103 : Invalid file Type"); //type check
if ($_FILES[$file_field]["size"] > $max_size) die("Error 23_105 : File is too big"); //size check

//generate random file name
$tmp = str_replace(array('.',' '), array('',''), microtime());
$new_name = $tmp.'.'.$file_ext;

move_uploaded_file($_FILES[$upload_file]['tmp_name'], $path.$new_name);

echo($path.$new_name);
*/

?>

