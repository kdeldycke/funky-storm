<?



//--------------------------------------------------------
// démarrage des sessions
//--------------------------------------------------------

  session_name('id');
  session_start();



//--------------------------------------------------------
// utilisateur enregistré ? == toutes les variables de sessions sont-elles enregistrées ?
//--------------------------------------------------------

  if (!session_is_registered('login') || !session_is_registered('password')) {
      session_destroy();
      header('location: '.home.'403.php');
  }


	
//--------------------------------------------------------
// déclaration de la zone privée
//--------------------------------------------------------

  $private = 1;



?>
