<? 

  // partie privée : vérifications d'usage
	require('glob_var.php');
  require('private.php');

	//constante definissant le fichier contenant le n° de la prochaine news
	$news_dir = 'news/';
	$news_count_file = 'count.int';
  $news_count_path = $news_dir.$news_count_file;

  //récupération du n° de news max
	$file = fopen($news_count_path, 'r+'); 	//ouverture du fichier
	$max_news = fgets($file, 255);  //récupération du contenu
	settype($max_news, integer);	// convertion du contenu en entier
	fclose($file); //fermeture du fichier
	
  // pour toutes les news
	for($i = $max_news; $i > 0; $i--)
    // on vérifie que la news est selectionnée
		if(${'news'.$i}) {	
		  // formatage du nom du fichier contenant la news sous la forme "00(...)n.new"
		  settype($i, string);	// convertion du n° de news en chaine
			$news_file = 'news/'.str_repeat("0", 4 - strlen($i)).$i.'.';
      //on change l'extension du fichier
			rename($news_file.'new', $news_file.'del');
		}
	
	//retour espace perso
	header('location: '.home.'admins/menu.php?'.SID.'&ok=1');

	
?>
