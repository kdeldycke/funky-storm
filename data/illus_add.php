<?

	require_once('glob_var.inc.php');
	require_once('private.php');
  require_once('design.inc.php');
	
print_header('', 1);


print_news_title("Upload d'illustration pour la news $news_title (n°$news_number).<br>");
	$txt = "";
	
	//gestion des erreurs
	if(isset($err)) {
	  $txt .= "<br><span class=\"warning\">Probléme : ";
	  switch($err) {
	    case 1: $txt .= "L'image est trop lourde (sa taille est supérieure à 30 ko).";
              break;
		  case 2: $txt .= "L'image est inaccessible.";
              break;
		  case 3: $txt .= "Il est impossible de copier l'image sur le serveur.";
              break;
		  case 4: $txt .= "L'image n'est pas un fichier Jpeg.";
              break;
		  case 5: $txt .= "L'image posséde des dimensions supérieures à 200x200 pixels.";
              break;
	  }
		$txt .= "</span><br>";
	}
	
  $txt .= "Cette partie te permet d'ajouter une nouvelle photo pour la news n°<? echo $news_number; ?>.<br>\n" ;
  $txt .= "L'illustration doit être un fichier Jpeg de 200x200 pixels au maximum et ne devras en aucun cas peser plus de 30ko.<br>\n" ;
  $txt .= "<br>\n" ;
  $txt .= "<form action=\"data/illus_upload.php3\" method=\"post\" enctype=\"multipart/form-data\">\n" ;
  $txt .= "  <!-- taille max du fichier en octets; 100 ko = 30s de upload en 28.8 k/s = timeout du script chez free -->\n" ;
  $txt .= "  <input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"".30*1024."\">" ;
  $txt .= "	<input type=\"hidden\" name=\"news_number\" value=\"".$news_number."\">" ;
  $txt .= "	<b>1. Choisir un fichier (et un seul) :</b><br>\n" ;
  $txt .= "	<br>\n" ;
  $txt .= "  &nbsp;&nbsp;&nbsp;&nbsp;<input type=\"file\" name=\"dl_image\" class=\"field\"><br>\n" ;
  $txt .= "  <br><br>\n" ;
  $txt .= "  <b>2. Cliquer ici :</b><br>\n" ;
  $txt .= "	<br>\n" ;
  $txt .= "  &nbsp;&nbsp;&nbsp;&nbsp;<input type=\"submit\" name=\"submit\" value=\"Envoyer la photo\" class=\"field\"><br>\n" ;
  $txt .= "</form>\n" ;
  $txt .= "<br><br>\n" ;
  $txt .= "<a href=\"admins/menu.php\">Retour au menu de l'espace perso</a> | <a href=\"data/illus_all.php\">Retour à la liste des news</a><br>	\n" ;
print_news_content($txt);


print_footer();
	
?>
