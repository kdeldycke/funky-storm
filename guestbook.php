<?

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


  require('glob_var.php');
	require('mep.php');

	$gb_base  = "www.funkystorm"; 	//configuration de la table du livre d'or
	$gb_table = "guestbook";
	
	if($action == "post") { //si on vient de demander l'envoi de commentaire
    mail_check($m); //vérification de l'adresse e-mail
	  text_check($a); 		//formatage du text	
		text_check($t);
		
		if(($a == '') || ($t == ''))
  		header('location: #sign');
		else {   //si les données necessaires sont présentes
	    db_connexion(); //fonction de gestion de la connection à la base de données
			$open_db = 1; //variable indiquant l'ouverture d'une connexion à la base de données
  		$sql  = "INSERT INTO `$gb_table` ";
			$sql .= "(`id`,`show`,`post_date`,`author`,`mail`,`message`) ";
			$sql .= "VALUES ('','Y',NOW(),'$a','$m','$t')";
			mysql_db_query($gb_base, $sql);
			unset($a);
			unset($m);
			unset($t);
		}
	}
	
	print_header();
  print("<center><a href=\"guestbook.php#sign\">Signer le livre d'or</a><br><br></center>");
	print_news_title("Livre d'or.<br>");
	
  if($open_db != 1) db_connexion(); 

	$sql  = "SELECT author,mail,post_date,message ";
	$sql .= "FROM $gb_table ";
	$sql .= "WHERE `show` = 'Y' ";
	$sql .= "ORDER BY post_date DESC";

	$result = mysql_db_query($gb_base, $sql);

	mysql_close();

	if(mysql_num_rows($result) == 0)
	  echo "Aucun commentaire n'a encore été posté dans ce livre d'or.";
	else {
  	while ($post_item = mysql_fetch_array($result)) {
		  //$dateA  = substr($post_item[2], 0, 4);
  		//$dateM  = substr($post_item[2], 4, 2);
  		//$dateJ  = substr($post_item[2], 6, 2);
  		//$dateH  = substr($post_item[2], 8, 2);
  		//$dateMi = substr($post_item[2], 10, 2);
			//$post_item[2] = "$dateJ-$dateM-$dateA $dateH:$dateMi"; 
			print("$post_item[3]");
			print("<br><br><table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\"><tr><td class=\"newssign\">" );
			if($post_item[1]=='')
			  print("$post_item[0]");
			else
			  print("<a href=\"mailto:$post_item[1]\">$post_item[0]</a>");
			print(" le $post_item[2]");
      print("</td></tr></table><hr width=\"100%\" size=\"1\">");  //fermeture table d'alignement
	  }	
	}
	
  print_news_end();	
  print( "<a name=\"sign\">" );
  print_news_title("Signer le livre d'or.<br>");
	
?>
Les champs &quot;Nom/Pseudo&quot; et &quot;Commentaire&quot; sont obligatoires.<br><br>
<form action="guestbook.php" method="post">
<input type="hidden" name="action" value="post">
<table border="0" cellpadding="0" cellspacing="5">
<tr>
<td class="n2">Nom/Pseudo</td>
<td><input type="text" name="a" size="60" maxlength="50" class="field"<? if(isset($a)) echo " value=\"$a\""; ?>></td>
</tr>
<tr>
<td class="n2">E-mail</td>
<td><input type="text" name="m" size="60" maxlength="100" class="field"<? if(isset($m)) echo " value=\"$m\""; ?>></td>
</tr>
<tr>
<td class="n2">Commentaire</td>
<td><textarea rows="4" cols="60" name="t" class="field"><? if(isset($t)) echo $t; ?></textarea></td>
</tr>
<tr>
<td>&nbsp;</td><td>
<input type="submit" name="submit" value="Ajouter le commentaire" class="field">&nbsp;&nbsp;&nbsp;<input class="field" type="reset" value="Effacer le formulaire"><td>				
</tr>
</table>
</form>

<?

  print_news_end();
  print_footer();
	
?>
