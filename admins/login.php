<?

//------------------------------------------------------------------------------
// Script vérifiant l'existance de l'utilisateur et autorisant ce dernier à
// parcourir les pages protogée via une session.
//------------------------------------------------------------------------------

require_once('config.inc.php');


// récupération des variables postées
$user_login 		= addslashes($_POST['user_login']);
$user_password	= md5($_POST['user_password']);


if ($user_login=='' || $user_password=='')              			
		header('location: '.home.'admins/index.php?e=1');   

else {
		$connect = mysql_connect($cfg_Host, $cfg_User, $cfg_Pass)
			or die($sql_die_msg);

    $db = mysql_select_db($users_base)
			or die($sql_die_msg);
        
		$sql  = "SELECT id,login,password,user_page,guestbook_admin,questions,questions_admin,news_writer,news_admin ";
		$sql .= "FROM `$users_table` ";
		$sql .= "WHERE `login`=`$user_login` AND `password`=`$user_password`";

		$result = mysql_query($sql);
    
    mysql_close($connect);
    
		if(mysql_num_rows($result) == 0)
		    header('location: '.home.'admins/index.php?e=2');

		else {
				$user_param = mysql_fetch_array($result);

        // formatage données pour enregistrement
        $user_id 			    = $user_param["id"];
        $user_page				= $user_param["user_page"];
        $guestbook_admin	= $user_param["guestbook_admin"];
        $questions				= $user_param["questions"];
        $questions_admin	= $user_param["questions_admin"];
        $news_writer			= $user_param["news_writer"];
        $news_admin				= $user_param["news_admin"];
        
        // enregistrement de la session
        session_name('id');
        session_start();
				session_register("user_id");
        session_register("user_login");
        session_register("user_password");
        session_register("user_page");
        session_register("guestbook_admin");
        session_register("questions");
        session_register("questions_admin");
        session_register("news_writer");
        session_register("news_admin");
        
        unset($url_option);
        if(SID != '')              // si SID vide, transmition par cookie
            $url_option = '?'.SID;  // donc pas besoin de passage par url
            
        header('location: '.home.'admins/menu.php'.$url_option);
		}
}

?>
