<?php
require("connect.php");

	
		$vardsLabojums = $_POST['vardsLabojums'];
		$paroleLabojums = $_POST['parolesLabojums'];
		$adminLabojums = $_POST['adminsLabojums'];
		
		if(!empty($vardsLabojums) && !empty($paroleLabojums)){
			$update = " UPDATE users SET username='$vardsLabojums', password='$paroleLabojums', admin='$adminLabojums ' WHERE username='$vardsLabojums'";
			
			if(mysqli_query($savienojums, $update)){
				header("Refresh:0; url=admins.php");
				
				echo "<script type='text/javascript'>
			 alert('ir update');
            </script>";
			}else{
				echo "Error: ".$vardsLabojums."<br>".mysqli_error($savienojums);
				header("Refresh:5; url=admins.php");
			}
		}else{
			echo "<h1>Nav aizpilditi visidati</h1>";
			header("Refresh:1; url=admins.php");
		}
	
			



?>