<?

	require_once('glob_var.inc.php');
	require_once('private.php');
  require_once('design.inc.php');

print_header('', 1);


print_news_title("Gestion des illustrations des news écrites par $name.<br>");
  $txt = "";
  $txt .= "<br>\n" ;
  $txt .= "Cliquez sur le nom de la news pour modifier ou ajouter son illustration.<br>\n" ;
  $txt .= "<br><br>\n" ;
  $txt .= "<form action=\"data/news_ill.php\" method=\"post\">\n" ;
  $txt .= "<table border=\"0\" cellpadding=\"2\" cellspacing=\"1\" width=\"100%\">\n" ;
  $txt .= "  <tr class=\"head\">\n" ;
  $txt .= "		<td>n° news</td>\n" ;
  $txt .= "		<td>Titre</td>\n" ;
  $txt .= "		<td>Signature</td>\n" ;
  $txt .= "		<td>Date/heure</td>\n" ;
  $txt .= "	</tr>\n" ;

	//constante definissant le fichier contenant le n° de la prochaine news
	$news_dir = 'news/';
	$news_count_file = 'count.int';
  $news_count_path = $news_dir.$news_count_file;
  //récupération du n° de news max
	$file = fopen($news_count_path, 'r+'); 	//ouverture du fichier
	$max_news = fgets($file, 255);  //récupération du contenu
	settype($max_news, integer);	// convertion du contenu en entier
	fclose($file); //fermeture du fichier
  // affichage de toutes les news du membre
	for($i = $max_news; $i != 0; $i--) {
		// formatage du nom du fichier contenant la news sous la forme "00(...)n.new"
		settype($i, string);	// convertion du n° de news en chaine
		$news_file = str_repeat("0", 4 - strlen($i)).$i.'.new';
  	$news_path = $news_dir.$news_file; //creation du chemin de la nouvelle news
		if(file_exists($news_path)) {
  		$news_content = file($news_path);    //récuperation du fichier dans 1 tableau
 			//suppression des retours chariots en fonction de l'OS
			for($j = 0; $j <= 3; $j++) {
				$news_content[$j] = str_replace(chr(13).chr(10), "", $news_content[$j]); // "\r\n" = windows
				$news_content[$j] = str_replace(chr(13), "", $news_content[$j]); // "\r" = mac/os
  			$news_content[$j] = str_replace(chr(10), "", $news_content[$j]); // "\n" = unix
			}
			if($name==$news_content[1]) {  //on selectionne uniquement les news du membre
			  //affichage de la ligne correspondant à la news $i
  			$txt .= "		<tr class=\"date\">\n" ;
  			$txt .= "      <td class=\"dateinfo\">$i</td>\n" ;
      	$txt .= "<td class=\"datedate\"><a href=\"data/illus_add.php?news_number=$i\">$news_content[0]</a></td>" ;
  			$txt .= "      <td class=\"dateinfo\">$news_content[2]</td>\n" ;
  			$txt .= "      <td class=\"dateinfo\">$news_content[3]</td>\n" ;
  			$txt .= "    </tr>\n" ;
  			$txt .= "		<tr><td colspan=\"5\"><hr width=\"100%\" size=\"1\"></td></tr>\n" ;
			}
		} else {              //puisqu'on affiche pas la news n°i
		  $nb_news_to_show++; //alors on va cherhcer une news plus loin
		}
	}

  $txt .= "	</table></form>" ;
  $txt .= "<br><br>\n" ;
  $txt .= "<a href=\"admins/menu.php\">Retour au menu de l'espace perso</a><br>\n" ;
	
print_news_content($txt);
	
	
print_footer();
	
?>
