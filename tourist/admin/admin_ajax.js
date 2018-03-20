 $(document).ready(function(){
	 
	 fetch_guide_list_data();  					//fetch send message data
    
     function fetch_guide_list_data()
     {
   	$.ajax({
    url:"fetch_guide_list.php",
    success:function(data)
    {
      $('#guide_table_body').html(data);
    }
   });
	  
     }
	 
	 
	 
	 	$(document).on('click', '.approve', function(){				
var guide_id = $(this).attr("id");
 
  $.ajax({
   url:"guide_approve.php",
   method:"POST",
   data:{
	   guide_id:guide_id
   },
   success:function(data)
    {
    
		fetch_guide_list_data(); 
	
    }
  });

 });
	
		 

	 
	 
 });