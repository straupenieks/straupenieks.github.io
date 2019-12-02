<?php
require("connect.php");
$dzest = $_POST['dzestLietotaju'];

if(!empty($dzest) || !$dzest<1){
	$delete = "DELETE FROM users WHERE id='$dzest'";
	
	if(mysqli_query($savienojums, $delete)){
		header("Refresh:0; url=admins.php");
	}else{
		echo "Error: ".$dzest."<br>".mysqli_error($savienojums);
		header("Refresh:5; url=admins.php");	
	}
}else{
	echo 'Nederigi ievaddati!';
	header("Refresh:1; url=admins.php");	
}
?>

