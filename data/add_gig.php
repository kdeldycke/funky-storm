<?


	require_once('glob_var.inc.php');
  require_once('private.php');

	if(($gig_day == 0) || ($gig_month == 0) || ($gig_year == '') || ($gig_hour == '') || ($gig_place == '') || ($gig_town == '') || ($gig_country == ''))
	  $erreur = 1;
	else {    //verification de la validité des infos des champs
	  if( count($gig_year)!=4 || !checkdate($gig_month, $gig_day, $gig_year) )  //si la date n'est pas au bon format ou n'esiste pas
	    $erreur = 2;
		else {
		  $hour = $gig_hour[0].$gig_hour[1]; //récupération de l'heure
			$minute = $gig_hour[2].$gig_hour[3];  //récupération des minutes
		  if( (count($gig_hour)!=4) || ($hour>23) || ($hour<0) || ($minute>59) || ($minute<0) )  //heure invalide
			  $erreur = 3;
			else {
			
			}
	  }
	}
	
	/*
	//constante de localisation des fichiers de données
	$data_dir = 'concerts/';
	$data_file = 'personal.txt';
  $data_path = $data_dir.$data_file;
	
	//si le fichier existe, on le supprime
	if(file_exists($data_path))
  	unlink($data_path);
	
	touch($data_path);  //création du fichier vide
	
	//enregistrement des données perso
  $file = fopen($data_path, 'r+'); 	//ouverture du fichier
	
	//pour chacun des champs
	for($i=0; $i<$items_max; $i++) {
	  $current_item_content = ${'item_'.$i}; //recuperation du contenu de l'item $i
		if($current_item_content != '') { //si il y a des informations, on formate la chaine
		  $current_item_content = trim($current_item_content); //on supprime les espaces de debut et fin
	    $current_item_content = strip_tags($current_item_content, "<i>,<br>"); //on supprime dans le texte toutes les balises html sauf...
	    $current_item_content = stripslashes($current_item_content);   //idem
			$current_item_content = str_replace("¤", '', $current_item_content); //suppression du caractére de separation "¤"
			$complete_item = $i.'¤'.$current_item_content; //on serialise les deux chaines
			fputs($file, $complete_item."\n"); //on stock le n° de l'item et son contenu dans le fichier
    }
	}

	fclose($file); //fermeture du fichier
*/
  

	//retour espace perso avec ou sans erreur
	if(!isset($erreur))
    header('location: '.home.'admins/menu.php?'.SID.'&ok=1');
	else {    //attention: erreur !
    //sauvegarde via les variables de sessions du contenu des champs pour ré-affichage
		/*if($gig_day != '')
   		session_register("gig_day");
		if($gig_month != 0)			
		  session_register("gig_month");
		if($gig_year != 0)			
		  session_register("gig_year");
		if($gig_month != 0)			
		  session_register("gig_hour");
		if($gig_month != 0)			
		  session_register("gig_place");
		if($gig_month != 0)			
		  session_register("gig_town");
		if($gig_month != 0)			
		  session_register("gig_dept");
		if($gig_month != 0)			
		  session_register("gig_dept2");
		if($gig_month != 0)			
		  session_register("gig_country");
		if($gig_month != 0)			
		  session_register("gig_notes");
		if($gig_month != 0)			
		  session_register("gig_price");
		if($gig_month != 0)			
		  session_register("gig_free");*/
    header('location: '.home.'admins/concert.php?'.SID.'&erreur='.$erreur);
	}

?>
