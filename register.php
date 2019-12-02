<?php
	require_once "connect.php";
	$username = $password = "";
	$username_error = $password_error = "";
	
	//Pārbauda datus, kad forma tiek iesniegta
	if($_SERVER["REQUEST_METHOD"] =="POST"){
		
		if(empty(trim($_POST["user"]))){
			$username_error = "Ievadi lietotājvārdu!";
echo "<script type='text/javascript'>
			 alert('Ievadi lietotajvardu');
            </script>";
		}else{
		//sagatavo sql vaicājumu
			$sql = "SELECT id FROM users WHERE username = ?";
		
			if($x = mysqli_prepare($savienojums, $sql)){
				mysqli_stmt_bind_param($x, "s", $param_username);
				$param_username = trim($_POST["user"]);
			
			 if(mysqli_stmt_execute($x)){
				 mysqli_stmt_store_result($x);
				 
			 if(mysqli_stmt_num_rows($x)==1){
				 $username_error ="Šāds lietotājs jau pastāv!";
echo "<script type='text/javascript'>
			 alert('lietotajs jau eksiste');
            </script>";header("Refresh:0; url=rust.php");
			 }else{
				 $username = trim($_POST["user"]);
			 }
			 }	
			}
		mysqli_stmt_close($x);
		}

//Validē paroli

	if(empty(trim($_POST["pass1"]))){
		$password_error = "Ievadi paroli!";
	echo "<script type='text/javascript'>
			 alert('Ievadi paroli!');
            </script>";
header("Refresh:0; url=rust.php");
	}else if(strlen(trim($_POST["pass1"]))<6){
		$password_error = "Parolei jsatur vismaz 4 simboli";
		echo "<script type='text/javascript'>
			 alert('Vismaz 6 rakstu zimes!');
            </script>";
		header("Refresh:0; url=rust.php");
	}else{
		$password = trim($_POST["pass1"]);
	}	
	
	//Prbaudda vai nebija kda kda, ja nebija, tad raksta DB
	if(empty($username_error) && empty($password_error)){
		$sql  = "INSERT INTO users (username, password) VALUE(?, ?)";
		
		if($x=mysqli_prepare($savienojums, $sql)){
			mysqli_stmt_bind_param($x, "ss", $param_username, $param_password);
			$param_username = $username;
			$param_password = $password;
			echo "<script type='text/javascript'>
			 alert('Lietotajs izveidots');
            </script>";
			if(mysqli_stmt_execute($x)){
				//Redirekties uz skumlapu
				header("location: rust.php");
			}else{
				echo "Rādās kļūda!";
				}
			}
			mysqli_stmt_close($x);
		}
	
	}
	
?>