<?

  // partie privée : vérifications d'usage
	require('glob_var.php');
  require('private.php');

	
	settype($news_number, string);	// convertion du n° de news en chaine
	$news_file = str_repeat("0", 4 - strlen($news_number)).$news_number;
  //upload de l'image
	if(($dl_image=='none') || ($dl_image_size>(30*1024)))  // image trop grosse ? = > 30ko
	 	$erreur = 1;
	else if($dl_image_size == 0)  //si le fichier est inaccessible
	  $erreur = 2;
	else {    //image ok
	  $dest_path = 'news/'.$news_file.'.jpg'; // chemin du fichier 
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

	if(!isset($erreur))
	  header('location: '.home.'admins/menu.php?'.SID.'&ok=1');
	else
	  header('location: '.home.'data/illus_add.php?'.SID.'&err='.$erreur);
			
?>
