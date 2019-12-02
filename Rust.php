<!DOCTYPE html>
<html>
<head>
	<title>RUST</title>
	<link rel="shortcut icon" type="image/x-icon" href="atteli/logo.png"/>
	<link rel="stylesheet" type="text/css" href="stils.css"/>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
</head>
<body>
<h1><img id="RustLogo" src="atteli/logo.png"></img></h1>
<button  id="log" onclick="document.getElementById('logins').style.display='block'">Login</button>
<button  id="reg" onclick="document.getElementById('register').style.display='block'">Register</button>
<div class="robeza">

			<nav>
			<a href="Rust.php"><button class="aktivaPoga">Home</button></a>
			<a href="https://rust.facepunch.com/blog/"><button class="poga">Update</button></a>
			
			
			<div class="apaksa">
			<a href="#"><button class="poga">Gallery</button></a>
			<div class="apaks-klases">
         <a href="Gallery.php">Pictures</a>
		 <a href="Gallery2.php">Video</a>
		 <a href="Gallery3.php">Screenshots</a>
			</div>
			
			
			</div>
			<a href="https://rust.facepunch.com/changes/1"><button class="poga">Information</button></a>
			
			</nav>
			
			<hr id="linija1" />


<div id="logins" >
<form class="frm" action="login.php" method="POST">
		<!--Ziņojums, ja nekorekti login dati-->
	
<span id="aizvertLog" onclick="xAizvert();" title="Aizvērt logs">&times;</span>

		<p>
		<label class="teksts">Username:</label>
			<input type="text" class="user"name="user"/>
		</p>
		<p>
		<label class="teksts">Password:</label>
			<input type="password" class="pass"name="pass"/>
		</p>
			<input type="submit" class="btn" value="login"/>
		</p>
		
	</form>
</div>

<div id="register" >
<form class="frm" action="register.php" method="POST">
		<!--Ziņojums, ja nekorekti login dati-->
	
<span id="aizvertReg" onclick="xAizvert();" title="Aizvērt logs">&times;</span>

		<p>
		<label class="teksts">Username:</label>
			<input type="text" class="user"name="user"/>

		</p>
		<p>
		<label class="teksts">Password:</label>
			<input type="password" class="pass"name="pass1"/>
		</p>
		
			<button type="submit" class="btn" name="reg_user">Register</button>
		
		
	</form>
</div>



	
	<div id="Virsraksts">
	 <h1>Apraksts par spēli</h1>
	</div>
	<div class="apraksts">
			<p><br/>Spēle ir ļoti aizraujoša, laiks šajā spēlē pazūd nemanot un ir reizes, <br/>
			ka aizmirsti, kas pa dienu ir jo spēlē ir tik ļoti aizraujoša. Spēle nav <br/>
			tikai par šaušanu un mērķi kādu nogalināt, spēle ir par taktiku kā aizsargāt no<br/> 
			savu bāzi no citiem spēlētājiem un resursu vākšanu</p>
			</div>
			<div>
			<p>
				<iframe id="video" src="https://www.youtube.com/embed/7vvemwBzvM8"></iframe>
			</p>
			</div>
			
	</div>
	<button onclick="topFunction()" id="myBtn" title="Go to top">&#8682;</button>
	<script src="rust2JS.js"></script>
<script src="rustJS.js"></script>

</body>	
</html>