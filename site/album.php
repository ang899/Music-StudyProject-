<?php
	require_once('connection.php');

	  if(isset($_GET[id]))
    	{
        	$id_a = htmlspecialchars($_GET[id]);


			$query = $connection -> query ("SELECT album.id,album.title, album.cover, artist.name, artist.discription FROM album JOIN artist ON album.id_artist = artist.id WHERE album.id =$id_a");

			($row=$query->fetch_assoc());
		}
?>

<!DOCTYPE html>
	<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Album=title</title>
		<meta charset="utf-8">
		<link href="css/style.css" rel="stylesheet">

<script src="averColor.js"></script>

	</head>
	<body class="wFull">
<div id="cover-bg">
	<img id="cover" src="img/covers/<?php echo $row[cover];?>"/>
	<h2 class="artist-name"><?php echo $row[name];?></h2>
	<img class="arrow" src="img/angle-down-solid.png"/>
</div>
<div class="w600">
<h1><?php echo $row[title];?></h1>
<p><?php echo $row[discription];?></p>
</div>
	</body>
	</html>
