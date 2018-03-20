<?php
include '../header.php';
include '../db.php';
session_start();  
 if(!isset($_SESSION["admin_username"]))  
 {  
     header('Location: admin_login.php');
 }
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
                     <a class="dropdown-toggle" data-toggle="dropdown" href="">Admin
                     </a>
                    
                  </li>
                  <li><a href="admin_logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
               </ul>
            </div>
         </div>
      </nav>
      <!--Navbar Ends-->
     <br><br>

<div class="container"> 
<h2>Guide List</h2>
<div class="table-responsive">   <br><br>   
  <table class="table table-hover table-bordered">
    <thead>
      <tr>
              <th>Sl.No.</th>
              <th>Guide Email</th>
              <th>Guide Number</th>
              <th>Guide Name</th>
              <th>Guide Address</th>
              <th>Guide Language</th>
              <th>Guide City</th>
              <th>Action</th>
      </tr>
    </thead>
    <tbody id = "guide_table_body">
    
      
    </tbody>
  </div>
</div>
	 
</body>
</html>
<script src = "admin_ajax.js">
</script>