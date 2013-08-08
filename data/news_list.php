<?

	require('glob_var.php');
	require('private.php');
  require('mep.php');
	print_header('', 1);
	print_news_title("Liste des news �crites par ".ucfirst($name).".<br>");

?>
<br>
Cliquez sur le nom de la news pour la modifier.<br>
<br><br>
<form action="data/news_del.php" method="post">
<table border="0" cellpadding="2" cellspacing="1" width="100%">
  <tr class="head">
    <td>&nbsp;</td>
		<td>n� news</td>
		<td>Titre</td>
		<td>Signature</td>
		<td>Date/heure</td>
	</tr>

<?
	//constante definissant le fichier contenant le n� de la prochaine news
	$news_dir = 'news/';
	$news_count_file = 'count.int';
  $news_count_path = $news_dir.$news_count_file;

  //r�cup�ration du n� de news max
	$file = fopen($news_count_path, 'r+'); 	//ouverture du fichier
	$max_news = fgets($file, 255);  //r�cup�ration du contenu
	settype($max_news, integer);	// convertion du contenu en entier
	fclose($file); //fermeture du fichier
  // affichage de toutes les news du membre
	for($i = $max_news; $i != 0; $i--) {
		// formatage du nom du fichier contenant la news sous la forme "00(...)n.new"
		settype($i, string);	// convertion du n� de news en chaine
		$news_file = str_repeat("0", 4 - strlen($i)).$i.'.new';
  	$news_path = $news_dir.$news_file; //creation du chemin de la nouvelle news
		if(file_exists($news_path)) {
  		$news_content = file($news_path);    //r�cuperation du fichier dans 1 tableau
 			//suppression des retours chariots en fonction de l'OS
			for($j = 0; $j <= 3; $j++) {
				$news_content[$j] = str_replace(chr(13).chr(10), "", $news_content[$j]); // "\r\n" = windows
				$news_content[$j] = str_replace(chr(13), "", $news_content[$j]); // "\r" = mac/os
  			$news_content[$j] = str_replace(chr(10), "", $news_content[$j]); // "\n" = unix
			}
			if($name==$news_content[1]) {  //on selectionne uniquement les news du membre
			  //affichage de la ligne correspondant � la news $i
  			print( "		<tr class=\"date\">\n" );
  			print( "      <td class=\"dateinfo\"><input type=\"checkbox\" class=\"field\" name=\"news$i\"></td>\n" );
  			print( "      <td class=\"dateinfo\">$i</td>\n" );
      	print( "<td class=\"datedate\"><a href=\"data/news_add.php?action=modif&news_number=$i\">$news_content[0]</a></td>" );
  			print( "      <td class=\"dateinfo\">$news_content[2]</td>\n" );
  			print( "      <td class=\"dateinfo\">$news_content[3]</td>\n" );
  			print( "    </tr>\n" );
  			print( "		<tr><td colspan=\"5\"><hr width=\"100%\" size=\"1\"></td></tr>\n" );
			}
		} else {              //puisqu'on affiche pas la news n�i
		  $nb_news_to_show++; //alors on va cherhcer une news plus loin
		}
	}

	print( "<tr><td colspan=\"5\"><input type=\"submit\" name=\"submit\" value=\"Supprimer les news s�lectionn�es\" class=\"field\"></td></tr></table></form>" ); //on ferme le tableau et le formulaire
  print( "<br><br>\n" );
  print( "<a href=\"admins/menu.php\">Retour au menu de l'espace perso</a><br>\n" );
	
  print_news_end();
	print_footer();
	
?>
