<?

	require('glob_var.php');
	require('db_func.php');

	
//--------------------------------------------------------
// v�rifications d'usage avant cr�ation de la session
//--------------------------------------------------------

  if ($login=='' || $password=='')              // champ(s) vide(s) ?
      header('location: '.home.'admins/index.php?e=1');               // alors retour � la case d�part
			
  else {
	
			db_connexion(); //fonction de gestion de la connection � la base de donn�es

			$sql  = "SELECT id,name,login,password,guestbook_admin,qa_form ";
			$sql .= "FROM ".$users_table." ";
			$sql .= "WHERE login = '$login' AND password = '$password'";

			$result = mysql_db_query($users_base, $sql);

			mysql_close();
	
      if (mysql_num_rows($result) == 0)     // utilisateur enregistr� ?
          header('location: '.home.'admins/index.php?e=2');           // retour � la case d�part
					
      else {                                              // utilisateur en r�gle, d�marrage d'une session
					$user_param = mysql_fetch_array($result);
          session_name('id');
          session_start();
					$user_id = $user_param[0];
					session_register("user_id");
          session_register("login");
          session_register("password");
					$name = $user_param[1]; // enregistrement du nom de l'utilisateur
					session_register("name");
					$guestbook_admin = $user_param[4]; // enregistrement des droits de mod�ration
					session_register("guestbook_admin");
					$qa_form = $user_param[5]; // enregistrement des droits de mod�ration
					session_register("qa_form");
          if (SID != '')                                  // si SID est vide, la transmition s'effectue par cookie
              $url_option = '?'.SID;                      // donc pas besoin de passage par url
          header('location: '.home.'admins/menu.php'.$url_option);         // affichage de la page � acc�s restreint
      }
			
  }

	
?>
