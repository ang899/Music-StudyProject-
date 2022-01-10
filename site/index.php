<?php
	require_once('connection.php');

	$query = $connection -> query ("SELECT album.id,album.title, album.cover,album.rating, artist.id, artist.name FROM album JOIN artist ON album.id_artist=artist.id");
?>

<!DOCTYPE html>
	<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Music</title>
		<meta charset="utf-8">
		<link href="css/style.css" rel="stylesheet">
	</head>
	<body class="w90">
		<header></header>
		<h1>Музыка</h1>

		<div>
			<input id="find-field" type="text" placeholder="Поиск"></input>
		</div>
		<div id="albums" class="albums">
			<?php while ($row=$query ->fetch_assoc())
				{?>
			<div class="album">
				<div class="album-image">
					<a href="album.php?id=<?php echo $row[id];?>">
						<img src="img/covers/<?php echo $row[cover];?>"/>
					</a>
				</div>
				<div class ="rating r<?php echo $row[rating];?>"> 

				</div>
				<h3>
					<a href="album.php?id=<?php echo $row[id];?>"><?php echo $row[title];?></a>
				</h3>
				<h4>
					<a href="#"><?php echo $row[name];?></a>
				</h4>

			</div>
			 <?php } ?>
			
		</div>
	
	</body>
	</html>
