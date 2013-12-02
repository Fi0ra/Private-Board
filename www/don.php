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


include("./include/function.php");
include("./include/header.php");
include("./include/menu_option.php");


?>


<div id="content">
	<div class="text">
		<span>A quoi sert un don ? </span>
		<br /><br />
		Les dons sont uniquement une façon de remercier ou d'investir pour plus de capacité.
		<br /><br />
		<ul>
		<li>Le serveur me coute 15€ par mois pour 500go</li>
		<li>Passer à 1000go reviendrait à 25€/mois</li>
		<li>Passer à 2500go reviendrait à 35€ de frais d'installation puis 25€/mois</li>
		</ul>
		
	</div>
	<p>
		<center>
			<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
		<input type="hidden" name="cmd" value="_s-xclick">
		<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
		">
		<input type="image" src="https://www.paypalobjects.com/fr_FR/FR/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - la solution de paiement en ligne la plus simple et la plus sécurisée !">
		<img alt="" border="0" src="https://www.paypalobjects.com/fr_FR/i/scr/pixel.gif" width="1" height="1">
		</form>
		</center>
		<br />
		<br />

	</p>
</div>

<?php
	include("./include/footer.php");
?>