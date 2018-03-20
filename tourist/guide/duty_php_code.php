<?php
include '../db.php';
session_start();
$guide_number = $_SESSION["guide_number"];
$guide_location = $_POST["guide_location"];
$query = "UPDATE tour_guide_list SET guide_location = '$guide_location',guide_available = '0' WHERE guide_number = '$guide_number'";
mysqli_query($connect,$query);
echo "Tour Completed Successfully !";	
?>