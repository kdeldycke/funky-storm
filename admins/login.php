<?

	require('glob_var.php');

	
//--------------------------------------------------------
// association login/password/id_membre
//--------------------------------------------------------
  $auth_table["webmaster"] = array("funkypawa", "webmaster");
  $auth_table["vincent"] = array("vi", "vincent");
  $auth_table["maxence"] = array("ma", "maxence");
  $auth_table["sylvain"] = array("ma", "sylvain");
	$auth_table["guillaume"] = array("ma", "guillaume");
	$auth_table["emeric"] = array("ma", "emeric");
	

//--------------------------------------------------------
// v�rifications d'usage avant cr�ation de la session
//--------------------------------------------------------
  if ($user_login=='' || $user_password=='')              // champ(s) vide(s) ?
      header('location: '.home.'admins/index.php?etat=2');               // alors retour � la case d�part
  else {
      if ($auth_table[$user_login][0] <> $user_password)     // utilisateur enregistr� ?
          header('location: '.home.'admins/index.php?etat=3');           // retour � la case d�part
      else {                                              // utilisateur en r�gle, d�marrage d'une session
          session_name('id');
          session_start();
          session_register("user_login");
          session_register("user_password");
					$name = $auth_table[$user_login][1];
					session_register("name");
          if (SID != '')                                  // si SID est vide, la transmition s'effectue par cookie
              $url_option = '?'.SID;                      // donc pas besoin de passage par url
          header('location: '.home.'admins/menu.php'.$url_option);         // affichage de la page � acc�s restreint
      }
  }

	
?>

