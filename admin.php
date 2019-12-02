<!DOCTYPE html>

<html>
<head>
	<title>RUST</title>
	<link rel="shortcut icon" type="image/x-icon" href="atteli/logo.png"/>
	<link rel="stylesheet" type="text/css" href="stils.css"/>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css"/>
</head>
<body>
<h1><img id="RustLogo" src="atteli/logo.png"></img></h1>
<ul>
<i class="fas fa-sign-out-alt" style="font-size:27px"onclick="document.getElementById('logins').style.display='block'"></i>
	<i class="fa fa-cogs" style="font-size:27px" onclick="paraditArticle1()"></i>
</ul>
<div class="robeza">

			<nav>
			<a href="admin.php"><button class="aktivaPoga">Home</button></a>
			<a href="https://rust.facepunch.com/blog/"><button class="poga">Update</button></a>
			
			
			<div class="apaksa">
			<a href="#"><button class="poga">Gallery</button></a>
			<div class="apaks-klases">
         <a href="GalleryA.php">Pictures</a>
		 <a href="GalleryA2.php">Video</a>
		 <a href="GalleryA3.php">Screenshots</a>
			</div>
			
			
			</div>
			<a href="https://rust.facepunch.com/changes/1"><button class="poga">Information</button></a>
			
			</nav>
			
			<hr id="linija1" />

<div id="logins" >
<form id="frm">
		<!--Ziņojums, ja nekorekti login dati-->
	<h1 id="logoutP">Vai tiešām izlogoties ?</h1>
			<input type="button" id="butt1" value="Logout" onclick="window.location.href='rust.php'" />
	<input type="button" id="butt2" value="Cancel" onclick="document.getElementById('logins').style.display='none'" />
			
			
		
		
	</form>
</div>

<div id="sanuNavigacija">
		<a onclick="document.getElementById('legacyRustSaturs').style.display='block'" id="legacyRustBut">Rust (legacy)</a>
		<a onclick="document.getElementById('newRustSaturs').style.display='block'" id="newRustBut">Rust</a>
	</div>
	
	
	<div id="legacyRustSaturs">

		<div class="legacySaturs">
	<span class="aizvert" onclick="document.getElementById('legacyRustSaturs').style.display='none';" title="Aizvērt logs">&times;</span>	
			<div class="legacyGalvene">
				<h1>Rust Legacy</h1>
			</div>
			
			<div class="legacyKermenis">
			
				<a>Rust (Legacy) is a 2013's (and 2014's) old version of the game.<br/> The game was officially released on December 11th, 2013 by Facepunch Studios.
				<br/>Sadly, Rust Legacy did eventually lose popularity and was eventually removed in Devblog 139, 8th December 2016.<br/>
				Because the game was hosted externally this meant that players could no longer play the game officially after it was removed.</a>
			</div>
			<div >
			<iframe id="legacyVid" src="https://www.youtube.com/embed/LD1175DIBao"></iframe>
			</div>
			
		</div>
	</div>
	
	<div id="newRustSaturs">
		<div class="newRustSaturs">
	<span class="aizvert" onclick="document.getElementById('newRustSaturs').style.display='none';" title="Aizvērt logs">&times;</span>
			<div class="newRustGalvene">
				<h1>Rust (new)</h1>
			</div>
			<div class="newRustKermenis">
				<a>Rust (Legacy) is a 2013's (and 2014's) old version of the game.<br/> The game was officially released on December 11th, 2013 by Facepunch Studios.
				<br/>Sadly, Rust Legacy did eventually lose popularity and was eventually removed in Devblog 139, 8th December 2016.<br/>
				Because the game was hosted externally this meant that players could no longer play the game officially after it was removed.</a>
			</div>
			<div >
			<img id="attels" src="atteli/compare.jpg"></img>
			</div>
			
		</div>
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



			<article id="article1">
<h1 id="Lietotaji"><b>Lietotaju saraksts</b></h1>
	
	<!--SELECT-->
	<?php 
	require("liet.php");
	?>
	<h1 id="EDIT">Lietotaju Rediģēšāna</h1>
	<script>
		function ievietots(forma){
			
			form.submit();
		}
	</script>
	<form action="pievienot.php" method="post">
		<input class="ievadesLauksL" name="vardaIevade" type="text" 
		maxlength="20" value="lietotajVards" onfocus="this.value='';"/>
		
		<input class="ievadesLauksL" name="parolesIevade" type="text" 
		maxlength="20" value="Parole" onfocus="this.value='';"/>
		
		<input class="ievadesLauksL" name="admins" 
		type="number" value="1" min="1" max="2" onfocus="this.value='0';"/>
		
		<input class="pogasL" name="pievienot" type="submit" 
		value="Pievienot" onClick="ievietots(this.forma)" />
	</form>
	<script>
	function izdzest(form){
		form.submit();
	}
	</script>
	<form action="dzest.php" method="POST">
		<input class="ievadesLauksL1" id="dzestID" name="dzestLietotaju" type="number" value="1" min="1" onfocus="this.value='1';"/>
		<input class="pogasL1" name="dzest" type="submit" value="DELETE" onclick="izdzest(this.form)"/>
	</form>
	<script>
	function uzlabot(forma){
			form.submit();
		}
	</script>
	
	<form action="updateUser.php" method="POST">
		<input class="ievadesLauksL2" id="vLabots" name="vardsLabojums" type="text" 
		value="LietotajVards" maxlength="12" onfocus="this.value='';"/>
		
		<input class="ievadesLauksL" id="pLabots" name="parolesLabojums" type="text" 
		value="Parole" maxlength="12" onfocus="this.value='';"/>
		
		<input class="ievadesLauksL" name="adminsLabojums" 
		type="number" value="1" min="1" max="2" onfocus="this.value='0';"/>
		
		<input class="pogasL" name="update" type="submit" value="UPDATE"
		onclick="uzlabot(this.form)"/>
	</form>
	</article>




	</div>
	<button onclick="topFunction()" id="myBtn" title="Go to top">&#8682;</button>
	
<script src="rustJS.js"></script>
<script src="javaScript.js"></script>

</body>	
</html>