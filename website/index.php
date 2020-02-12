<?php
$page = (isset($_GET['loadpage']) && $_GET['loadpage'] != '') ? $_GET['loadpage'] : '';
?>
<!DOCTYPE html>
<html>
<head>
<title>Reefer's Cafe</title>
<link href="https://fonts.googleapis.com/css?family=Lemonada|Montserrat|Oswald&display=swap" rel="stylesheet">
 <link rel="stylesheet" type="text/css" href="css/css.css">
  <link rel="stylesheet" type="text/css" href="css/css2.css">

</head>
<body>
<div id="container">
	<div id="header">
		<div id="logo"></div>
		<div id="shop-name"><h2>Reefer's Cafe</h2></div>
		<div id="navigation">
			<ul>
				<li><a href="index.php?loadpage=home">Home</a></li>
				<li><a href="index.php?loadpage=menu">Menu</a></li>
				<li><a href="index.php?loadpage=story">Stories</a></li>
				<li><a href="index.php?loadpage=about">About</a></li>
			</ul>
		</div>
	</div>
	<div id="content">
	<?php
		switch($page){
			case 'home': 
				require_once 'home.php';
				break;
			;
			case 'about': 
				require_once 'about.php';
				break;
			;
			case 'menu': 
				require_once 'menu.php';
				break;
			;
						case 'story': 
				require_once 'story.php';
				break;
			;
		}
	?>
	</div>
</div>
</body>
</html>
