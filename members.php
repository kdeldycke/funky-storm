<?

  require('glob_var.php');
  require('mep.php');
	
	$members[] = "vincent";
	$members[] = "sylvain";
	$members[] = "maxence";
	$members[] = "guillaume";
	$members[] = "emeric";
	
	//demande affichage du membre ou affichage du groupe
  $existenz = 0; //initialisation: le membre n'existe pas
	if ($name != '') 	//si demande d'affichage des details d'un membre 
	  {
		  $name = strtolower($name);  //permet de faire la comparaison dans la meme casse
			for ($i=0; ($i<count($members)) && ($members[$i]!=$name); $i++); //on scanne tout le tableau jusqu'a la fin ou jusqu'a ce que le monbre est trouvé
			if($members[$i] == $name) { //menbre trouvé ?
			  $existenz = 1;  //membre trouvé !
				$member_id = $members[$i]; //sauvegarde de son id 
			}
	  }

	if($existenz == 0) {
	
    // insertion en-tête commune + barre de navigation gauche
    print_header("'data/members/gui_on.jpg','data/members/max_on.jpg','data/members/vin_on.jpg','data/members/emr_on.jpg','data/members/syl_on.jpg'");
    //debut de la zone de contenu principal
	  print_news_title("Les membres permanents de Funky Storm");
  	print( "<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Vous pouvez ici <i>admirer</i> les 5 musiciens de Funky Storm au travers de photos, où ils vous apparaîtront dans des positions les plus diverses et les plus insolites.<br>");
		print( "Ces même membres vous feront passer de l'amour à la haine, de la mélancolie à l'espoir et du rire à la pitié de part leurs réponses aussi farfelues que sincères, dans un questionnaire aux 72 questions pièges que les plus grands DRH de France et de Navarre nous envie.<br><br>" );
  	print( "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A prendre au x-ième degrés donc...<br><br>" );
    print( "		<table border=\"0\" cellpadding=\"0\" cellspacing=\"10\" width=\"100%\">\n" );
    print( "  	  <tr align=\"center\">\n" );
    print( "    	  <td width=\"20%\"><a onmouseout=\"MM_swapImgRestore()\" onmouseover=\"MM_swapImage('img0','','data/members/gui_on.jpg',1)\" href=\"members.php?name=guillaume\"><img name=\"img0\" alt=\"guillaume\" src=\"data/members/gui_off.jpg\" height=\"324\" width=\"84\" border=\"0\"><br>Guiguit'</a></td>\n" );
    print( "    		<td width=\"20%\"><a onmouseout=\"MM_swapImgRestore()\" onmouseover=\"MM_swapImage('img1','','data/members/max_on.jpg',1)\" href=\"members.php?name=maxence\"><img name=\"img1\" alt=\"maxence\" src=\"data/members/max_off.jpg\" height=\"324\" width=\"83\" border=\"0\"><br>Mask</a></td>\n" );
    print( "    		<td width=\"20%\"><a onmouseout=\"MM_swapImgRestore()\" onmouseover=\"MM_swapImage('img2','','data/members/vin_on.jpg',1)\" href=\"members.php?name=vincent\"><img name=\"img2\" alt=\"vincent\" src=\"data/members/vin_off.jpg\" height=\"324\" width=\"83\" border=\"0\"><br>Vince</a></td>\n" );
    print( "    		<td width=\"20%\"><a onmouseout=\"MM_swapImgRestore()\" onmouseover=\"MM_swapImage('img3','','data/members/emr_on.jpg',1)\" href=\"members.php?name=emeric\"><img name=\"img3\" alt=\"emeric\" src=\"data/members/emr_off.jpg\" height=\"324\" width=\"84\" border=\"0\"><br>Nemrik</a></td>\n" );
    print( "    		<td width=\"20%\"><a onmouseout=\"MM_swapImgRestore()\" onmouseover=\"MM_swapImage('img4','','data/members/syl_on.jpg',1)\" href=\"members.php?name=sylvain\"><img name=\"img4\" alt=\"sylvain\" src=\"data/members/syl_off.jpg\" height=\"324\" width=\"83\" border=\"0\"><br>Sylvien</a></td>\n" );
    print( "  		</tr>\n" );
    print( "		</table>\n" );
    print_news_end();
		
  } else {
	 
	  $personal_data_file = 'personal.txt';
	  // insertion en-tête commune + barre de navigation gauche
    print_header();
    print( "		<table cellpadding=\"4\" class=\"n0\">\n" );
    print( "      <tr>\n" );
    print( "        <td class=\"n1\" valign=\"top\">");
		$photo_member_dir = 'data/members/'.$member_id.'/'; //variable contenant le chemin des photos du membre par rapport au script courant
		$handle = opendir($photo_member_dir); //ouvreture du repertoire contenant les photos
		
		
		$file_list = array();
		while($file = readdir($handle))
      if(($file!='.') && ($file!='..') && (substr($file, strlen($file)-4, 4)=='.jpg'))  //si c'est un fichier jpg, on prend !
			  $file_list[] = $file;
		sort($file_list);
		$nb_images = count($file_list);
		for($i=0; $i<$nb_images; $i++) {
			$preview_file_path = $photo_member_dir.'preview/'.$file_list[$i];
			$dim = getimagesize($preview_file_path);
			$file_name = explode(".", $file_list[$i]);
			$file_name = $file_name[0];
      print("<a href=\"data/pic_view.php?name=$name&pic=$file_name\">");
			print("<img alt=\"cliquez pour une image plus grande\" src=\"".$preview_file_path."\" border=\"0\" ".$dim[3].">");
			print("</a><br><br>");
		}
    closedir($handle);  //fermeture du repertoire scanné
		print("</td>\n" );
    print( "        <td class=\"n2\">");	
		
		// affichage-formatage des infos persos	

  	//pour l'association item/intitulé
	  require('items.php');
	
	  //constante de localisation des fichiers de données
    $data_path = 'data/members/'.$member_id.'/'.$personal_data_file;
  
	  //récupération et affichage des données persos
	  if(!file_exists($data_path)) { //si fichier de données perso inexistant
	    print("<b>".$member_id."! Toi à qui cet espace perso est dédié, Qu'attend tu pour le remplir ?</b><br>signé: managueur.<br>"); //on gueule sur le membre !
	  } else {  //sinon on affiche les données
		  $perso_data = file($data_path);    //récuperation du fichier dans 1 tableau
		  for($j = 0; $j < sizeof($perso_data); $j++) {  //on scanne le tableau
		    $item_content = explode('¤', $perso_data[$j]);  //separation de l'info de l'item en deux
			  $item_def = $items[$item_content[0]];	// on caste le n° associé a la description du champ 
			  echo '<b>'.$item_def.'<br></b>&nbsp;&nbsp;&nbsp;'.$item_content[1].'<br><hr width="100%" size="1">';
		  }
	  }
		
		//fermeture tableau
    print( "      </td></tr>\n" );
    print( "    </table>\n" );
	}	
	
  //insertion du bas
  print_footer();


?>
