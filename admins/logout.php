<?



//--------------------------------------------------------
// Fonction de transition entre les pages avec suppression
// de la session et des cookies si on se trouve en lieu privé.
// (dans ce cas $lo=1).
//--------------------------------------------------------
	require('glob_var.php');

	session_name('id');  //on demarre une session. Si il y en avait une precedement, on la récupére, sinon, une nouvelle est créé
  session_start();  // démarrage de la session
  session_destroy(); // on detruit la session, quelle soi nouvelle ou pas
		
  //url par défaut: maison
  if (!isset($url))
	  $url = 'index.php';
	
	//si on va directement chez un membre, on conserve sa variable
	if(isset($member_name))
	  $url = $url.'?name='.$member_name;
	
	//suppression du referer car il contient l'ID
	header('Referer: ');
	
	// go to... $url
	header('location: '.home.$url);



?>