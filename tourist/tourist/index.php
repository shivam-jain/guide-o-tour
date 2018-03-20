<?php
include '../db.php';
include '../header.php';
?>

</head>
<body>

  <div class = "container" id = "section_1">
    <div class="well well-lg col-md-8 col-md-offset-2">
  <form class="col-s12" id = "tourist_form_1">
 
           <label for="tourist_name">Name</label>
          <input id="tourist_name" type="text" class="form-control" name = "tourist_name" required>
         
       
	  
           <label for="tourist_number">Mobile Number</label>
          <input id="tourist_number" type="text" class="form-control" name = "tourist_number" required>
         
       
	            <label for="tourist_email">Email</label>
          <input id="tourist_email" type="email" class="form-control" name = "tourist_email" required>

          <div class="form-group">
		    <label>Language</label>
      <select class="form-control" id="tourist_language" name="tourist_language">
     <?php
	  $query = "SELECT guide_language FROM tour_guide_list WHERE guide_approve = '1'";
	  $result = mysqli_query($connect,$query);
	  $language = array();
	  $temp_explode = array();
	  while($row = mysqli_fetch_assoc($result)){
		  $subarray=array();
		  $temp = $row["guide_language"];
		  $subarray = explode(",",$temp);
		  $temp_explode[] = $subarray;
	  }
	  //$temp_explode = array_unique(array_column($language, 'value'));
     //print_r(array_intersect_key($array, $tempArr));

	  $language = array_unique($temp_explode);
	  //$language = $temp_explode;
	  
	  foreach($language as $select){
		  foreach($select as $selected){
      echo '
		  <option value="'.$selected.'">'.$selected.'</option>
		  ';
		  }
	  }
	  ?>
      </select>
		</div>
	   
	 
	     <div class="form-group">
		    <label>City</label>
      <select class="form-control" id="tourist_city" name="tourist_city">
    

	  <?php
	  $query = "SELECT DISTINCT guide_city FROM tour_guide_list WHERE guide_approve = '1'";
	  $result = mysqli_query($connect,$query);
	
	  while($row = mysqli_fetch_assoc($result)){
	 echo '
		  <option value="'.$row["guide_city"].'">'.$row["guide_city"].'</option>
		  ';
	  }

	  ?>
      </select>
		</div>
	 
      <input type = "submit" class="btn btn-primary" value = "Next" id = "next">
	
  </form>
  </div>
  
  </div>
  
  
  
  
  <div class = "container" id = "section_2">
     <div class="well well-lg col-md-8 col-md-offset-2">
   <form method = "POST" class="col-s12" id = "tourist_form_2">
   <label>Select Places</label><br><br>
	<div class="" id = "tourist_place_div">
	
	</div>
	<br>
	  <!--<button class="btn btn-primary" id = "previous">Previous</button> -->
	   <input type = "hidden" id = "hidden_name" name = "hidden_name">
	  <input type = "hidden" id = "hidden_number" name = "hidden_number">
	  <input type = "hidden" id = "hidden_email" name = "hidden_email">
	  <input type = "hidden" id = "hidden_language" name = "hidden_language">
	  <input type = "hidden" id = "hidden_city" name = "hidden_city">
      <input type = "submit" class="btn btn-primary" value = "Next">
    
	 
   </form><br><br>
   <div id="confirm_price">
   </div>
   </div>
  </div>
  

  
  
</body>
</html>
<script src = "tourist_ajax.js"></script>
