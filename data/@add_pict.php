<?

  // partie privée : vérifications d'usage
	require('glob_var.php');
  require('private.php');

  if($dl_image == 'none')  // image trop grosse ?
	  $pb = "ton image ne répond pas aux critères de beauté d'une image. Elle est trop grosse !";
	else if($dl_image_size == 0)  //si le fichier est inaccessible
	  $pb = "fichier inacessible";
	else {    //image ok
		$dest_dir = 'members/'.strtolower($name).'/';  //dossier des photos du membre
		$dest_path = $dest_dir.$dl_image_name; // chemin du fichier grande qualité 
	  if(!copy($dl_image, $dest_path)) //copy de l'image grand format vers sa destination finale et sinon
		  $pb = "impossible de copier l'image $dl_image vers $dest_path"; //pb, image pas passée
		else {
   	  //supprimer dan le nom de destination final tout les caractéres autres que a..z A..Z 0..9 + lowercase et suppression de la chaine pre_ si elle existe
    	//interdire l'écriture d'un fichier personnal.txt
      //gerer la detection des types de fichiers avant download
    	//que faire si nom deja existant ?
    	$image = imagecreatefromjpeg($dl_image);      //ouverture de l'image downloadée
    	$source_width = imagesx($image);      //récuperation des dimension de l'image originale
    	$source_height = imagesy($image);
	    //determination des dimensions de la preview
    	$preview_width = 100;   //largueur constante de 100 px
     	$preview_height = ($preview_width * $source_height) / $source_width; //hauteur propotionnelle
	    $preview = imagecreate($preview_width, $preview_height);    	//creation de l'image preview
    	imagecopyresampled($preview, $image, 0, 0, 0, 0, $preview_width, $preview_height, $source_width, $source_height);	//redimensionnement
    	imageinterlace($preview, 1); //sauvegarde preview en jpeg mode progressif			 
    	imagejpeg($preview, $dest_dir.'pre_'.$dl_image_name, 60); //sauvegarde fichier preview qualité 60
	  	imagedestroy($image);	//on fait le menage
    	imagedestroy($preview);	//on fait le menage
 		}
	}
	
	if($pb != '')
	  $url_opt = '&pb='.$pb;
  header('location: '.home.'admins/menu.php?'.SID.$url_opt); 	//retour espace perso

	
/*
  function upload($destination, $userfile, $userfile_name, $userfile_size) {
    $Resultat = ''; 
 		// Taille maximale de l'upload 
 		$size = 4 * 1024 * 1024; 
 		if($userfile_size >= $size) { 
      $size_max_ko = $size / 1024; 
      $Resultat = "Votre fichier est trop gros ($size_max_ko ko max)."; 
    } 
    if(($userfile != "none") && ($userfile_size < $size) && ($userfile_size != 0)) { 
      if(!file_exists("$destination/$userfile_name")) { 
        // si le répertoire n'existe pas 
        if(!file_exists("$destination"))
          mkdir("$destination", 0775); 
        if (!copy($userfile, "$destination/$userfile_name")) { 
          $Resultat = "Problème de transfert pour le fichier;"; 
				else 
          $Resultat = "Fichier enregistré";
      } else 
        $Resultat = "Le fichier ".$userfile_name." que vous voulez transférer existe dèjà dans votre répertoire."; 
    } 
    // Resultat 
    return $Resultat; 
}

          session_name('id');
          session_start();

					echo "<br>$image_path<br>";


if (is_uploaded_file("$image_path")) {
copy($image_path, "photos");
} else {
echo "Attaque potentielle par fichier téléchargé : fichier $image_path";
}
				
echo $HTTP_POST_FILES['name'];			

		
echo $HTTP_POST_FILES[$image_path]['name'];

echo $HTTP_POST_FILES[$image_path]['type'];

echo $HTTP_POST_FILES[$image_path]['size'];

echo $HTTP_POST_FILES[$image_path]['tmp_name'];
	*/				

?>
