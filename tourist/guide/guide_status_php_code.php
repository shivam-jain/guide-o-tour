<?php
include '../db.php';

session_start(); 
$guide_number = $_SESSION["guide_number"];

$guide_location = $_POST["guide_location"];

date_default_timezone_set("Asia/Kolkata");
$current_timestamp = date("Y-m-d");

$query = "UPDATE tour_guide_list SET guide_location = '$guide_location',guide_attendance = '$current_timestamp',guide_available = '0' WHERE guide_number = '$guide_number'";
if(mysqli_query($connect,$query)){
	$_SESSION["guide_status"] = "ok";
	header('Location: ./');
}
else {
	header('Location: ../');
}
?>