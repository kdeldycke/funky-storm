<?

//------------------------------------------------------------------------------
// Ce script garde l'aspect privé d'une page avec vérification de
// l'authentification de l'utilisateur 
//------------------------------------------------------------------------------

require_once('config.inc.php');


session_name('id');
session_start();

// utilisateur enregistré ? == toutes les variables de sessions existent-elles ?
if(!session_is_registered('user_login') || !session_is_registered('user_password') || !session_is_registered('user_id')) {
		session_destroy();
    header('location: '.home.'403.php');
}

?>
