<?
		
  // partie privée : vérifications d'usage
	require('glob_var.php');
  require('private.php');
	require('mep.php');
	require('db_func.php');

	
	print_header('', 1);
	print_news_title("Gestion du livre d'or<br>");

  db_connexion(); //fonction de gestion de la connection à la base de données
	
	$sql  = "SELECT id,show,author,post_date,message ";
	$sql .= "FROM ".$guestbook_table." ";
	$sql .= "ORDER BY post_date DESC";

	$result = mysql_db_query($guestbook_base, $sql);

	mysql_close();

	if(mysql_num_rows($result) == 0)
	  echo "Aucun commentaire n'a encore été posté dans ce livre d'or.";
	else {
	  print( "<table border=\"0\" cellpadding=\"2\" cellspacing=\"0\" width=\"100%\">\n" );
  	print( "  <tr>\n" );
  	print( "    <td>Comment</td>\n" );
  	print( "    <td>Author</td>\n" );
  	print( "    <td>Posting date</td>\n" );
  	print( "    <td>Action</td>\n" );
  	print( "  </tr>\n" );
  	while ($guestbook_item = mysql_fetch_array($result)) {
  		print( "  <tr>\n" );
  		print( "    <td>$guestbook_item[4]</td>\n" );
  		print( "    <td>$guestbook_item[2]</td>\n" );
  		print( "    <td>$guestbook_item[3]</td>\n" );
  		print( "    <td><a href=\"admins/guestbook.php?id=$guestbook_item[0]&a=d\">delete</a> | \n" );
  		print( "		    <a href=\"admins/guestbook.php?id=$guestbook_item[0]&a=h\">".(($guestbook_item[1] != 'Y') ? "un")."hide</a> |\n" );
  		print( "				<a href=\"admins/guestbook.php?id=$guestbook_item[0]&a=e\">edit</a></td>\n" );
  		print( "  </tr>\n" );
	  }
    print( "</table>" );			
	}
	
?>


<br><br>
<a href="admins/menu.php">Retour au menu de l'espace perso</a><br>
	
<?
	
  print_news_end();
	print_footer();
	
?>
