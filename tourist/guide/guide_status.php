<?php
include '../db.php';
include '../header.php';

session_start();  
 if(!isset($_SESSION["guide_number"]))  
 {  
     header('Location: guide_login.php');
 }
?>
</head>
<body>
<div class="well well-lg col-md-8 col-md-offset-2">
<form method = "POST" action = "guide_status_php_code.php">

 
  <div class="form-group">
      <label>Guide Location</label>
      <select class="form-control" id="guide_location" name = "guide_location">
	  <?php
	  $query = "SELECT DISTINCT * FROM place_table";
	  $result = mysqli_query($connect,$query);
	  while($row = mysqli_fetch_assoc($result)){
		  echo '
		  <option value = "'.$row["place_name"].'">'.$row["place_name"].'</option>
		  ';
	  }
	  ?>
        
        
      </select>
  
</div>
<input type = "submit" class = "btn btn-primary" value = "Update">

</form>

</div>
</body>
</html>