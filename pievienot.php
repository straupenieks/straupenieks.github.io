<?php
require("connect.php");
if(isset($_POST['vardaIevade']) && isset($_POST['parolesIevade']) && isset($_POST['admins'])){
		$vards = $_POST['vardaIevade'];
		$parole = $_POST['parolesIevade'];
		$admin = $_POST['admins'];
		
		$user_check_query = "SELECT * FROM users WHERE username='$vards' LIMIT 1";
		$result = mysqli_query($savienojums, $user_check_query);
		$user = mysqli_fetch_assoc($result);
		$errors = array();
		
	if(!empty($vards) && !empty($parole) && !empty($admin)){
		$ievieto =" INSERT INTO users (username, password, admin) VALUE ('$vards', '$parole', '$admin')";
	
	
    if ($user['username'] === $vards) {
      echo "<script type='text/javascript'>
			 alert('Lietotajs ar šadu vardu jau eksiste');
            </script>";
			
	  header("Refresh:0; url=admins.php");
    
  }else{ 
	if(mysqli_query($savienojums, $ievieto)){
		header("Refresh:0; url=admins.php");	
	}else{
		echo "Klume: ".$ievieto."<br>".mysqli_error($savienojums);
		header("Refresh:0; url=admins.php");
	}
	}
	}else{
		echo"<h1>Nav Aizpilditi visi lauki</h1>";
		header("Refresh:0; url=admins.php");
	}
			
}


?>