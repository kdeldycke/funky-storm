<?

require_once('private.php');
require_once('design.inc.php');
	
print_header('', 1);


print_news_title("Modification des donn�es personelles de $name<br>");
  $txt  = "";
  $txt .= "\n" ;
  $txt .= "<br>\n" ;
  $txt .= "Il est possible de forcer les retours � la ligne gr�ce au tag HTML \"&lt;br&gt;\" (sans les guillemets).<br>\n" ;
  $txt .= "De m�me le tag &lt;i&gt;&lt;/i&gt; pour la mise en italique du texte est fonctionnel.<br>\n" ;
  $txt .= "Les caract�res HTML (genre \"&...;\") sont pris en compte pour tous les champs.<br>\n" ;
  $txt .= "La commande \"\\t\" (sans les guillemets) permet d'afficher une tabulation.<br>\n" ;
  $txt .= "Il est interdit d'utiliser le caract�re \"�\".<br>\n" ;
  $txt .= "Il est possible de laisser des champs vides.<br>\n" ;
  $txt .= "<br>\n" ;

	//r�cuperation des definitions champs
	require('items.php');
		
	//constante de localisation des fichiers de donn�es
  $data_path = 'members/'.strtolower($name).'/personal.txt';
  
	//r�cup�ration et affichage des donn�es persos deja existantes
	if(file_exists($data_path)) { //si fichier de donn�es perso inexistant
	  $perso_data = file($data_path);    //r�cuperation du fichier dans 1 tableau
	  for($j = 0; $j < sizeof($perso_data); $j++) {  //on scanne le tableau
		  $exist_item_content = explode('�', $perso_data[$j]);  //separation de l'info de l'item en deux
			settype($exist_item_content[0], string);	//j'utilise des tableaux associatifs (d'ou la transformation int->string) car il me permettent d'avoir des "trous" dans les num�ros de ligne
		  $exist_item["$exist_item_content[0]"] = $exist_item_content[1];	// on a ici un truc du genre $exist_item["5"] = "je m'appel vinc'"  
		  }
	}
	
  $txt .= "<form action=\"data/add_data.php\" method=\"post\">" ;

	//affichage 1 par 1 des champs non vides
	for($i=0; $i<$items_max; $i++) {
	  if($items[$i] != '') { //si l'item n'est pas vide
      unset($previous_data); //initialisation variable		
		  if(isset($exist_item["$i"])) //si il existait d�ja une entr�e dans ce champs
			  $previous_data = $exist_item["$i"]; //alors on r�cup�re sa valeur
      $txt .= "<b>$items[$i]</b><br><br>&nbsp;&nbsp;&nbsp;&nbsp;<input type=\"text\" name=\"item_$i\" size=\"50\" maxlength=\"1024\" value=\"$previous_data\" class=\"field\"><br><br><br>" ;
		}				
	}
	
  $txt .= "	&nbsp;&nbsp;&nbsp;&nbsp;<input type=\"submit\" name=\"submit\" value=\"Enregistrer les modifications\" class=\"field\"><br>\n" ;
  $txt .= "	<br>\n" ;
  $txt .= "</form>\n" ;
  $txt .= "		\n" ;
  $txt .= "<br>\n" ;
  $txt .= "<a href=\"admins/menu.php\">Retour au menu de l'espace perso</a><br>\n" ;
	
	
  print_news_content($txt);
	
	print_footer();
	
?>
