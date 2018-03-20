<?php
include '../db.php';
include '../header.php';

session_start();  
 if(!isset($_SESSION["guide_status"]))  
 {  
     header('Location: guide_login.php');
 }
$guide_number = $_SESSION["guide_number"];
 $query = "SELECT guide_id FROM tour_guide_list WHERE guide_number = '$guide_number'";
 $result = mysqli_query($connect,$query);
 $row = mysqli_fetch_assoc($result);
 $guide_id = $row["guide_id"];
 $table_name = "guide_".$guide_id;
?>

</head>
<body>
 <!-- Navbar Starts -->
      <nav class="navbar navbar-inverse navbar-fixed-top">
         <div class="container-fluid">
            <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>                        
               </button>
               <a class="navbar-brand">Guide-O-Tour</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
               <!--<ul class="nav navbar-nav">
                  <li class="active"><a>Home</a></li>
               </ul>-->
               <ul class="nav navbar-nav navbar-right">
                  <li class="dropdown">
                     <a class="dropdown-toggle" data-toggle="dropdown" href="">Guide
                     </a>
                    
                  </li>
                  <li><a href="guide_logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
               </ul>
            </div>
         </div>
      </nav>
      <!--Navbar Ends-->
     <br><br>
<div class="container">
  <h2>Guide Duty</h2>         
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Sl.No.</th>
        <th>Visitor Name</th>
        <th>Visitor Phone Number</th>
        <th>Visitor Email</th>
        <th>Visitor Places To Visit</th>
        <th>Visitor Pickup Location</th>
        <th>Visitor Pay</th>
        <th>Visitor Pay Status</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
	<?php
	$query = "SELECT * FROM $table_name ORDER BY id DESC";
	$result = mysqli_query($connect,$query);
	$i=1;
	  while($row = mysqli_fetch_assoc($result)){
		  $visitor_id = $row["visitor_id"];
		  	$query1 = "SELECT * FROM visitor_table WHERE visitor_id = '$visitor_id'";
	        $result1 = mysqli_query($connect,$query1);
			$row1 = mysqli_fetch_assoc($result1);
			echo '
			<tr>
        <td>'.$i.'</td>
        <td>'.$row1["visitor_name"].'</td>
        <td>'.$row1["visitor_email"].'</td>
        <td>'.$row1["visitor_number"].'</td>
        <td>'.$row1["visitor_place_to_visit"].'</td>
        <td>'.$row1["visitor_book"].'</td>
        <td>'.$row1["visitor_price"].'</td>
        <td>'.$row["paid"].'</td>
        <td><button class = "btn btn-primary duty" data-toggle="modal" data-target="#duty_modal" id="'.$row1["visitor_id"].'">Duty Off</button></td>
        
      </tr>
			';
	  $i=$i+1;
	  }
	?>
      
   
    </tbody>
  </table>
</div>


<div class="modal fade" id="duty_modal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Duty OFF</h4>
        </div>
        <div class="modal-body">
		<form method = "POST" action="duty_php_code.php">
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
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>




</body>
</html>