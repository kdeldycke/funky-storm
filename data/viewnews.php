<?
		
  // partie privée : vérifications d'usage
	require('../include/glob_var.php');
	require('../include/mep.php');
	
	//constante definissant le fichier contenant le n° de la prochaine news
	$news_dir = 'news/';
	$news_count_file = 'count.int';
  $news_count_path = $news_dir.$news_count_file;
	
  // formatage du nom du fichier contenant la news sous la forme "00(...)n.new"
	settype($news_number, string);	// convertion du n° de news en chaine
	$news_file = str_repeat("0", 4 - strlen($news_number)).$news_number;
  $news_path = $news_dir.$news_file.'.new'; //creation du chemin de la nouvelle news
	if(file_exists($news_path)) {
  	$news_content = file($news_path);    //récuperation du fichier dans 1 tableau
 		//suppression des retours chariots en fonction de l'OS
		for($i = 0; $i <= 3; $i++) {
			$news_content[$i] = str_replace(chr(13).chr(10), "", $news_content[$i]); // "\r\n" = windows
			$news_content[$i] = str_replace(chr(13), "", $news_content[$i]); // "\r" = mac/os
  		$news_content[$i] = str_replace(chr(10), "", $news_content[$i]); // "\n" = unix
		}
		//transalation entre le tableau contenant les données de la news et les variables usuelles
		$news_title = $news_content[0];
		$news_text = $news_content[4];
		$news_author = $news_content[2];
		$news_date = $news_content[3];
	} else
    header('location: '.home.'old_news.php');
	
	//affichage
	print_header();
  print_news_title($news_content[0]); //affichage de l'entete de la news
	//affichege illustration
	$illus_path = $news_dir.$news_file.'.jpg';
	if(file_exists($illus_path)) {
		$dim = getimagesize($illus_path);
		print("<table border=\"0\" cellpadding=\"0\" cellspacing=\"5\" width=\"100%\"><tr align=\"left\" valign=\"top\"><td><img alt=\"$news_file.jpg\" src=\"data/$illus_path\" $dim[3]></td><td class=\"n2\">$news_content[4]</td></tr></table>");
	}	else 
		 echo $news_content[4];
	//affichage signature avec lien et alignement à droite
	if($news_content[1] == 'webmaster')
	  $url = 'about.php';
	else 
  	$url = 'members.php?name='.$news_content[1];
  print( "<br><br><table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\"><tr><td class=\"newssign\">" );
  print( "[<a href=\"$url\">$news_content[2]</a>] posté le $news_content[3]" );  //écriture de la signature
  print( "</td></tr></table>" );  //fermeture table d'alignement

	print_news_end();  //fin news	
	
  //récupération du n° de news max
	$file = fopen($news_count_path, 'r+'); 	//ouverture du fichier
	$max_news = fgets($file, 255);  //récupération du contenu
	settype($max_news, integer);	// convertion du contenu en entier
	fclose($file); //fermeture du fichier

	//recherche de la news suivante	
	unset($next); //initialisation de la variable contenant le n° de la prochaine news
	for($i=$news_number+1; !isset($next) && $i<=$max_news; $i++) {
		settype($i, string);	// convertion du n° de news en chaine
		$news_file = str_repeat("0", 4 - strlen($i)).$i.'.new';
  	$news_path = $news_dir.$news_file; //creation du chemin de la nouvelle news
		if(file_exists($news_path))
		  $next = $i;
	}
	
  //recherche de la news precedente	
	unset($prev); //initialisation de la variable contenant le n° de la prochaine news
	for($i=$news_number-1; !isset($prev) && $i>=0; $i--) {
		settype($i, string);	// convertion du n° de news en chaine
		$news_file = str_repeat("0", 4 - strlen($i)).$i.'.new';
  	$news_path = $news_dir.$news_file; //creation du chemin de la nouvelle news
		if(file_exists($news_path))
		  $prev = $i;
	}
		
	//affichage des liens
	echo '<center>';
  if(isset($next))
	  print("<a href=\"data/viewnews.php?news_number=$next\">news suivante</a>");
	else
	  print("news suivante");
	print(" | <a href=\"old_news.php\">retour à la liste des anciennes news</a> | ");
  if(isset($prev))
    print("<a href=\"data/viewnews.php?news_number=$prev\">news précédente</a>");
	else
    print("news précédente");
	echo '</center>';
	print_footer();
	
?>
