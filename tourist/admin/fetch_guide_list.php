<?php
include '../db.php';
$query = "SELECT * FROM tour_guide_list ORDER BY guide_id DESC";
$result = mysqli_query($connect,$query);
$i=1;
while($row = mysqli_fetch_assoc($result)){
 echo '
         <tr>
            <td>'.$i.'</td>
            <td>'.$row["guide_email"].'</td>
            <td>'.$row["guide_number"].'</td>
            <td>'.$row["guide_name"].'</td>
            <td>'.$row["guide_address"].'</td>
            <td>'.$row["guide_language"].'</td>
            <td>'.$row["guide_city"].'</td>
			';
			if($row["guide_approve"] == 0){
			echo'
            <td><input type = "button" class="btn btn-danger approve" value = "Approve" id = "'.$row["guide_id"].'"></td>
           ';
			}
		   if($row["guide_approve"] == 1){
			echo'
            <td><input type = "button" class="btn btn-success" value = "Approved" id = "'.$row["guide_id"].'"></td>
           ';
			}
		   echo'
         </tr> 
          
';	
$i = $i+1;
}
?>