<?


/* maison */
	define (home, "http://127.0.0.1/funky/");

	
/* Connexion base de données */
	$cfg_Host = 'localhost';
	$cfg_User = 'root';
  $cfg_Pass = '';		

	
/* message d'erreur à afficher si connection à base de données impossible */
	$sql_die_msg = 'Erreur SQL !'.$sql.'<br>'.mysql_error();

	
/* users config */
	$users_base  = "funky";
	$users_table = "users";


/* news config */
	$news_base			= $users_base;
	$news_table			= "news";
	$nbNews				= 5;	 				// Nbre de news à afficher
	$news_pict_path		= "data/news_pics/";	// répertoire ou sont stockées les images des news
  $news_pict_max_weight	= 30 * 1024;			// taille maximale de l'illustration en octets

	
/* Guestbook config */		
	$guestbook_base  = $users_base; 	//configuration de la table du livre d'or
	$guestbook_table = "guestbook";	//don't forget to change guestbook.sql if you change this one
 
 
/* Livecounter config */
	$livecounter_base  = $users_base;
	$livecounter_table = "live_counter";
  $timeout 		 	 = 120;	 			 			// Temps en secondes au bout duquel un utilisateur est considéré déconnecté

	
/* 10 last message on forum config */		
	$forum_base  = $users_base;
	$forum_table = "main_forum";
	$nbMsgForum  = 10;	 				// Nbre de discussions à afficher
	$cfgRep      = "forum/";
	$cfgRead     = "read.php";
	
	
?>
