<?


	$image = imagecreatefromjpeg($file_path); //ouverture du fichier
	
  //récuperation des dimension de l'image originale
	$source_width = imagesx($image);
	$source_height = imagesy($image);
	
	$preview_width = 100;   //largueur constante de 100 px
	$preview_height = ($preview_width * $source_height) / $source_width; //hauteur propotionnelle
	
	//creation de l'image preview
	$preview = imagecreate($preview_width, $preview_height);
	imageinterlace($preview, 1);
	
	//redimensionnement
	imagecopyresampled($preview, $image, 0, 0, 0, 0, $preview_width, $preview_height, $source_width, $source_height);
	
	//on envoi le resultat
	header("Content-type: image/jpeg");			 
	imagejpeg($preview);
	
	//on fait le menage
	imagedestroy($image);
	imagedestroy($preview);


?>