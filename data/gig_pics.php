<?

  require('../include/glob_var.php');
  require('../include/mep.php');

	//aucune date de spécifié, retour liste des concert
	if(!isset($date))
	  header('location: '.home.'photos.php');

	//reformatage de la variable date pour evite le CSS
	settype($date, integer);
	settype($date, string);
	$date = substr($date,0,6); //on ne récupére que les 6 premiers caractères de la chaine
	while(strlen($date) < 6)  //on ajoute les zéros perdu dans la convertion int->chaine
	  $date = '0'.$date;
		
	//le dossier existe-t-il ?
	if(!is_dir('gigs/'.$date))
	  header('location: '.home.'photos.php');	

	//pour eviter les $img du type ../../
  $img = explode(".", $img);
	$img = $img[0]; 
	
	//affichage des thumbnails
  print_header();
	
  print_news_title("Photos du concert du $date[0]$date[1]/$date[2]$date[3]/20$date[4]$date[5]<br>");

  $gig_photo_dir = 'gigs/'.$date.'/';
	
	//a-t-on demandé l'affichage d'une seule photo ?
	if(!isset($img) || !file_exists($gig_photo_dir.$img.'.jpg')) {  //si $img n'existe pas ou si elle n'est pas valide, on affiche la totale des photos
	  print("<center><a href=\"photos.php\">retour à la liste des \"Evénements Funky\"</a></center><br><br>");
		print("<table border=\"0\" cellpadding=\"0\" cellspacing=\"5\" width=\"100%\">");
	  $handle = opendir($gig_photo_dir); //ouvreture du repertoire contenant les photos 
    //on stocke la liste des fichiers dans un tableau et on le tri
		$file_list = array();
		while($file = readdir($handle))
      if(($file!='.') && ($file!='..') && (!is_dir($gig_photo_dir.$file)) && (substr($file, strlen($file)-4, 4)=='.jpg')) //si c'est un fichier .jpg, on prend
			  $file_list[] = $file;
		sort($file_list);
		$nb_images = count($file_list);
		for($i=0; $i<$nb_images; $i++) {
			$gig_preview_path = $gig_photo_dir.'preview/'.$file_list[$i];
			$dim = getimagesize($gig_preview_path); //récupération des dimensions du preview
			$file_name = explode(".", $file_list[$i]); //récupération du nom du fichier sans l'extension
			$file_name = $file_name[0];
			//récupération des infos sur les commentaires
			$comt_path = $gig_photo_dir.$file_name.'.com';
	   	if(!file_exists($comt_path)) {  //si fichier de données perso inexistant
	    	$x = 0;
				$text = '&nbsp;';
			}	else {
			  $comment = file($comt_path);    //récuperation du fichier dans 1 tableau
				$x = sizeof($comment);
		   	$comment_item = explode('¤', $comment[$x-1]);  //separation de l'info de l'item en deux
				$text = "$comment_item[3]<br><br><font color=\"#999999\" size=\"1\">posté par $comment_item[1] le $comment_item[0]</font><br>";
			}
			$s = '';
			if($x > 1)
				$s = 's';
     	print("<tr valign=\"top\"><td align=\"right\"><a href=\"data/gig_pics.php?date=$date&img=$file_name\">");
   		print("<img alt=\"cliquez pour une image plus grande\" src=\"data/".$gig_preview_path."\" border=\"0\" ".$dim[3].">");
			print("<br><font color=\"#666666\" size=\"1\">[$x commentaire$s]</font></a><br><br></td><td class=\"n2\">$text<br><br></td></tr>");
		}
		print("</table>");
		print("<center><b>Note</b>&nbsp;: les commentaires appartiennent à leurs auteurs (ceux qui les ont postés). Nous n'en sommes pas responsables.</center>");
		print_news_end();
  	closedir($handle);  //fermeture du repertoire scanné
	} else {
	  $dim = getimagesize($gig_photo_dir.$img.'.jpg');
		//on fabrique un tableau contenant la liste des fichiers
	  $handle = opendir($gig_photo_dir); //ouvreture du repertoire contenant les photos
		//stockage des noms de fichiers dans un tableau et tri
		$file_list = array();
		while($file = readdir($handle))
      if(($file!='.') && ($file!='..') && (substr($file, strlen($file)-4, 4)=='.jpg')) { //si c'est un fichier autre que celui contenant les infos perso et autre que les previews, on prend !
				$file_name = explode(".", $file);
			  $file_list[] = $file_name[0];
			}
		sort($file_list);
	  closedir($handle);  //fermeture du repertoire scanné
		$nb_images = count($file_list);
	  //recherche des precedent, suivant
	  unset($next);
	  unset($prev);
	  for($i=0; $i<$nb_images; $i++)
	    if($file_list[$i] == $img) {
		    if($i != 0)
				  $prev = $file_list[$i - 1];
			  if($i != $nb_images - 1)
			    $next = $file_list[$i + 1];
			}
  	print("<br><center>");
		if(isset($prev))
      print("<a href=\"data/gig_pics.php?date=$date&img=$prev\">photo précédente</a>");
		else
      print("photo précédente");
		print(" | <a href=\"photos.php\">retour à la liste des \"Evénements Funky\"</a> | <a href=\"data/gig_pics.php?date=$date\">retour à la liste des photos</a> | ");
		if(isset($next))
      print("<a href=\"data/gig_pics.php?date=$date&img=$next\">photo suivante</a>");
		else
      print("photo suivante");
		print("<br><br><img src=\"data/".$gig_photo_dir."$img.jpg\" alt=\"$img\" $dim[3]></center>");
		print_news_end();
		
		//affichage des commentaires
		print_news_title("Commentaires<br>");
		$comt_path = $gig_photo_dir.$img.'.com';
	  if(!file_exists($comt_path)) { //si fichier de données perso inexistant
	    print('Sans commentaires...<br>');
	  } else {  //sinon on affiche les données
		  $comment = file($comt_path);    //récuperation du fichier dans 1 tableau
		  for($i=0; $i<sizeof($comment); $i++) {  //on scanne le tableau
		    $comment_item = explode('¤', $comment[$i]);  //separation de l'info de l'item en deux
			  print("$comment_item[3]");
				print("<br><br><table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\"><tr><td class=\"newssign\">" );
        print("posté par ");
				if($comment_item[2]=='')
				  print("$comment_item[1]");
				else
				  print("<a href=\"mailto:$comment_item[2]\">$comment_item[1]</a>");
				print(" le $comment_item[0]");  //écriture de la signature
        print("</td></tr></table><hr width=\"100%\" size=\"1\">");  //fermeture table d'alignement
		  }
		}
		print_news_end();		
		
	  print_news_title("Ajouter un commentaire<br>");
		print("Seul le champ &quot;commentaire&quot; est obligatoire.<br><br>");
	  print( "	<form action=\"data/add_comt.php\" method=\"post\">\n" );
	  print("<input type=\"hidden\" name=\"date\" value=\"$date\">");
    print("<input type=\"hidden\" name=\"img\" value=\"$img\">");
  	print( "	<table border=\"0\" cellpadding=\"0\" cellspacing=\"5\">\n" );
		print( "  <tr>\n" );
  	print( "    <td class=\"n2\">Nom</td>\n" );
  	print( "    <td><input type=\"text\" name=\"comt_author\" size=\"60\" maxlength=\"50\" class=\"field\"></td>\n" );
  	print( "  </tr>\n" );
  	print( "  <tr>\n" );
  	print( "    <td class=\"n2\">E-mail</td>\n" );
  	print( "    <td><input type=\"text\" name=\"comt_mail\" size=\"60\" maxlength=\"50\" class=\"field\"></td>\n" );
  	print( "  </tr>\n" );
  	print( "	<tr>\n" );
  	print( "    <td class=\"n2\">Commentaire</td>\n" );
  	print( "    <td><textarea rows=\"8\" cols=\"60\" name=\"comt_text\" class=\"field\"></textarea></td>\n" );
  	print( "  </tr>\n" );
		print( "	<tr>\n" );
		print( "	<td>&nbsp;</td><td>" );
		print( "<input type=\"submit\" name=\"submit\" value=\"Ajouter le commentaire\" class=\"field\">&nbsp;&nbsp;&nbsp;<input class=\"field\" type=\"reset\" value=\"Effacer le formulaire\">" );
		print( "	<td>\n" );				
		print( "	</tr>\n" );
  	print( "</table>\n" );
  	print( "</form>" );
		print_news_end();
	}
	
  print_footer();

?>






