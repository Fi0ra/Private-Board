Création YourCreation.fr

Nous serrons reconnaissant envers les moindres remerciements / dons pour ce projet. 

-------------------------------------------------------------------------------------

***** Requis : 

	1/ Un serveur web et mysql ok

	2/ que les fichiers que vous souhaitez affichés soit situés dans un dossier sur ce serveur web dans le www ou ailleurs en effectuant un lien symbolique ( ln -s /home/pseudo/folder1 /var/www/folder1 )

	3/ que le site web (situé dans le dossier www), une fois décompressé soit situé n'importe ou sur le même serveur web, dans le www du serveur (mettez le dans un dossier à part nommé comme vous le souhaitez)

	4/ créer une base de donné et y importer le fichier "bdd.sql"
		
-------------------------------------------------------------------------------------

***** Installation : 


Une fois cela fait, éditez le fichier "./inlude/config.php" dans le site web que je viens de vous fournir. Vous devez impérativement éditer les trois variables $way $name $path_absolu

	// chemin entre le dossier private_board et votre / vos dossier(s) de fichiers , et nom du / des dossiers de fichiers
	// ******************************************
	// * --- exemple pour une architecture :    * 
	// * folder : www/sites/private_board       *
	// * folder : www/folder1                   *
	// * folder : www/folder2                   *
	// * --- la configuration sera :            *
	// * $way="../..";                          *
	// * $name=array("/folder1","folder2");     *
	// ******************************************
	// * --- exemple pour une architecture :    * 
	// * folder : www/private_board             *
	// * folder : www/folder1                   *
	// * --- la configuration sera :            *
	// * $way="..";                             *
	// * $name=array("/folder1");               *
	// ******************************************
	$way="..";
	$name=array("/folder1");


	//----------------------------------------------------
	// url réel vers votre dossier de torrents
	//----------------------------------------------------
	$path_absolu="http://x.x.x.x";


** connexion à la bdd crée 
		
	Toujours dans le fichier "./inlude/config.php", éditez les variables de connexion à la bdd

	//----------------------------------------------------
	// Connexion à la base de donnée
	//----------------------------------------------------
	$host = "localhost"; // host
	$dbname = "private_board"; // nom de la base de donné
	$dbid = "user"; // user de connexion à la db
	$dbmdp = "mdp"; // mot de pass

-------------------------------------------------------------------------------------

***** Rendez vous sur le site, connectez vous avec les id "admin" mdp "admin", Enjoy ;) ! pensez à créer un nouvel utilisateur admin et à supprimer celui par defaut.

------------------------
------------------------
