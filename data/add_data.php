<?


  // partie privée : vérifications d'usage
	require_once('glob_var.inc.php');
  require_once('private.php');
	
	//c'est juste pour récupérer le nombre d'items max
	require('items.php');
	
	//constante de localisation des fichiers de données
	$data_dir = 'members/'.strtolower($name).'/';
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
		  $current_item_content = str_replace('\t', "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;", $current_item_content); // "\t" = tab de 5
			//$current_item_content = eregi_replace("([ ]*)([?!:;]{1})", "&nbsp;\\2", $current_item_content); 			//ajout d'un espace insécable devant les ponctuyations doubles
			$current_item_content = preg_replace("/\\x0|[\x01-\x1f]/U", "", $current_item_content);  //on supprimer les 32 premiers caractères non imprimables de le table ASCII
			$current_item_content = str_replace("\"", "&quot;", $current_item_content);  //on remplace les doubles quotes par leur équivalent html
			$current_item_content = str_replace("¤", '', $current_item_content); //suppression du caractére de separation "¤"
			$complete_item = $i.'¤'.$current_item_content; //on serialise les deux chaines
			fputs($file, $complete_item."\n"); //on stock le n° de l'item et son contenu dans le fichier
    }
	}

	fclose($file); //fermeture du fichier

	//retour espace perso
	header('location: '.home.'admins/menu.php?'.SID.'&ok=1');
	
	
?>
