<?php
include '../db.php';
$guide_number = $_POST["guide_number"];
$guide_email = $_POST["guide_email"];
$guide_password = $_POST["guide_password"];
$guide_name = $_POST["guide_name"];
$guide_address = $_POST["guide_address"];
$guide_city = $_POST["guide_city"];
$guide_language = array();
foreach($_POST['guide_language'] as $selected){
	$guide_language[] = $selected;
}

$guide_language_implode = implode(",",$guide_language);

$query = "INSERT into tour_guide_list (guide_email,guide_number,guide_password,guide_name,guide_address,guide_language,guide_city) VALUES ('$guide_email','$guide_number','$guide_password','$guide_name','$guide_address','$guide_language_implode','$guide_city')";
mysqli_query($connect,$query);
?>
