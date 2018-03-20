$(document).ready(function(){
$("#section_2").hide();
$("#section_1").show();

 $(document).on('submit', '#tourist_form_1', function(){						//Change Deadline
 event.preventDefault();
 var tourist_name = $('#tourist_name').val();
var tourist_number = $('#tourist_number').val();
var tourist_email = $('#tourist_email').val();
var tourist_language = $('#tourist_language').val();
var tourist_city = $('#tourist_city').val();
  $.ajax({
   url:"choose_place.php",
   method:"POST",
   data:new FormData(this),
    contentType:false,
    processData:false,
	//dataType:"json",
   success:function(data)
   {
	 	$('#tourist_place_div').html(data);  
	 	//$('#tourist_place_div').html(data.tourist_place);  
        $("#section_1").hide();
        $("#section_2").show();
		$('#hidden_name').val(tourist_name);
		$('#hidden_email').val(tourist_email);
		$('#hidden_number').val(tourist_number);
		$('#hidden_language').val(tourist_language);
		$('#hidden_city').val(tourist_city);
		
    }
  });
 });
 
 $("#previous").click(function(){
    $("#section_1").show();
    $("#section_2").hide();
});

 $(document).on('submit', '#tourist_form_2', function(){
	 event.preventDefault();
	 $.ajax({
   url:"confirm_price.php",
   method:"POST",
   data:new FormData(this),
    contentType:false,
    processData:false,
   success:function(data)
   {
	 	$('#confirm_price').html(data);  
		
    }
  });
 });
 

 
});







