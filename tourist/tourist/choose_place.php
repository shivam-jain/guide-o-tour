<?php
include '../db.php';
// $output= array();
$tourist_name = $_POST["tourist_name"];
$tourist_number = $_POST["tourist_number"];
$tourist_email = $_POST["tourist_email"];
$tourist_language = $_POST["tourist_language"];
$tourist_city = $_POST["tourist_city"];
$query = "SELECT place_id,place_name FROM place_table WHERE city_name = '$tourist_city'";
$result = mysqli_query($connect,$query);
while($row = mysqli_fetch_assoc($result)){
	echo '
	 <label class="checkbox-inline">
      <input type="checkbox" id="'.$row["place_id"].'" value="'.$row["place_name"].'" name="tourist_place[]">'.$row["place_name"].'
    </label>
	';
	//$output["tourist_place"]= $sub_array[];
}
/*$output["tourist_name"] = $tourist_name;
$output["tourist_number"] = $tourist_number;
$output["tourist_email"] = $tourist_email;
$output["tourist_language"] = $tourist_language;
$output["tourist_city"] = $tourist_city;
 echo json_encode($output);*/
?>