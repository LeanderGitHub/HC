<!DOCTYPE HTML>
<html>
<head>
<?php
	include("../headSportarten.php");
?>
<!--<script src="Fussball.js"></script>-->
</head>
<body onload="" onscroll="LOAD_TX();document.getElementById('Unterlinks').style.top= window.innerHeight * 2 + 'px'" onresize="LOAD_TX();RESIZE()" style="width:100%;overflow-x:hidden;margin:0">
	<div style="background-image: radial-gradient(#232a34 40%,#3d567c 150%);width:100%;position:fixed;z-index:-5;top:0" id="background">
	</div>
	<div style="height:100%;overflow:hidden;margin-top:0px;position:fixed;width: 100%" id="Background1_div"><img src="Bilder/Banner2.jpg" id="Background1" style="width:100%;opacity:0.7;position:relative;top: -250px;min-width: 900px"></div>
	<div id="Background1_div2" style="width: 100%"></div>
	<?php
		include("../menuSportarten.php");
	?>
	
		<div id="Pfad"><span>Du befindest dich hier: </span><br> <a href="Allgemein.php">Schwimmen</a> - Technik</div>
		<div id="TEXT">
      <h3>Grundtechniken im Schwimmen:</h3>
      <h4>Kraul</h4>
	  <iframe width="560" height="315" src="https://www.youtube.com/embed/gLRiOss98FY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      <h4>Brust</h4>
	  <iframe width="560" height="315" src="https://www.youtube.com/embed/K9MY0hhpfzc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      <h4>Kopfsprung</h4>
	  <iframe width="560" height="315" src="https://www.youtube.com/embed/Qh96r6dWz7Y" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
				<?php
					include("../footerSportarten.php")
				 ?>
		<script> window.onload = function load(){PAGELOAD()}</script>
	</body>
</html>