<?
		
	require_once('config.inc.php');
	require_once('design.inc.php');
	
	//on récupére la fin du chemin en cas de CSS
	$pic = explode("/", $pic);
	$pic = $pic[sizeof($pic)-1];
	$name = explode("/", $name);
	$name = $name[sizeof($name)-1];
	
	$photo_dir = "members/$name/";
	$photo_path = $photo_dir.$pic.'.jpg';
	
	//vérification de l'existance des variables
	if(!file_exists($photo_path) || ($name=='') || ($pic==''))
	  header('location: '.home.'members.php?name='.$name);

	//on fabrique un tableau contenant la liste des fichiers
	$handle = opendir($photo_dir); //ouvreture du repertoire contenant les photos 
	
	$file_list = array();
	while($file = readdir($handle))
    if(($file!='.') && ($file!='..') && (substr($file, strlen($file)-4, 4)=='.jpg')) {   //si c'est un fichier jpg, on prend !
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
	  if($file_list[$i] == $pic) {
		  if($i != 0)
				$prev = $file_list[$i - 1];
			if($i != $nb_images - 1)
			  $next = $file_list[$i + 1];
		}

	//affichage
	include('header.php');
  print_news_title(ucfirst($name).'<br>'); //affichage de l'entete de la news
	$txt = "";
	$txt .= '<center><br>';
  if(isset($prev))
   $txt .= "<a href=\"data/pic_view.php?name=$name&pic=$prev\">photo précédente</a>";
	else
    $txt .= "photo précédente";
	$txt .= " | <a href=\"members.php?name=$name\">retour sur la fiche du membre</a> | ";
	if(isset($next))
	  $txt .= "<a href=\"data/pic_view.php?name=$name&pic=$next\">photo suivante</a>";
	else
	  $txt .= "photo suivante";
  $txt .= '<br>';	
	$dim = getimagesize($photo_path);
  $txt .= "<br><img src=\"data/$photo_path\" alt=\"$pic\" $dim[3]><br><br></center>";
	print_news_content($txt);  //fin news	

	include('footer.php');
		
?>
