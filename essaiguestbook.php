<?


  require('include/glob_var.php');
	require('include/mep.php');
//	require('include/db_func.php');
	
	print_header();
  print("<center><a href=\"guestbook_form.php\">Signer le livre d'or</a><br><br></center>");
	print_news_title("Livre d'or.<br>");
	
//print("<b>-2</b>");

	$cfgHote  = "localhost";
	$cfgUser  = "root";
	$cfgPass  = "";
	$cfgBase  = "Current_FS";
	$cfgTable = "guestbook";

	// connexion à la base
	mysql_connect($cfgHote, $cfgUser, $cfgPass);

	$sql  = "SELECT author,mail,post_date,message ";
	$sql .= "FROM ".$cfgTable." ";
	$sql .= "WHERE show = 'Y' ";
	$sql .= "ORDER BY post_date DESC";
	
	$resultat = mysql_db_query($cfgBase, $sql);
	
 	while ($post_item = mysql_fetch_array($resultat)) {
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

	mysql_close();
	
  print_news_end();
  print("<center><a href=\"guestbook_form.php\">Signer le livre d'or</a><br><br></center>");	
  print_footer();
	
?>
