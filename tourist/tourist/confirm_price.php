<?php
include '../db.php';
$price = 0;
$tourist_name = $_POST["hidden_name"];
$tourist_number = $_POST["hidden_number"];
$tourist_email = $_POST["hidden_email"];
$tourist_language = $_POST["hidden_language"];
$tourist_city = $_POST["hidden_city"];
$tourist_place = $_POST["tourist_place"];
$tourist_place_implode = implode(", ",$tourist_place);
foreach($tourist_place as $selected){
	//echo $selected . "<br>";
	$query = "SELECT price FROM place_table WHERE place_name = '$selected' AND city_name = '$tourist_city'";
	$result = mysqli_query($connect,$query);
	$row = mysqli_fetch_assoc($result);
	$price = $price + $row["price"];
}

echo '
Name : '.$tourist_name.' <br>
Number : '.$tourist_number.' <br>
Email : '.$tourist_email.' <br>
Language Chosen : '.$tourist_language.' <br>
City : '.$tourist_city.' <br>
Places To Visit : '.$tourist_place_implode.' <br>
Total Price : '.$price.' <br><br>
<form id = "confirm_book_form" method = "POST" action = "confirm_book.php">

<label>Guide Pickup Location</label>
  <select class="form-control" name = "guide_pickup">
  ';
  foreach($tourist_place as $selected){
       echo '<option value = "'.$selected.'">'.$selected.'</option>';
  }
   echo '    
  </select>
	  
	  <br><br>
<input type = "hidden" value = "'.$tourist_name.'" name = "tourist_name">
<input type = "hidden" value = "'.$tourist_number.'" name = "tourist_number">
<input type = "hidden" value = "'.$tourist_email.'" name = "tourist_email">
<input type = "hidden" value = "'.$tourist_language.'" name = "tourist_language">
<input type = "hidden" value = "'.$tourist_city.'" name = "tourist_city">
<input type = "hidden" value = "'.$tourist_place_implode.'" name = "tourist_place">
<input type = "hidden" value = "'.$price.'" name = "tourist_price">
<input type= "submit" class = "btn btn-info" id = "confirm_book_button" value = "Confirm Booking">
</form>
';
?>