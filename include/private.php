<?



//--------------------------------------------------------
// d�marrage des sessions
//--------------------------------------------------------

  session_name('id');
  session_start();



//--------------------------------------------------------
// utilisateur enregistr� ? == toutes les variables de sessions sont-elles enregistr�es ?
//--------------------------------------------------------

  if (!session_is_registered('login') || !session_is_registered('password')) {
      session_destroy();
      header('location: '.home.'403.php');
  }


	
//--------------------------------------------------------
// d�claration de la zone priv�e
//--------------------------------------------------------

  $private = 1;



?>
