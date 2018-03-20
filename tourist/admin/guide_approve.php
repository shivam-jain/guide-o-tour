<?php
include '../db.php';

$guide_id = $_POST["guide_id"];
$query = "UPDATE tour_guide_list SET guide_approve = '1' WHERE guide_id = '$guide_id'";
if(mysqli_query($connect,$query)){
	$query = "
	CREATE TABLE guide_".$guide_id."(
id INT(11) AUTO_INCREMENT PRIMARY KEY,
date TIMESTAMP,
visitor_id INT(11),
paid INT(11)
)
	";
	mysqli_query($connect,$query);

	
}
?>