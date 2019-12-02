<?php
	require("connect.php");
	
	$sql = "SELECT * FROM users";
	$atlasits = mysqli_query($savienojums, $sql) 
	or die("Nekorekts vaicājums: $sql");
	
	
	if(mysqli_num_rows($atlasits) > 0){
		echo "<table>";
		echo "<tr><th>Lietotaja ID</th>
			      <th>LietotajVards</th>
				  <th>Parole</th>
				  <th>Admins?</th></tr>";
		while($row=mysqli_fetch_assoc($atlasits)){
			echo "<tr onclick='nolasaId({$row['id']});'>
				  <td>{$row['id']}</td>
				  <td>{$row['username']}</td>
				  <td>{$row['password']}</td>
				  <td>{$row['admin']}</td>
				  </tr>";	 
		}
		echo "</table>";
		
	}else{
		echo "<h1>Tabula ir tukša, nav dati ko izlasīt!</h1>";
	}
	
?>








