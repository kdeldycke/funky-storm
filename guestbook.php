<?


	require_once('design.inc.php');
	
include('header.php');

  print("<center><a href=\"guestbook_form.php\">Signer le livre d'or</a><br><br></center>");
	print_news_title("Livre d'or.<br>");
	
	$connect = mysql_connect($cfg_Host, $cfg_User, $cfg_Pass)
		  or die($sql_die_msg);

  $db = mysql_select_db($guestbook_base)
		  or die($sql_die_msg);

	$sql  = "SELECT author,mail,post_date,message ";
	$sql .= "FROM `$guestbook_table` ";
	$sql .= "WHERE `show`='Y' ";
	$sql .= "ORDER BY post_date DESC";

	$result = mysql_query($sql);

	mysql_close($connect);

	$txt = "";
	
	if(mysql_num_rows($result) == 0)
	  $txt .= "Aucun commentaire n'a encore été posté dans ce livre d'or.";
	else {
  	while ($post_item = mysql_fetch_array($result)) {
		  //$dateA  = substr($post_item[2], 0, 4);
  		//$dateM  = substr($post_item[2], 4, 2);
  		//$dateJ  = substr($post_item[2], 6, 2);
  		//$dateH  = substr($post_item[2], 8, 2);
  		//$dateMi = substr($post_item[2], 10, 2);
			//$post_item[2] = "$dateJ-$dateM-$dateA $dateH:$dateMi"; 
			$txt .= "$post_item[3]";
			$txt .= "<br><br><table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\"><tr><td class=\"newssign\">" ;
			if($post_item[1]=='')
			  $txt .= $post_item[0];
			else
			  $txt .= "<a href=\"mailto:$post_item[1]\">$post_item[0]</a>";
			$txt .= " le $post_item[2]";
      $txt .= "</td></tr></table><hr width=\"100%\" size=\"1\">";  //fermeture table d'alignement
	  }	
	}

	print_news_content($txt);
	
  print("<center><a href=\"guestbook_form.php\">Signer le livre d'or</a><br><br></center>");	
	
  include('footer.php');
	
?>
