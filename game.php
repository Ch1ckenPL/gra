<?php
	session_start();

	//do każdej podstrony, która ma być widoczna dla zalogowanych
	if(!isset($_SESSION['logged']))
	{
		header('Location: index.php');
		exit();
	}
?>


<!DOCTYPE html>
<html lang="pl">

	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

		<link rel="stylesheet" href="css/style.css" type="text/css" />
		<link rel="stylesheet" href="css/fontello.css" type="text/css" />
		<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300i,400,400i,600,700&amp;subset=latin-ext" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700&amp;subset=latin-ext" rel="stylesheet"> 

		<meta description="" />
		<meta keyword="" />
		<meta author="" />

		<title>Gra polityczna</title>
		
	</head>
	<body>
		<div id="ingame-cointainer">

			<div id="ingame-header">

				<div id="ingame-datatime">

				</div>

				<div id="ingame-logo">
					<h1><a href="index.php">My<font color="#FFC300">Imperium</font>.com</a></h1>
				</div>

				<div id="ingame-nav">
					<ol>
						<li><a href="index.php" class="active">Home</a></li>
						<li><a href="#">Postać</a></li>
						<li><a href="#">Państwo</a></li>
						<li><a href="#">Władza</a></li>
						<li><a href="#">Partia</a></li>
						<li><a href="#">Market</a></li>
						<li><a href="#">Social</a></li>
					</ol>
				</div>
	
			</div>

			

			<div id="ingame-main-content">
				

				<div id="ingame-player-panel">
					<div id="player-name">
						<?php echo '<p>'.$_SESSION['name']." ".$_SESSION['surname']; ?>
					</div>
					<div id="player-panel-avatar">
						<img src="css/img/av-100x110.jpg" width="110px" height="120px" alt="">
					</div>

					<div id="player-panel-info">
						<div class="short-info">
							<img src="css/img/id-card.png" height="16px" width="16px" /> <?php echo '<p style="color:#9c7803;">' .$_SESSION['id']. "</p>"; ?>
						</div>
					</div>

					<div id="logout">
						<a href="logout.php"><input type="submit" name="logout" value="Wyloguj się"></a>
					</div>

				</div>

						
				<div id="ingame-country-news"></div>
				<div id="ingame-world-news"></div>
				<div id="ingame-short-birdie"></div>


			</div>




			
		</div>
	</body>
</html>

