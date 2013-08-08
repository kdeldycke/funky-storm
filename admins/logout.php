<?



//--------------------------------------------------------
// Fonction de transition entre les pages avec suppression
// de la session et des cookies si on se trouve en lieu priv�.
// (dans ce cas $lo=1).
//--------------------------------------------------------
	require('glob_var.php');

	session_name('id');  //on demarre une session. Si il y en avait une precedement, on la r�cup�re, sinon, une nouvelle est cr��
  session_start();  // d�marrage de la session
  session_destroy(); // on detruit la session, quelle soi nouvelle ou pas
		
  //url par d�faut: maison
  if (!isset($url))
	  $url = 'index.php';
	
	//suppression du referer car il contient l'ID
	header('Referer: ');
	
	// go to... $url
	header('location: '.home.$url);
	
?>