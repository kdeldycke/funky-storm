<?

  // partie privée : vérifications d'usage
	require('glob_var.php');
  require('private.php');

	$photo_dir = 'members/';
	$handle = opendir($photo_dir); //ouvreture du repertoire contenant les photos 
  while($file = readdir($handle)) { //pour chacun des fichier du repertoire member
	  $subdir = $photo_dir.$file.'/'; //creation du chemin du sou-repertoire
	  if(is_dir($subdir) && ($file!='.') && ($file!='..')) { //si c'est un dossier autre que '.' et '..'
		  $sub_handle = opendir($subdir);      //ouvreture du sous repertoire 
      while($file = readdir($sub_handle)) { //pour chacun des fichier du repertoire du membre
        if( ($file!='.') && ($file!='..') && (substr($file, 0, 4)!='pre_') && ($file!='personal.txt')) {  //si c'est un fichier autre que celui contenant les infos perso et autre que les previews, on prend !
          $image = imagecreatefromjpeg($subdir.$file);      //ouverture de l'image
				  $source_width = imagesx($image);      //récuperation des dimension de l'image originale
      	  $source_height = imagesy($image);
				  //determination des dimensions de la preview
      	  $preview_width = 100;   //largueur constante de 100 px
      	  $preview_height = ($preview_width * $source_height) / $source_width; //hauteur propotionnelle
					if($preview_height > 100) {
					  $preview_height = 100;
	      	  $preview_width = ($preview_height * $source_width) / $source_height; //longueur propotionnelle
					}
      	  $preview = imagecreate($preview_width, $preview_height);    	//creation de l'image preview
      	  imagecopyresized($preview, $image, 0, 0, 0, 0, $preview_width, $preview_height, $source_width, $source_height);	//redimensionnement
      	  imageinterlace($preview, 1); //sauvegarde preview en jpeg mode progressif			 
      	  imagejpeg($preview, $subdir.'pre_'.$file, 60); //sauvegarde fichier preview qualité 60
      	  imagedestroy($image);	//on fait le menage
      	  imagedestroy($preview);	//on fait le menage
				}
			}
			closedir($sub_handle);  //fermeture du repertoire scanné
	  }
	}
  closedir($handle);  //fermeture du repertoire scanné
	
	//retour espace perso
	header('location: '.home.'admins/menu.php?'.SID.'&ok=1');

?>
