<?

//------------------------------------------------------------------------------
// Ce script permet de se déconnecter propremment de l'espace restreint.
// La variable $url peut être passée en paramètre pour une redirection au sein
// du site.    
//------------------------------------------------------------------------------

require_once('config.inc.php');


session_name('id');
session_start();
session_destroy();
		
if(!isset($url))  $url = 'index.php'; 	//url par défaut: maison

header('Referer: ');		//suppression du referer car il contient l'ID
	
header('location: '.home.$url);
	
?>