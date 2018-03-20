<?php
include '../header.php';
include '../db.php';
?>
<script>
$(document).ready(function(){
	 $("#guide_register").hide();
    $(".guide_login_button").click(function(){
        $("#guide_register").hide();
		$("#guide_login").show();
    });
    $(".guide_register_link").click(function(){
        $("#guide_register").show();
		$("#guide_login").hide();
    });
});
 $(document).ready(function() {
    $('select').material_select();
  });
       
</script>
</head>
<body>
<br><br><br>
	  <div class="container" id = "guide_login">
	   <div class="well well-lg col-md-6 col-md-offset-3">
    <form class="col-s12" id = "guide_login_form">
       <label for="guide_number">Mobile Number</label>
          <input id="guide_number" type="text" class="form-control" required>
        <br>
       
     
   <label for="guide_password">Password</label>
          <input id="guide_password" type="password" class="form-control" required>
         <br>
        
 <input type = "submit" class="btn btn-info" value = "Login">
	  <button class = "btn btn-warning guide_register_link">Register</button>
    </form>
	
	<div id = "guide_login_message"></div>
	</div>
  </div>

  
  
  	  <div class="container" id = "guide_register">
	  <div class="well well-lg col-md-8 col-md-offset-2">
    <form class="col s12" id = "guide_register_form">
           
		    <label for="guide_number">Mobile Number</label>
          <input id="guide_number" type="text" class="form-control" name = "guide_number" required>
         <br>
        
	   <label for="guide_email">Email</label>
          <input id="guide_email" type="email" class="form-control" name = "guide_email" required>
       <br>
       
     
               <label for="guide_password">Password</label>
          <input id="guide_password" type="password" class="form-control" name = "guide_password" required>
<br>
 
     <label for="guide_name">Name</label>
          <input id="guide_name" type="text" class="form-control" name = "guide_name" required>
    <br>  
     
	  
	       <label for="guide_address">Address</label>
          <input id="guide_address" type="text" class="form-control" name = "guide_address" required>
    <br>
	<label>Select Language</label><br>
	 <label class="checkbox-inline">
      <input type="checkbox" value="hindi" name="guide_language[]" checked>Hindi
    </label>
    <label class="checkbox-inline">
      <input type="checkbox" value="english" name="guide_language[]">English
    </label>
    <label class="checkbox-inline">
      <input type="checkbox" value="punjabi" name="guide_language[]">Punjabi
    </label>
	<br><br>
	
        <div class="form-group">
		    <label>City</label>
      <select class="form-control" id="guide_city" name="guide_city">
    

	  <option value="jaipur">Jaipur</option>
	  <option value="jodhpur">Jodhpur</option>
      </select>
		</div>
	  
	  
	  
	  
	  <br>
      <input type = "submit" class="btn btn-primary guide_register_link" value = "Register">
	   <button class = "btn btn-warning guide_login_button">Login</button>
	 
    </form>
	<div id = "guide_register_message"></div>
	</div>
  </div>
  
	 
</body>
</html>
<script src = "guide_ajax.js"></script>