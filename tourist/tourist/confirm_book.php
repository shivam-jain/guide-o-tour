<?php
include '../db.php';
include '../header.php';
$tourist_name = $_POST["tourist_name"];
$tourist_number = $_POST["tourist_number"];
$tourist_email = $_POST["tourist_email"];
$tourist_language = $_POST["tourist_language"];
$tourist_city = $_POST["tourist_city"];
$tourist_place = $_POST["tourist_place"];
$tourist_price = $_POST["tourist_price"];
$guide_pickup = $_POST["guide_pickup"];
date_default_timezone_set("Asia/Kolkata");
$current_timestamp = date("Y-m-d");
$query = "SELECT * FROM tour_guide_list WHERE guide_location = '".$guide_pickup."' AND guide_available = '0' AND guide_approve = '1' AND guide_attendance = '$current_timestamp'";
$result = mysqli_query($connect,$query);
$row = mysqli_fetch_assoc($result);
$guide_id = $row["guide_id"];
$guide_name = $row["guide_name"];
$guide_email = $row["guide_email"];
$guide_number = $row["guide_number"];
$table_name = "guide_".$guide_id;

$query = "INSERT INTO visitor_table (visitor_name,visitor_email,visitor_number,visitor_language,visitor_city,visitor_place_to_visit,visitor_price,visitor_book) VALUES ('$tourist_name','$tourist_email','$tourist_number','$tourist_language','$tourist_city','$tourist_place','$tourist_price','$guide_pickup')";
if(mysqli_query($connect,$query)){
	$last_id = mysqli_insert_id($connect);
	$query = "INSERT INTO $table_name (visitor_id) VALUES ('$last_id')";
	if(mysqli_query($connect,$query)){
		$query = "UPDATE tour_guide_list SET guide_available = '1' WHERE guide_id = '$guide_id'";
		mysqli_query($connect,$query);
		echo '
		</head>
		<body
		<div class="well well-lg col-md-8 col-md-offset-2">
		You have successfully Booked a Guide ! <br>
		Guide Name : '.$guide_name.' <br>
		Guide Email : '.$guide_email.' <br>
		Guide Number : '.$guide_number.' <br>
		Guide Pickup Location : '.$guide_pickup.' <br>
		
		<button class = "btn btn-success">Pay Online</button>
		<button class = "btn btn-warning">Pay Cash</button> <br>
		
		</div>
		</body>
		</html>
		';
	}
	else {
		echo 'Guide Not Available !';
	}
}


?>