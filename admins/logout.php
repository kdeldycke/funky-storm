<?

//------------------------------------------------------------------------------
// Ce script permet de se d�connecter propremment de l'espace restreint.
// La variable $url peut �tre pass�e en param�tre pour une redirection au sein
// du site.    
//------------------------------------------------------------------------------

require_once('config.inc.php');


session_name('id');
session_start();
session_destroy();
		
if(!isset($url))  $url = 'index.php'; 	//url par d�faut: maison

header('Referer: ');		//suppression du referer car il contient l'ID
	
header('location: '.home.$url);
	
?>