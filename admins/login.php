<?

	require('glob_var.php');
	require('db_func.php');

	
//--------------------------------------------------------
// vérifications d'usage avant création de la session
//--------------------------------------------------------

  if ($login=='' || $password=='')              // champ(s) vide(s) ?
      header('location: '.home.'admins/index.php?e=1');               // alors retour à la case départ
			
  else {
	
			db_connexion(); //fonction de gestion de la connection à la base de données

			$sql  = "SELECT id,name,login,password,guestbook_admin,qa_form ";
			$sql .= "FROM ".$users_table." ";
			$sql .= "WHERE login = '$login' AND password = '$password'";

			$result = mysql_db_query($users_base, $sql);

			mysql_close();
	
      if (mysql_num_rows($result) == 0)     // utilisateur enregistré ?
          header('location: '.home.'admins/index.php?e=2');           // retour à la case départ
					
      else {                                              // utilisateur en régle, démarrage d'une session
					$user_param = mysql_fetch_array($result);
          session_name('id');
          session_start();
					$user_id = $user_param[0];
					session_register("user_id");
          session_register("login");
          session_register("password");
					$name = $user_param[1]; // enregistrement du nom de l'utilisateur
					session_register("name");
					$guestbook_admin = $user_param[4]; // enregistrement des droits de modération
					session_register("guestbook_admin");
					$qa_form = $user_param[5]; // enregistrement des droits de modération
					session_register("qa_form");
          if (SID != '')                                  // si SID est vide, la transmition s'effectue par cookie
              $url_option = '?'.SID;                      // donc pas besoin de passage par url
          header('location: '.home.'admins/menu.php'.$url_option);         // affichage de la page à accès restreint
      }
			
  }

	
?>
