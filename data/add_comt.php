<?

	require("../include/glob_var.php");
	require("../include/mep.php");
			
	//reformatage de la variable date pour evite le CSS
	settype($date, integer);
	settype($date, string);
	$date = substr($date,0,6); //on ne récupére que les 6 premiers caractères de la chaine
	while(strlen($date) < 6)  //on ajoute les zéros perdu dans la convertion int->chaine
	  $date = '0'.$date;

	//pour eviter les $img du type ../../
  $img = explode(".", $img);
	$img = $img[0]; 

  //on fait le ménage et on formate le texte
  //remplacement des retours chariots par <br> en fonction de l'OS
	$comt_text = str_replace(chr(13).chr(10), "<br>", $comt_text); // "\r\n" = windows
 	$comt_text = str_replace(chr(13), "<br>", $comt_text); // "\r" = mac/os
 	$comt_text = str_replace(chr(10), "<br>", $comt_text); // "\n" = unix
	//on supprimer les 32 premiers caractères non imprimables de le table ASCII
	$comt_text = preg_replace("/\\x0|[\x01-\x1f]/U", "", $comt_text);
  $comt_author = preg_replace("/\\x0|[\x01-\x1f]/U", "", $comt_author);
	$comt_mail = preg_replace("/\\x0|[\x01-\x1f]/U", "", $comt_mail);
	//conversion <br> -> \n
	$comt_text = str_replace("<br>", "\n", $comt_text);
  //on supprime les espaces de debut et fin, et les slash
	$comt_author = stripslashes(strip_tags(trim($comt_author), ""));
	$comt_mail = stripslashes(strip_tags(trim($comt_mail), ""));
  $comt_text = stripslashes(strip_tags(trim($comt_text), ""));
  //on remplace ensuite les braquets
	$comt_author = str_replace(">", "&gt;", $comt_author);
	$comt_mail = str_replace(">", "&gt;", $comt_mail);
	$comt_text = str_replace(">", "&gt;", $comt_text);
	$comt_author = str_replace("<", "&lt;", $comt_author);
	$comt_mail = str_replace("<", "&lt;", $comt_mail);
	$comt_text = str_replace("<", "&lt;", $comt_text);
	//reconversion
	$comt_text = str_replace("\n", "<br>", $comt_text);
  //on remplace les doubles quotes par leur équivalent html
	$comt_author = str_replace("\"", "&quot;", $comt_author);
	$comt_mail = str_replace("\"", "&quot;", $comt_mail);
	$comt_text = str_replace("\"", "&quot;", $comt_text);
	//suppression du caractére de separation "¤"
	$comt_author = str_replace("¤", "", $comt_author);
	$comt_mail = str_replace("¤", "", $comt_mail);
	$comt_text = str_replace("¤", "", $comt_text);
  //ajout d'un espace insécable devant les ponctuations doubles	
	//$comt_text = eregi_replace("(( |(&nbsp;))*)([?!:;]{1})", "&nbsp;\\2", $comt_text);
	//$comt_author = eregi_replace("([ ]*)([?!:;]{1})", "&nbsp;\\2", $comt_author);

	//le texte ici doit être directement exploitable en HTML
		
	//on verifie la precence d'un commentaire et l'existance de la photo
	if(file_exists("gigs/$date/$img.jpg") && ($comt_text != "")) {
		//post anonyme ?
	  if($comt_author == "")
	    $comt_author = "anonyme";
    //vérification de la validité du mail
		if(!eregi("([_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)+)", $comt_mail))  //si mail inconforme, on le null-ifi	
		  $comt_mail = "";
	  //contenu parfait, on enregistre le comm'
	  //constantes de localisation des fichiers et dossier de destination
	  $gig_dir = "gigs/";
  	$gig_photo_dir = "$gig_dir$date/";
		$photo_comt = "$gig_photo_dir$img.com";
		//si le fichier des commentaires n'existe pas, on le fabrique
  	if(!file_exists($photo_comt))
	  	touch($photo_comt);  //création d'un fichier vide
 		//récupération de la date actuelle
		$comt_date = date("d-m-Y H:i", mktime(date("H"), date("i"), date("s"), date("m"), date("d"), date("Y")));
  	//enregistrement fichier
 		$file = fopen($photo_comt, 'r+'); 	//ouverture de la news
		// date ¤ nom ¤ e-mail ¤ comm' 
		$complete_comt = $comt_date."¤".$comt_author."¤".$comt_mail."¤".$comt_text; //on serialise les infos du commentaire
		//on place le pointeur à la fin du fichier
    while(!feof($file))
			$buffer = fgets($file, 2);
		fputs($file, "$complete_comt\n"); //on enregistre le nouveau commentaire
 		fclose($file); //fermeture du fichier
  }
		
	//retour maison
  header('location: '.home.'data/gig_pics.php?date='.$date.'&img='.$img);
	
?>
