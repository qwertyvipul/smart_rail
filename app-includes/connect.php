<?php //PAGE-1

$server = 'localhost';
$username = 'root';
$password = '';
$dbname = 'smartdb';
$conn = mysqli_connect($server, $username, $password, $dbname);
if(!$conn) die('Error 1_101');


//PDO Connect
try{
	$pdo = new PDO('mysql:host=localhost;dbname=smartdb;charset=utf8mb4', 'root', '');
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //pdo into exception mode
	$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false); //turn off prepare emulation	
}catch(PDOexception $ex){
	die('<b>Error 1_102');
}
?>