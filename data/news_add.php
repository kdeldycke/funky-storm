<?
		
  // partie privée : vérifications d'usage
	require('../include/glob_var.php');
  require('../include/private.php');
	require('../include/mep.php');
	
	//constante definissant le fichier contenant le n° de la prochaine news
	$news_dir = 'news/';
	$news_count_file = 'count.int';
  $news_count_path = $news_dir.$news_count_file;
	
	if($action=='modif') { //si l'action consiste en la modification d'une news existante
    // formatage du nom du fichier contenant la news sous la forme "00(...)n.new"
		settype($news_number, string);	// convertion du n° de news en chaine
	  $news_file = str_repeat("0", 4 - strlen($news_number)).$news_number;
    $news_path = $news_dir.$news_file.'.new'; //creation du chemin de la nouvelle news
		if(file_exists($news_path)) {
  		$news_content = file($news_path);    //récuperation du fichier dans 1 tableau
 			//suppression des retours chariots
			for($i = 0; $i <= 3; $i++) {
				$news_content[$i] = str_replace(chr(13), "", $news_content[$i]);
  			$news_content[$i] = str_replace(chr(10), "", $news_content[$i]);
			}
			//transalation entre le tableau contenant les données de la news et les variables usuelles
			$news_title = $news_content[0];
			$news_text = $news_content[4];
			$news_author = $news_content[2];
			$news_date = $news_content[3];
			$news_text = str_replace("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;", '\t', $news_text); // "\t" = tab de 5
			//vérification de l'existence d'une illustration
			$img_path = $news_dir.$news_file.'.jpg';
			if(!file_exists($img_path))
			  $img_path = '';
		}
	} else if($action=='add') {   //si l'appel de la page est effectué par le formulaire 
	  //on fait le ménage et on formate le texte
		
	  //remplacement des retours chariots par <br> en fonction de l'OS
		$news_text = str_replace(chr(13).chr(10), "<br>", $news_text); // "\r\n" = windows
 		$news_text = str_replace(chr(13), "<br>", $news_text); // "\r" = mac/os
 		$news_text = str_replace(chr(10), "<br>", $news_text); // "\n" = unix

		//on supprimer les 32 premiers caractères non imprimables de le table ASCII
		$news_text = preg_replace("/\\x0|[\x01-\x1f]/U", "", $news_text);
		$news_title = preg_replace("/\\x0|[\x01-\x1f]/U", "", $news_title);
		$news_author = preg_replace("/\\x0|[\x01-\x1f]/U", "", $news_author);

		//conversion <br> -> \n
		$news_text = str_replace("<br>", "\n", $news_text);

		//on supprime les espaces de debut et fin, et les slash
		$news_text = stripslashes(strip_tags(trim($news_text), "<i>,<br>,<b>,<s>,<a>"));
		$news_title = stripslashes(strip_tags(trim($news_title), ""));
  	$news_author = stripslashes(strip_tags(trim($news_author), ""));
 
		//on remplace ensuite les braquets
		//$news_text = str_replace(">", "&gt;", $news_text);
		$news_title = str_replace(">", "&gt;", $news_title);
		$news_author = str_replace(">", "&gt;", $news_author);
		//$news_text = str_replace("<", "&lt;", $news_text);
		$news_title = str_replace("<", "&lt;", $news_title);
		$news_author = str_replace("<", "&lt;", $news_author);
		
		//reconversion
		$news_text = str_replace("\n", "<br>", $news_text);
  
	  //on remplace les doubles quotes par leur équivalent html
		//$news_text = str_replace("\"", "&quot;", $news_text);
		$news_title = str_replace("\"", "&quot;", $news_title);
		$news_author = str_replace("\"", "&quot;", $news_author);

		//ajout d'un espace insécable devant les ponctuations doubles
		//$news_text = eregi_replace("([ ]*)([?!:;]{1})", "&nbsp;\\2", $news_text);
		//$news_author = eregi_replace("([ ]*)([?!:;]{1})", "&nbsp;\\2", $news_author);
		//$news_title = eregi_replace("([ ]*)([?!:;]{1})", "&nbsp;\\2", $news_title);

  	//remplacement des tabulations
		$news_text = str_replace('\t', "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;", $news_text); // "\t" = tab de 5

	  //et on verifie la validité des infos
	  if($news_title=='')
	 	  $erreur = 1;
	  else if($news_text=='')
	 	  $erreur = 2;
	  else {  //contenu parfait
			if(!isset($news_number)) { //si on a pas déja un numéro de news = si on est pas en phase de modif 
	  	  //si le fichier d'index n'existe pas, on le fabrique
	  	  if(!file_exists($news_count_path))
	        touch($news_count_path);  //création d'un fichier vide
	  	  //incrementation du fichier count
    	  $file = fopen($news_count_path, 'r+'); 	//ouverture du fichier
	  		$news_number = fgets($file, 4096);  //récupération du contenu
	  		settype($news_number, integer);	// convertion du contenu en entier
	  		$news_number++;  //on incremente le compteur
	  		fseek($file, 0); //on se place au début du fichier
	  		fputs($file, $news_number); //on ecrit dans le fichier la nouvelle valeur
	  		fclose($file); //fermeture du fichier
			}
	  	// formatage du nom du fichier contenant la news sous la forme "00(...)n.new"
	  	settype($news_number, string);	// convertion du n° de news en chaine
	  	$news_file = str_repeat("0", 4 - strlen($news_number)).$news_number;
    	$news_path = $news_dir.$news_file.'.new'; //creation du chemin de la nouvelle news
	  	//récupération de la date actuelle + formatage si elle n'est pas existante
			if(!isset($news_date))
    	  $news_date =  date("d-m-Y H:i", mktime(date("H"), date("i"), date("s"), date("m"), date("d"), date("Y")));
	  	//y-a-t-il une signature ?
  		if($news_author == '')
	      $news_author = $name;
			//si le fichier existe, on le supprime
	    if(file_exists($news_path))
  		  unlink($news_path);
			//si on doit supprimer l'illustration
			if($illus_del)
			  unlink($news_dir.$news_file.'.jpg');
		  //enregistrement fichier
			if($illus_del)
			  unlink($news_dir.$news_file.'.jpg');			
	    touch($news_path); // creation du fichier contenant la nouvelle news
    	$news = fopen($news_path, 'r+'); 	//ouverture de la news
 	  	fputs($news, $news_title."\n");  // ligne 1: titre de la news
 	  	fputs($news, $name."\n");        // ligne 2: ID du membre  
	  	fputs($news, $news_author."\n"); // ligne 3: signature 
	  	fputs($news, $news_date."\n"); // ligne 4: date de la news
 	  	fputs($news, $news_text);        // ligne 5: texte
	  	fclose($news); //fermeture du fichier
	  }
	  if(!isset($erreur))	//retour maison ?
      header('location: '.home.'admins/menu.php?'.SID.'&ok=1');
  }
  //affichage formulaire
	print_header('', 1);
	//choix de l'intitulé du cadre en fonction du type d'action
	if($action=='modif')
	  $title = 'Modifier la news n°'.$news_number.' du '.$news_date;
	else
	  $title = 'Ecrire et poster une nouvelle news';
	print_news_title($title);
  //detection presence d'erreur et affichage
	if(isset($erreur)) {
    echo "<br><span class=\"warning\">Probléme : ";
    switch($erreur) {
      case 1: echo "Il n'y a pas de titre.";
              break;
      case 2: echo "Le corps de la news est vide.";
              break;
    }
		echo "</span><br>";
  }

