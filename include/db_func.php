<?



//--------------------------------------------------------
// Fonction d'ouverture de connection à la base de donnée
//--------------------------------------------------------
//gérer les erreur ici avec arret du script si pb et affichage
//d'une page d'erreure appropié avec rediretion en header
//+log

  function db_connexion() {
	  $cfgHost  = "localhost";
		$cfgUser  = "root";
		$cfgPass  = "";		
		@mysql_connect($cfgHote, $cfgUser, $cfgPass)
		  or die('Erreur SQL !'.$sql.'<br>'.mysql_error());
  }



/* Guestbook config */		
	$guestbook_base  = "guest"; 	//configuration de la table du livre d'or
	$guestbook_table = "guestbook";  //don't forget to change guestbook.sql if you change this one

/* 10 last message on forum config */		
	$forum_base  = "Forums";
	$forum_table = "main_forum";

/* users config */
	 $users_base  = "web";
	 $users_table = "users";
	 
/* Livecounter config */
	 $livecounter_base  = "web";
	 $livecounter_table = "live_counter";

	
?>
