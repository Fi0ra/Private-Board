

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr"> 
<!-- initialisation habituelle d'une page xhtml -->
	<head>
		<!-- declaration du titre la page -->
		<title>Private Board</title>
		<!-- précision d l'encodage du type de page  -->
		<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8"/>
		<!-- mise en place du lien avec le fichier css -->
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.8.3.js"></script>
		
		

	<?php
		$url = $_SERVER['REQUEST_URI'];
		$url_egal = explode('=',$url);
		$nb_egal = sizeof($url_egal)-1;
		$url_slash = explode('/',$url);
		$nb_slash = sizeof($url_slash)-1;
			
			
		if(isset($_SESSION['login']))
		{
			
			if(detect_mobile($platform) == true)
			{
				echo '<script src="./script/iPhone_jaime.js" type="text/javascript" language="javascript"></script>';
				echo '<link rel="stylesheet" href="./style/style-iphone.css" type="text/css"/>';
			}
			else
			{
				echo '<script src="./script/jaime.js" type="text/javascript" language="javascript"></script>';
				$username = $connexion->quote($_SESSION['login']); 
				$resultats=$connexion->query("SELECT userstyle FROM users WHERE username = $username"); 
				$resultats->setFetchMode(PDO::FETCH_OBJ);
				$ligne = $resultats->fetch(); 
				echo '<link rel="stylesheet" href="./style/'.$ligne->userstyle.'" type="text/css"/>';
				$resultats->closeCursor();	
			}

		}
		else
		{
			echo '<link rel="stylesheet" href="./style/style3.css" type="text/css"/>';
			echo '<script src="./script/jaime.js" type="text/javascript" language="javascript"></script>';
		}
	?>		
	
		
	</head>
	<body>

	<div id="top">
	<?php
		if(isset($_SESSION['login']))
		{
			
			if(detect_mobile($platform) == true)
			{
				echo '
				<div class="left">
					<ul> 
				';	
				if($url_slash[$nb_slash] == "index.php"){echo '<li><a href="index.php" class="current">Accueil</a></li>';}else{echo '<li><a href="index.php">Accueil</a></li>';}
				if($url_slash[$nb_slash] == "requete.php"){echo '<li><a href="requete_iPhone.php" class="current">Requêtes</a></li>';}else{echo '<li><a href="requete_iPhone.php">Requêtes</a></li>';}
				echo '
					<li><a href="index_cat_iPhone.php">Catégories</a></li>
					<li><a href="connexion.php?action=logout">Déconnexion</a></li>
					</ul>
				</div>
				';
			}
			else
			{
				echo '
				<div class="left">
					<ul> 
				';	
				if($url_slash[$nb_slash] == "index.php"){echo '<li><a href="index.php" class="current">Accueil</a></li>';}else{echo '<li><a href="index.php">Accueil</a></li>';}
				if($url_slash[$nb_slash] == "requete.php"){echo '<li><a href="requete.php" class="current">Requêtes</a></li>';}else{echo '<li><a href="requete.php">Requêtes</a></li>';}
				echo '	
					</ul>		
				</div>	
				<div class="right">
					<ul>
				';
				
				if($url_slash[$nb_slash] == "option.php"){echo '<li><a href="option.php" class="current">Users</a></li>';}else{echo '<li><a href="option.php">Users</a></li>';}
				if($_SESSION['lvl']==0)
				{
					if($url_slash[$nb_slash] == "administration.php"){echo '<li><a href="administration.php" class="current">Admin</a></li>';}else{echo '<li><a href="administration.php">Admin</a></li>';}
				}
				echo '
					<li><a href="connexion.php?action=logout">Déconnexion</a></li>
					</ul>
				</div>
				';
			}
		}
	?>
	</div>
