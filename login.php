<?php
require("connect.php");

   
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($savienojums,$_POST['user']);
      $mypassword = mysqli_real_escape_string($savienojums,$_POST['pass']); 
      //adminam
      $sqlA = "SELECT id FROM users WHERE username = '$myusername' and password = '$mypassword' and admin=2";
      $resultA = mysqli_query($savienojums,$sqlA);
      $rowA = mysqli_fetch_array($resultA,MYSQLI_ASSOC);
      $countA = mysqli_num_rows($resultA);
	//lietotajam
	  $sql = "SELECT id FROM users WHERE username = '$myusername' and password = '$mypassword' and admin=1";
      $result = mysqli_query($savienojums,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($countA == 1) {
	header("Refresh:0; url=admin.php");//admins
	echo "<script type='text/javascript'>
			 alert('Esi veiksmīgi ielogojies ka admins');
            </script>";

	
         
      }else {
	if($count == 1){
		header("Refresh:0; url=lietotajs.php");//lietotajs
	
		echo "<script type='text/javascript'>
               alert('Esi veiksmīgi ielogojies $myusername');
			
            </script>";
	}else{
		header("Refresh:0; url=rust.php");
		echo "<script type='text/javascript'>
            alert('Lietotajvards vai parole ievadīti nepareizi');
            </script>";
      }
   }
}		
?>