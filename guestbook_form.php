<?


require_once('design.inc.php');


//fonction qui vérifie la validité d'une adresse e-mail et renvoie une chaine nulle si elle est fausse
function mail_check(&$mail_address) {
    if(!eregi("([_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)+)", $mail_address))	
		    $mail_address = '';
}

//fonction qui formate un texte pour une utilisation dans une base de données
//tous les espaces sont remplacés par des "<br>" et tous les tags htlm sont supprimés
function text_check(&$text) {
  //remplacement des retours chariots par <br> en fonction de l'OS
	$text = str_replace(chr(13).chr(10), "<br>", $text); // "\r\n" = windows
 	$text = str_replace(chr(13), "<br>", $text); // "\r" = mac/os
 	$text = str_replace(chr(10), "<br>", $text); // "\n" = unix
	//on supprimer les 32 premiers caractères non imprimables de le table ASCII
	$text = preg_replace("/\\x0|[\x01-\x1f]/U", "", $text);
	//conversion <br> -> \n
	$text = str_replace("<br>", "\n", $text);
  //on supprime les espaces de debut et fin, et les slash
  $text = stripslashes(trim($text));
  //on remplace ensuite les braquets
	$text = str_replace(">", "&gt;", $text);
	$text = str_replace("<", "&lt;", $text);
	//reconversion
	$text = str_replace("\n", "<br>", $text);
  //on remplace les doubles quotes par leur équivalent html
	$text = str_replace("\"", "&quot;", $text);
  //ajout d'un espace insécable devant les ponctuations doubles	
	//$comt_text = eregi_replace("(( |(&nbsp;))*)([?!:;]{1})", "&nbsp;\\2", $comt_text);
	//$comt_author = eregi_replace("([ ]*)([?!:;]{1})", "&nbsp;\\2", $comt_author);

	//le texte ici doit être directement exploitable en HTML
}
	
	if($action == "post") { //si on vient de demander l'envoi de commentaire
    mail_check($m); //vérification de l'adresse e-mail
	  text_check($a); 		//formatage du text	
		text_check($t);

		if(($a != '') && ($t != '')) {   //si les données necessaires sont présentes
	    db_connexion(); //fonction de gestion de la connection à la base de données
  		$sql  = "INSERT INTO `$guestbook_table` ";
			$sql .= "(`id`,`show`,`post_date`,`author`,`mail`,`message`) ";
			$sql .= "VALUES ('','Y',NOW(),'$a','$m','$t')";
			mysql_db_query($guestbook_base, $sql);
			mysql_close();
			header('location: '.home.'guestbook.php');
		}
	}

  include('header.php');
	
  print("<center><a href=\"guestbook.php\">Voir le livre d'or</a><br><br></center>");
	
print_news_title("Signer le livre d'or.<br>");
	$txt = "";
  $txt .= "\n" ;
  $txt .= "Les champs &quot;Nom/Pseudo&quot; et &quot;Commentaire&quot; sont obligatoires.<br><br>\n" ;
  $txt .= "<form action=\"guestbook_form.php\" method=\"post\">\n" ;
  $txt .= "<input type=\"hidden\" name=\"action\" value=\"post\">\n" ;
  $txt .= "<table border=\"0\" cellpadding=\"0\" cellspacing=\"5\">\n" ;
  $txt .= "<tr>\n" ;
  $txt .= "<td class=\"n2\">Nom/Pseudo</td>\n" ;
  $txt .= "<td><input type=\"text\" name=\"a\" size=\"60\" maxlength=\"50\" class=\"field\"" ;
	if(isset($a)) $txt .= " value=\"$a\"" ;
	$txt .= "></td>\n" ;
  $txt .= "</tr>\n" ;
  $txt .= "<tr>\n" ;
  $txt .= "<td class=\"n2\">E-mail</td>\n" ;
  $txt .= "<td><input type=\"text\" name=\"m\" size=\"60\" maxlength=\"100\" class=\"field\"" ;
	if(isset($m)) $txt .= " value=\"$m\"" ;
	$txt .= "></td>\n" ;
  $txt .= "</tr>\n" ;
  $txt .= "<tr>\n" ;
  $txt .= "<td class=\"n2\">Commentaire</td>\n" ;
  $txt .= "<td><textarea rows=\"4\" cols=\"60\" name=\"t\" class=\"field\">";
	if(isset($t)) $txt .= $t ;
	$txt .= "</textarea></td>\n" ;
  $txt .= "</tr>\n" ;
  $txt .= "<tr>\n" ;
  $txt .= "<td>&nbsp;</td><td>\n" ;
  $txt .= "<input type=\"submit\" name=\"submit\" value=\"Ajouter le commentaire\" class=\"field\">&nbsp;&nbsp;&nbsp;<input class=\"field\" type=\"reset\" value=\"Effacer le formulaire\"><td>				\n" ;
  $txt .= "</tr>\n" ;
  $txt .= "</table>\n" ;
  $txt .= "</form>\n" ;
  $txt .= "\n" ;
print_news_content($txt);

  print("<center><a href=\"guestbook.php\">Voir le livre d'or</a><br><br></center>");
	
  include('footer.php');
	
?>
