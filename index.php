<? 

  //mise en page
  require('glob_var.php');
  require('mep.php');

  print_header();

	//constante definissant le fichier contenant le n� de la prochaine news
	$news_dir = 'data/news/';
	$news_count_file = 'count.int';
  $news_count_path = $news_dir.$news_count_file;

  //r�cup�ration du n� de news max
	$file = fopen($news_count_path, 'r+'); 	//ouverture du fichier
	$max_news = fgets($file, 255);  //r�cup�ration du contenu
	settype($max_news, integer);	// convertion du contenu en entier
	fclose($file); //fermeture du fichier
	
  // affichage des derni�res news
	$nb_news_to_show = 5; //on lui demande d'afficher les X derni�res news
	for($i = $max_news; ($i > ($max_news - $nb_news_to_show)) && ($i != 0); $i--) {
		// formatage du nom du fichier contenant la news sous la forme "00(...)n.new"
		settype($i, string);	// convertion du n� de news en chaine
		$news_file = str_repeat("0", 4 - strlen($i)).$i;
  	$news_path = $news_dir.$news_file.'.new'; //creation du chemin de la nouvelle news
		if(file_exists($news_path)) {
  		$news_content = file($news_path);    //r�cuperation du fichier dans 1 tableau
 			//suppression des retours chariots en fonction de l'OS
			for($j = 0; $j <= 3; $j++) {
				$news_content[$j] = str_replace(chr(13), "", $news_content[$j]); // "\r" = mac/os
  			$news_content[$j] = str_replace(chr(10), "", $news_content[$j]); // "\n" = unix
			}
			//affichage
			print_news_title($news_content[0]); //affichage de l'entete de la news
			//affichege illustration
			$illus_path = $news_dir.$news_file.'.jpg';
			if(file_exists($illus_path)) {
			  $dim = getimagesize($illus_path);
		    print("<table border=\"0\" cellpadding=\"0\" cellspacing=\"5\" width=\"100%\"><tr align=\"left\" valign=\"top\"><td><img alt=\"$news_file.jpg\" src=\"$illus_path\" $dim[3]></td><td class=\"n2\">".$news_content[4]."</td></tr></table>");
			}	else 
			  echo $news_content[4];
			//affichage signature avec lien et alignement � droite
			if($news_content[1] == 'webmaster')
			  $url = 'about.php';
			else 
  			$url = 'members.php?name='.$news_content[1];
      print( "<br><br><table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\"><tr><td class=\"newssign\">" );
      print( "[<a href=\"$url\">$news_content[2]</a>] post� le $news_content[3]" );  //�criture de la signature
      print( "</td></tr></table>" );  //fermeture table d'alignement
			print_news_end();  //fin news
		} else {              //puisqu'on affiche pas la news n�i
		  $nb_news_to_show++; //alors on va cherhcer une news plus loin
		}
	}

	//lien pour afficher les anciennes news
  print("<center><a href=\"old_news.php\">Consulter les anciennes news</a></center><br><br><br>");


	// ------------------------------------------------------------------------- //
	// Affiche les n derni�res discussions de Phorum.                            //
	// ------------------------------------------------------------------------- //
	// Auteur: J-Pierre DEZELUS                                                  //
	// Email:  jpdezelus@phpinfo.net                                             //
	// Web:    http://www.phpinfo.net/                                           //
	// ------------------------------------------------------------------------- //

	$cfgRep   = "forum/";
	$cfgRead  = "read.php";

	$nbMsgForum = 10; // Nbre de discussions � afficher

	// connexion � la base
	db_connexion();

	print_news_title("Les $nbMsgForum derniers messages post�s sur le forum<br>");

	// Affichage des fils de discussion et du nombre de r�ponses
	$sql  = "SELECT id,datestamp,subject,author,thread ";
	$sql .= "FROM ".$forum_table." ";
	$sql .= "WHERE approved = 'Y' ";
	$sql .= "ORDER BY id DESC LIMIT 0,".$nbMsgForum;

	$resultat = mysql_db_query($forum_base, $sql);

	while ($message = mysql_fetch_array($resultat)) {

    $sql2  = "SELECT count(*) ";
  	$sql2 .= "FROM ".$forum_table." ";
  	$sql2 .= "WHERE approved = 'Y'";

  	$resultat2 = mysql_db_query($forum_base, $sql2);
  	$nbRep = mysql_fetch_array($resultat2);

  	$date  = substr($message[1], 8, 2) . "/";
  	$date .= substr($message[1], 5, 2) . " ";
  	$date .= substr($message[1], 11, 5);

  	echo "[".$date."] ";
  	if (strlen($message[2]) > 50)
      $msg = substr($message[2], 0, 50)." ...";
  	else
    	$msg = $message[2];

  	$lien = $cfgRep.$cfgRead."?f=1&loc=0&i=".$message[0]."&t=".$message[4];
  	echo "&nbsp;&nbsp;&nbsp;&nbsp;<a href=\"".$lien."\">".$msg."</a> <i>(par $message[3])</i><br>";
	}

	// Nb msg aujourd'hui
	$sql  = "SELECT COUNT(id) ";
	$sql .= "FROM ".$forum_table." ";
	$sql .= "WHERE approved = 'Y' AND datestamp LIKE '".date("Y-m-d")."%'";

	$resultat = mysql_db_query($forum_base, $sql);
	$enr = mysql_fetch_array($resultat);

	echo "<br>".($nb = $enr[0])." message".($nb > 1 ? "s" : "");
	echo " post�".($nb > 1 ? "s" : "")." aujourd'hui";

	// Nb msg hier
	$date = date("d/m/Y");
	$elts = explode("/", $date);
	$hier = mktime(0, 0, 0, $elts[1], $elts[0]-1, $elts[2]);

	$sql  = "SELECT COUNT(id) ";
	$sql .= "FROM ".$forum_table." ";
	$sql .= "WHERE approved = 'Y' AND datestamp LIKE '".date("Y-m-d", $hier)."%'";

	$resultat = mysql_db_query($forum_base, $sql);
	$enr = mysql_fetch_array($resultat);
	echo " [".$enr[0]." hier]";
	
	print_news_end();
	
  //affichage du bas	
  print_footer();
	
?>
