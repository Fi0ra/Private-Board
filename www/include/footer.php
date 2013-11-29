

<?php

if(detect_mobile($platform) == true)
{	
?>

<div id="footer">
	<div class="footer">
		<center>Private Board <font color="#fff">V3</font> Créé par <a href="http://yourcreation.fr">Yourcreation.fr</a> Aider au dev : <a href="./don.php">ici</a> </center>
	</div>
</div>

</body>
</html>

<?php 
}
else
{
?>
<div id="footer-left">
	<div class="footer-left">
		<?php echo '<font size="2">Espace : '.convertFileSize(disk_total_space($partition)-disk_free_space($partition)).' / '.convertFileSize(disk_total_space($partition)). '</font>'; ?>
	</div>
</div>

	
	
<div id="footer-right">
	<div class="footer-right">
		<center>Private Board <font color="#fff">V3</font> Créé par <a href="http://yourcreation.fr">Yourcreation.fr</a> Aider au dev : <a href="./don.php">ici</a> </center>
	</div>
</div>

</body>
</html>

<?php
}
    $connexion = null;
?>