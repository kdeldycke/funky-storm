<?

	require('glob_var.php');
	require('private.php');
  require('mep.php');
	print_header('', 1);
	print_news_title("Upload d'illustration pour la news $news_title (n°$news_number).<br>");
	
	//gestion des erreurs
	if(isset($err)) {
	  echo "<br><span class=\"warning\">Probléme : ";
	  switch($err) {
	    case 1: echo "L'image est trop lourde (sa taille est supérieure à 30 ko).";
              break;
		  case 2: echo "L'image est inaccessible.";
              break;
		  case 3: echo "Il est impossible de copier l'image sur le serveur.";
              break;
		  case 4: echo "L'image n'est pas un fichier Jpeg.";
              break;
		  case 5: echo "L'image posséde des dimensions supérieures à 200x200 pixels.";
              break;
	  }
		echo "</span><br>";
	}
	
?>

Cette partie te permet d'ajouter une nouvelle photo pour la news n°<? echo $news_number; ?>.<br>
L'illustration doit être un fichier Jpeg de 200x200 pixels au maximum et ne devras en aucun cas peser plus de 30ko.<br>
<br>
<form action="data/illus_upload.php3" method="post" enctype="multipart/form-data">
  <!-- taille max du fichier en octets; 100 ko = 30s de upload en 28.8 k/s = timeout du script chez free -->
  <input type="hidden" name="MAX_FILE_SIZE" value="<? echo 30*1024; ?>">
	<input type="hidden" name="news_number" value="<? echo $news_number; ?>">
	<b>1. Choisir un fichier (et un seul) :</b><br>
	<br>
  &nbsp;&nbsp;&nbsp;&nbsp;<input type="file" name="dl_image" class="field"><br>
  <br><br>
  <b>2. Cliquer ici :</b><br>
	<br>
  &nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="submit" value="Envoyer la photo" class="field"><br>
</form>
<br><br>
<a href="admins/menu.php">Retour au menu de l'espace perso</a> | <a href="data/illus_all.php">Retour à la liste des news</a><br>	
	
	
<?

  print_news_end();
	print_footer();
	
?>
