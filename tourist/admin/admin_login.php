<?php
include '../header.php';
?>
</head>
<body>


	  <div class="container"><br><br><br>
	  <div class="well well-lg col-md-6 col-md-offset-3">
    <form id = "admin_login_form">
      <label>Username</label> 
          <input id="admin_username" type="text" class="form-control" name = "admin_username">
    <br>
       
     <label>Password</label> 
     
          <input id="admin_password" type="password" class="form-control" name = "admin_username">
<br>
      
      <input type = "submit" class="btn btn-info" value="Login">
    </form><br>
		<div><span id = "admin_login_error_message"></span></div>
	</div>

  </div>

	 
</body>
</html>

 <script>
  $(document).on('submit', '#admin_login_form', function(event){
  event.preventDefault();
  var admin_username = $('#admin_username').val();
  var admin_password = $('#admin_password').val();
  $.ajax({
   url:"login_admin_php_code.php",
   method:"POST",
   data:{
	   admin_username:admin_username,
	   admin_password:admin_password
	    },
   success:function(data)
   {
	   if(data==100){
		   window.location.href="./";
	   } 
	   else{
		   $('#admin_login_error_message').html('<span class="text-danger"><b>'+data+'</b></span>');
		   setTimeout('$("#admin_login_error_message").html("")',3000);
	   }

   }
  });
 });

 
 </script>