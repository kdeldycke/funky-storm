<?

//------------------------------------------------------------------------------
// Ce script formate les données relatives à une news, les vérifie et les
// ajoute dans la base de données ou retourne le formulaire selon les cas.
//------------------------------------------------------------------------------

require_once('config.inc.php');
//require_once('private_keeper.php');

function rand_str($n) {
	for($i=0; $i<26; $i++) $char[] = chr(97 + $i);  
  for($i=0; $i<10; $i++) $char[] = "$i";
	srand((float)microtime()); //initialisation de rand
	for($i=0; $i<$n; $i++)
  	  $ch .= $char[array_rand($char)];
  return $ch;
}



// création de son nom au format 8+3
settype($pict_id, string);
		$news_pict_file = str_repeat("0", 8 - strlen($pict_id)).$pict_id;

		if($news_pict_del) {
       	unlink($news_pict_path.$news_pict_file.'.jpg');
    		unlink($news_pict_path.$news_pict_file.'.png');
    		unlink($news_pict_path.$news_pict_file.'.gif');


  //upload de l'image
	if(($dl_image=='none') || ($dl_image_size>($news_pict_max_weight*1024)))  // image trop grosse ? = > 30ko
	 	$erreur = 1;
	else if($dl_image_size == 0)  //si le fichier est inaccessible
	  $erreur = 2;
	else {    //image ok
	  $dest_path = $news_pict_path.$news_pict_file.'.jpg'; // chemin du fichier 
	  if(!copy($dl_image, $dest_path)) //copy de l'image grand format vers sa destination finale et sinon
	    $erreur = 3; //pb, image pas passée
	  else {
	    //vérifier les dimension de l'image et le type
	    $dim = getimagesize($dest_path);
		  if($dim[2]!=2)
	 		  $erreur = 4;		
	    else if(($dim[0]>200) || ($dim[1]>200)) {
	      $erreur = 5; //pb, image trop grosse
	 	    unlink($dest_path); //on supprime l'image
		  }
 	  }
	}




// fonction qui formate un texte pour une utilisation dans une base de données
function text_check(&$text) {
  	// remplacement des retours chariots par <br> en fonction de l'OS
		$text = str_replace(chr(13).chr(10), "<br>", $text); 	// "\r\n" = windows
 		$text = str_replace(chr(13), "<br>", $text); 			// "\r" = mac/os
 		$text = str_replace(chr(10), "<br>", $text); 			// "\n" = unix
    
		// on supprimer les 32 premiers caractères non imprimables de le table ASCII
		$text = preg_replace("/\\x0|[\x01-\x1f]/U", "", $text);
    
		// conversion <br> -> \n
		$text = str_replace("<br>", "\n", $text);
    
  	// on supprime les espaces de debut et fin
  	$text = trim($text);
    
  	// on ajoute des slash
  	$text = addslashes($text);
}


// fonction qui vérifie l'illustration, la download, lui formate son nom et/ou la supprime
function pict_add($pict_id) {
		// création de son nom au format 8+3
		settype($pict_id, string);
		$news_pict_file = str_repeat("0", 8 - strlen($pict_id)).$pict_id;

		if($news_pict_del) {
       	unlink($news_pict_path.$news_pict_file.'.jpg');
    		unlink($news_pict_path.$news_pict_file.'.png');
       	unlink($news_pict_path.$news_pict_file.'.gif');

  //upload de l'image
	if(($dl_image=='none') || ($dl_image_size>($news_pict_max_weight*1024)))  // image trop grosse ? = > 30ko
	 	$erreur = 1;
	else if($dl_image_size == 0)  //si le fichier est inaccessible
	  $erreur = 2;
	else {    //image ok
	  $dest_path = $news_pict_path.$news_file.'.jpg'; // chemin du fichier 
	  if(!copy($dl_image, $dest_path)) //copy de l'image grand format vers sa destination finale et sinon
	    $erreur = 3; //pb, image pas passée
	  else {
	    //vérifier les dimension de l'image et le type
	    $dim = getimagesize($dest_path);
		  if($dim[2]!=2)
	 		  $erreur = 4;		
	    else if(($dim[0]>200) || ($dim[1]>200)) {
	      $erreur = 5; //pb, image trop grosse
	 	    unlink($dest_path); //on supprime l'image
		  }
 	  }
	}

}


// vérification des droits d'utilisation de cette partie
if($news_writer != 'Y' && $news_admin != 'Y')
		header('location: '.home.'admins/menu.php');
 

// on formate le texte pour insersion dans la base de données
text_check($news_title);
text_check($news_sign);
text_check($news_text);    
   

// vérification de la validité des infos
if(empty($news_title)) 	$e = 1;
if(empty($news_text))	$e = 2;
if(isset($e)) {
// envoyer ici les varialbes par post
 	  header('location: '.home.'admins/news_form.php?'.SID.'&e='.$e);
}

if(empty($news_sign))
		$news_sign = $user_name;


// contenu texte parfait, connexion à la base
$connect = mysql_connect($cfg_Host, $cfg_User, $cfg_Pass)
		or die($sql_die_msg);

$db = mysql_select_db($news_base)
		or die($sql_die_msg);

    
////////////////////////////

    
if($news_pict_browse == 'none')
		$pb = "ton image ne répond pas aux critères de beauté d'une image. Elle est trop grosse !";
else if($news_pict_browse_size == 0)
	  $pb = "fichier inacessible";
else if($news_pict_browse_size > $news_pict_max_weight)
	  $pb = "fichier trop lourd";
else {    //image ok
		$news_pict_name_tmp = $news_pict_browse_name.'.tmp'; 				// nom temporaire de l'illustration
	  if(!copy($news_pict_browse, $news_pict_path.$news_pict_name_tmp))	// copie de l'image vers sa destination finale
		  	$pb = "impossible de copier l'image $news_pict_browse vers $news_pict_path$news_pict_name";
		else {
      	//gerer la detection des types de fichiers avant download
 		}
}
	
	if($pb != '')
	  $url_opt = '&pb='.$pb;
  header('location: '.home.'admins/menu.php?'.SID.$url_opt); 	//retour espace perso

/*
// vérifie que l'utilisateur actuel est bien l'auteur de la news si on est dans le cas d'une modif
if(isset($news_id)) {
		$sql  = "SELECT COUNT(id),pict_name ";
		$sql .= "FROM `$news_table` ";
		$sql .= "WHERE `id`='$news_id'";
   	// si l'ultilisateur n'est pas admin, besoin de vérifier qu'il est bien l'auteur de sa news
    if($news_admin != 'Y') $sql .= " AND `author_id`='$user_id'";
		
    $result = mysql_fetch_array(mysql_query($sql));

    if($result[0] == 1) {		// utilisateur autorisé à modifier ses news
        pict_add($news_id);

			$sql2  = "UPDATE `$news_table` ";
        $sql2 .= "SET `title`='$news_title', `text`='$news_text', `author_sign`='$news_sign', `pict_name`='$news_pict_name' ";
        $sql2 .= "WHERE `id`='$news_id'";
        
 			mysql_query($sql2);
        
    } else;
//    	mechant !: il a tenter de modifier une ,news alors qu'il na pas le droit !

} else {  // ajout d'une nouvelle news
		// formatage du nom de l'illustration
    $news_pict_name_tmp

		$sql  = "INSERT INTO `$news_table` ";
		$sql .= "(`id`,`title`,`text`,`author_id`,`author_sign`,`post_date`,`pict_name`,`show`) ";
		$sql .= "VALUES ('','$news_title','$news_text','$user_id','$news_sign',NOW(),'$news_pict_name','Y')";
    
		mysql_query($sql);
}

    
mysql_close($connect);

header('location: '.home.'admins/menu.php?'.SID.'&ok=1');



	  	//récupération de la date actuelle + formatage si elle n'est pas existante
			if(!isset($news_date))
    	  $news_date =  date("d-m-Y H:i", mktime(date("H"), date("i"), date("s"), date("m"), date("d"), date("Y")));

			//si on doit supprimer l'illustration
			if($illus_del)
			  unlink($news_dir.$news_file.'.jpg');

	  if(!isset($erreur))	//retour maison ?
      header('location: '.home.'admins/menu.php?'.SID.'&ok=1');
*/
?>
