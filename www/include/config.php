<?php

//----------------------------------------------------
// lien vers le dossier comprenant les torrents
//----------------------------------------------------
// chemin entre le dossier private_board et votre / vos dossier(s) de torrent , et nom du / des dossiers de torrents
// ******************************************
// * --- exemple pour une architecture :    * 
// * folder : www/sites/private_board       *
// * folder : www/torrents1                 *
// * folder : www/torrents2                 *
// * --- la configuration sera :            *
// * $way="../..";                          *
// * $name=array("/torrents1","torrents2"); *
// ******************************************
// * --- exemple pour une architecture :    * 
// * folder : www/private_board             *
// * folder : www/torrent                   *
// * --- la configuration sera :            *
// * $way="..";                             *
// * $name=array("/torrents1");             *
// ******************************************
$way="..";
$name=array("/torrents");


//----------------------------------------------------
// url réel vers votre dossier de torrents
//----------------------------------------------------
$path_absolu="http://x.x.x.x";


//----------------------------------------------------
// Partition ou se situe les fichiers "/", "/home","/usr", "/var"
//----------------------------------------------------
$partition = "/var";


//----------------------------------------------------
// Connexion à la base de donnée
//----------------------------------------------------
$host = "localhost";
$dbname = "private_board";
$dbid = "user";
$dbmdp = "mdp";
// on effectue la connexion
try
{
    $connexion = new PDO('mysql:host='.$host.';dbname='.$dbname, $dbid, $dbmdp);
}
catch(Exception $e)
{
    echo 'Erreur : '.$e->getMessage().'<br />';
    echo 'N° : '.$e->getCode();
} 



//----------------------------------------------------
// Autres configurations
//----------------------------------------------------
// durée des sessions en seconde
$time_session = 36000;
// Limitation d'ip (on limite le nombre d'ip différente par user au cours des dernière 24h à un nombre maximum)
$nb_ip_day = 3; 
//----------------------------------------------------
?>