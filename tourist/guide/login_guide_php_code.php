 <?php  
include '../db.php';
session_start();

function test_input($data)
 {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
 }
 
 
$guide_number = test_input($_POST["guide_number"]);
$guide_password = test_input($_POST["guide_password"]);
           if(empty($guide_number) || empty($guide_password))  
           {  
                echo "Both fields are required";
           } 
            
           else  
           {  
                $query = "SELECT guide_number FROM tour_guide_list WHERE guide_number = ? AND guide_password = ?";  
				$query_prepare_statement = mysqli_prepare($connect, $query);
		        mysqli_stmt_bind_param($query_prepare_statement, "ss", $guide_number, $guide_password);  
                if ( mysqli_stmt_execute($query_prepare_statement)) {  
				
				  mysqli_stmt_store_result($query_prepare_statement);  //single step security
				  
				   /* bind result variables */
                  mysqli_stmt_bind_result($query_prepare_statement, $fetch_guide_number);  //two step security

                   /* fetch value */
                  mysqli_stmt_fetch($query_prepare_statement);
				  
                $count = mysqli_stmt_num_rows($query_prepare_statement); 
                if($count > 0)  
                {  
                     $_SESSION["guide_number"] = $fetch_guide_number;  
                     echo "100";  
                }  
                else  
                {  
                     echo "Wrong Username and Password";  
                } 
		   }				
           }  
        
   
  mysqli_close($connect);
 
 ?>