$(document).ready(function(){
	
	
		 
	 	 $(document).on('submit', '#guide_register_form', function(event){						//insert data
  event.preventDefault();

   $.ajax({
    url:"guide_register_php_code.php",
    method:'POST',
	data:new FormData(this),
    contentType:false,
    processData:false,
    success:function(data)
    {
     $('#guide_register_message').html(data);
     $('#guide_register_form')[0].reset();
    }
   });
   setInterval(function(){
     $('#guide_register_message').html('');
    }, 10000);

 });
	 
	 
	  $(document).on('submit', '#guide_login_form', function(event){
  event.preventDefault();
  var guide_number = $('#guide_number').val();
  var guide_password = $('#guide_password').val();
  $.ajax({
   url:"login_guide_php_code.php",
   method:"POST",
   data:{
	   guide_number:guide_number,
	   guide_password:guide_password
	    },
   success:function(data)
   {
	   if(data==100){
		   window.location.href="guide_status.php";
	   } 
	   else{
		   $('#guide_login_message').html('<span class="text-danger"><b>'+data+'</b></span>');
		   setTimeout('$("#admin_login_error_message").html("")',3000);
	   }

   }
  });
 });
	
});