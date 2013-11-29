<?php session_start();	

/**********************************************
************* By YourCreation.fr **************
***********************************************
***********************************************
* Nous ne sommes par esponsables des fichiers *
**** que vous partagez via notre script PB ****
***********************************************/
// ------------------------------
// include configuration
// ------------------------------

include("./include/config.php");

// ------------------------------
// Vérif connexion
// ------------------------------

if(time()-($_SESSION['Date']) > $time_session )
{
	session_destroy();
	header ('Location: ./connexion.php');
	break;
}		
if (!isset($_SESSION['login']))
{
	header ('Location: ./connexion.php');
	break;
}


$action = (isset($_GET['action']))?htmlspecialchars($_GET['action']):'';

switch($action)
{
    case "style":
		$style = $_POST['style'];
			switch ($style) {
				case 3:
					$select="style3.css";
					$username = $connexion->quote($_SESSION['login']); 
					$selection = $connexion->quote($select); 
					$count = $connexion->exec("UPDATE users SET userstyle = $selection WHERE username = $username");
				break;
				case 4:
					$select="style4.css";
					$username = $connexion->quote($_SESSION['login']); 
					$selection = $connexion->quote($select); 
					$count = $connexion->exec("UPDATE users SET userstyle = $selection WHERE username = $username");
				break;
				case 5:
					$select="style5.css";
					$username = $connexion->quote($_SESSION['login']); 
					$selection = $connexion->quote($select); 
					$count = $connexion->exec("UPDATE users SET userstyle = $selection WHERE username = $username");
				break;
				case 6:
					$select="style6.css";
					$username = $connexion->quote($_SESSION['login']); 
					$selection = $connexion->quote($select); 
					$count = $connexion->exec("UPDATE users SET userstyle = $selection WHERE username = $username");
				break;
				case 7:
					$select="style7.css";
					$username = $connexion->quote($_SESSION['login']); 
					$selection = $connexion->quote($select); 
					$count = $connexion->exec("UPDATE users SET userstyle = $selection WHERE username = $username");
				break;
				case 8:
					$select="style8.css";
					$username = $connexion->quote($_SESSION['login']); 
					$selection = $connexion->quote($select); 
					$count = $connexion->exec("UPDATE users SET userstyle = $selection WHERE username = $username");
				break;
				case 9:
					$select="style9.css";
					$username = $connexion->quote($_SESSION['login']); 
					$selection = $connexion->quote($select); 
					$count = $connexion->exec("UPDATE users SET userstyle = $selection WHERE username = $username");
				break;
				case 10:
					$select="style10.css";
					$username = $connexion->quote($_SESSION['login']); 
					$selection = $connexion->quote($select); 
					$count = $connexion->exec("UPDATE users SET userstyle = $selection WHERE username = $username");
				break;
				default:
					$select="style3.css";
					$username = $connexion->quote($_SESSION['login']); 
					$selection = $connexion->quote($select); 
					$count = $connexion->exec("UPDATE users SET userstyle = $selection WHERE username = $username");
			}
			$connexion = null;
			header('Location: option.php');  
	break;
    case "stream":
		$stream = $_POST['stream'];
		switch ($stream) {
			case 0:
				$select="0";
				$username = $connexion->quote($_SESSION['login']); 
				$selection = $connexion->quote($select); 
				$count = $connexion->exec("UPDATE users SET userstream = $selection WHERE username = $username");
			break;
			case 1:
				$select="1";
				$username = $connexion->quote($_SESSION['login']); 
				$selection = $connexion->quote($select); 
				$count = $connexion->exec("UPDATE users SET userstream = $selection WHERE username = $username");
			break;
			default:
				$select="0";
				$username = $connexion->quote($_SESSION['login']); 
				$selection = $connexion->quote($select); 
				$count = $connexion->exec("UPDATE users SET userstream = $selection WHERE username = $username");
		}
		$connexion = null;
		header('Location: option.php');  
		break;
    default;
}


?>