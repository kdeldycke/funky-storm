<?

//------------------------------------------------------------------------------
// Script vérifiant l'existance de l'utilisateur et autorisant ce dernier à
// parcourir les pages protogée via une session.
//------------------------------------------------------------------------------

require_once('config.inc.php');


// récupération des variables postées
$user_login 	= "qkjdshf";
$user_password	= "password";

        // formatage données pour enregistrement
        $user_id 			= 1;
        $user_name			= "webmaster";
        $user_page			= "http://qsdfqdsf.com";
        $guestbook_admin	= 'N';
        $questions			= 'N';
        $questions_admin	= 'N';
        $news_writer		= 'Y';
        $news_admin			= 'N';
        
        // enregistrement de la session
        session_name	('id');
        session_start	();
			session_register("user_id");
        session_register("user_login");
        session_register("user_password");
			session_register("user_name");
        session_register("user_page");
        session_register("guestbook_admin");
        session_register("questions");
        session_register("questions_admin");
        session_register("news_writer");
        session_register("news_admin");
        
        unset($url_option);
        if (SID != '')              // si SID vide, transmition par cookie
        	$url_option = '?'.SID;  // donc pas besoin de passage par url
            
        header('location: '.home.'admins/menu.php'.$url_option);

?>
