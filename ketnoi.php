<?php 

$server_name ='localhost';
$user = 'root';
$password = '';
$database_name = 'doanphp';

$conn = mysqli_connect($server_name, $user, $password, $database_name);


if (mysqli_connect_errno() !== 0) {
	die("Error: Could not connect to the database. An error " . mysqli_connect_error() . " ocurred.");
}
mysqli_set_charset($conn, 'utf8');

?>