?>
<br>
Il est possible de forcer les retours à la ligne grâce au tag HTML "&lt;br&gt;" (sans les guillemets).<br>
De même les tags &lt;i&gt;...&lt;/i&gt; (texte italique), &lt;b&gt;...&lt;/b&gt; (texte gras) et &lt;s&gt;...&lt;/s&gt; (texte barré) sont autorisés.<br>
Les tags ci-dessus sont uniquement pris en compte par le corps de la news (titre et signature y sont insensibles).<br>
Par contre les caractères HTML (genre "&...;") sont pris en compte pour tous les champs.<br>
Vous êtes autorisé à mettre des liens dans la news mais n'en abusez pas ! Si c'est un lien vers l'extérieur du site, n'oublier pas l'attribut <tt>target="_blank"</tt> et le <tt>http://</tt>.<br>
La commande "\t" (sans les guillemets) permet d'afficher une tabulation de 5 caractères.<br>
Les champs marqués d'une étoile rouge (<b><font color="#ff0000">*</font></b>) doivent obligatoirement etres remplis.<br>
<br>
<form action="data/news_add.php" method="multipart/form-data">
  <input type="hidden" name="action" value="add">
	<?
    if($news_date!='')
		  print("<input type=\"hidden\" name=\"news_date\" value=\"$news_date\">");
    if($news_number!='')
		  print("<input type=\"hidden\" name=\"news_number\" value=\"$news_number\">");
	?>
  <b>Titre de la news :</b><br>
  <br>
  &nbsp;&nbsp;&nbsp;&nbsp;<b><font color="#ff0000">*</font></b><input type="text" name="news_title" size="80" maxlength="150" class="field"<? if($news_title!='') echo ' value="'.$news_title.'"'; ?>><br>
  <br><br>
	<?
	  if($img_path!='') {
		  $dim = getimagesize($img_path);
		  print("<b>Illustration de la news :</b><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img alt=\"Illustration actuelle de la news ($news_file.jpg)\" src=\"data/$img_path\" $dim[3]><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type=\"checkbox\" class=\"field\" name=\"illus_del\">Supprimer cette illustration.<br><br><br>");
		}
	?>
  <b>Texte de la news :</b><br>
	<br>
  &nbsp;&nbsp;&nbsp;&nbsp;<b><font color="#ff0000">*</font></b><textarea rows="10" cols="80" name="news_text" class="field"><? if($news_text!='') echo $news_text; ?></textarea><br>
  <br><br>
  <b>Signature :</b><br>
	<br>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="news_author" size="80" maxlength="50" value="<? if($news_author=='') echo $name; else echo $news_author; ?>" class="field"><br>
  <br><br>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="submit" value="Poster la news" class="field"><br>
  <br>
</form>

<br><br>
<a href="admins/menu.php">Retour au menu de l'espace perso</a><br>
	
<?	
  print_news_end();
	print_footer();
?>
