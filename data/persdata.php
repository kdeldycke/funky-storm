<?
	require('glob_var.php');
	require('private.php');
  require('mep.php');
	print_header('', 1);
	print_news_title("Modification des données personelles de $name<br>");
?>
<br>
Il est possible de forcer les retours à la ligne grâce au tag HTML "&lt;br&gt;" (sans les guillemets).<br>
De même le tag &lt;i&gt;&lt;/i&gt; pour la mise en italique du texte est fonctionnel.<br>
Les caractères HTML (genre "&...;") sont pris en compte pour tous les champs.<br>
La commande "\t" (sans les guillemets) permet d'afficher une tabulation.<br>
Il est interdit d'utiliser le caractère "¤".<br>
Il est possible de laisser des champs vides.<br>
<br>

<?
	
	//récuperation des definitions champs
	require('items.php');
		
	//constante de localisation des fichiers de données
  $data_path = 'members/'.$name.'/personal.txt';
  
	//récupération et affichage des données persos deja existantes
	if(file_exists($data_path)) { //si fichier de données perso inexistant
	  $perso_data = file($data_path);    //récuperation du fichier dans 1 tableau
	  for($j = 0; $j < sizeof($perso_data); $j++) {  //on scanne le tableau
		  $exist_item_content = explode('¤', $perso_data[$j]);  //separation de l'info de l'item en deux
			settype($exist_item_content[0], string);	//j'utilise des tableaux associatifs (d'ou la transformation int->string) car il me permettent d'avoir des "trous" dans les numéros de ligne
		  $exist_item["$exist_item_content[0]"] = $exist_item_content[1];	// on a ici un truc du genre $exist_item["5"] = "je m'appel vinc'"  
		  }
	}
	
?>
<form action="data/add_data.php" method="post">
<?
	//affichage 1 par 1 des champs non vides
	for($i=0; $i<$items_max; $i++) {
	  if($items[$i] != '') { //si l'item n'est pas vide
      unset($previous_data); //initialisation variable		
		  if(isset($exist_item["$i"])) //si il existait déja une entrée dans ce champs
			  $previous_data = $exist_item["$i"]; //alors on récupére sa valeur
      print("<b>$items[$i]</b><br><br>&nbsp;&nbsp;&nbsp;&nbsp;<input type=\"text\" name=\"item_$i\" size=\"50\" maxlength=\"1024\" value=\"$previous_data\" class=\"field\"><br><br><br>");
		}				
	}
?>	
	&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="submit" value="Enregistrer les modifications" class="field"><br>
	<br>
</form>
		
<br>
<a href="admins/menu.php">Retour au menu de l'espace perso</a><br>
	
<?	
  print_news_end();
	print_footer();
?>
