<? 

  require_once('design.inc.php');
  require_once('config.inc.php');

  include('header.php');

	
	
// ------------------------------------------------------------------------- //
// Affiche des n dernières news.                                             //
// ------------------------------------------------------------------------- //

	// connexion à la base
	$connect = mysql_connect($cfg_Host, $cfg_User, $cfg_Pass)
		  or die($sql_die_msg);

  $db = mysql_select_db($news_base)
		  or die($sql_die_msg);
			
	$sql  = "SELECT id,title,text,author_id,author_sign,post_date,picture_name,show ";
	$sql .= "FROM `$news_table` ";
	$sql .= "WHERE `show`='Y' ";
	$sql .= "ORDER BY `id` DESC LIMIT 0,$nbNews";

	$resultat = mysql_query($sql);

  // pour chacune des news
	if(mysql_num_rows($result) == 0)
	  $txt = "Aucune news n'a encore été postée sur ce site.";
	else
	  while($news = mysql_fetch_array($resultat)) {
      print_news_title($news[1]);	  

  		$txt = $news[2];
		
	  	$pics_path = $NewsPicsPath.$news[6];
		
		  if(file_exists($pics_path)) {
		    $dim = getimagesize($pics_path);
		    $txt = "<table border=\"0\" cellpadding=\"0\" cellspacing=\"5\" width=\"100%\"><tr align=\"left\" valign=\"top\"><td><img alt=\"$pics_path\" src=\"$pics_path\" $dim[3]></td><td class=\"newscontent\">$txt</td></tr></table>";
		  }

  	  $db2 = mysql_select_db($users_base)
		    or die($sql_die_msg);
			
		  $sql2  = "SELECT id,user_page ";
		  $sql2 .= "FROM `$users_table` ";
		  $sql2 .= "WHERE `id`='$news[4]' ";

  		$news_writer = mysql_fetch_array(mysql_query($sql2));
		
		  if($news_writer[1] != '')
		    $sign = $news[4];
		  else 
 			  $sign = "<a href=\"$news_writer[1]\">$news[4]</a>";

		  $news_postdate = $news[5];
			
		  $txt .=	"<br><br><table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\"><tr>";
	    $txt .=	"<td class=\"newssign\">[$sign] posté le $news_postdate</td></tr></table>";
	  }

  print_news_content($txt);

	
	//lien pour afficher les anciennes news
  print("<center><a href=\"old_news.php\">Consulter les anciennes news</a></center><br><br><br>");

	

	// ------------------------------------------------------------------------- //
	// Affiche les n dernières discussions de Phorum.                            //
	// ------------------------------------------------------------------------- //

  $db = mysql_select_db($forum_base)
		  or die($sql_die_msg);
			
	print_news_title("Les $nbMsgForum derniers messages postés sur le forum<br>");

	// Affichage des fils de discussion et du nombre de réponses
	$sql  = "SELECT id,datestamp,subject,author,thread ";
	$sql .= "FROM `$forum_table` ";
	$sql .= "WHERE `approved`='Y' ";
	$sql .= "ORDER BY `id` DESC LIMIT 0,$nbMsgForum";

	$resultat = mysql_query($sql);

	  // pour chacune des news
	if(mysql_num_rows($result) == 0)
	  $txt = "Aucun message n'a encore été posté dans le forum.";
	else {
    while($message = mysql_fetch_array($resultat)) {
      $sql2  = "SELECT count(*) ";
  	  $sql2 .= "FROM `$forum_table` ";
  	  $sql2 .= "WHERE `approved`='Y'";

  	  $nbRep = mysql_fetch_array(mysql_query($sql2));

  	  $date  = substr($message[1], 8, 2) . "/";
  		$date .= substr($message[1], 5, 2) . " ";
  		$date .= substr($message[1], 11, 5);

  		echo "[".$date."] ";
  		if(strlen($message[2]) > 50)
        $msg = substr($message[2], 0, 50)." ...";
  	  else
    	  $msg = $message[2];

  	  $lien = $cfgRep.$cfgRead."?f=1&loc=0&i=".$message[0]."&t=".$message[4];
  	  $txt .= "&nbsp;&nbsp;&nbsp;&nbsp;<a href=\"".$lien."\">".$msg."</a> <i>(par $message[3])</i><br>";
	  }

	  // Nb msg aujourd'hui
	  $sql  = "SELECT COUNT(id) ";
	  $sql .= "FROM `$forum_table` ";
	  $sql .= "WHERE `approved`='Y' AND datestamp LIKE '".date("Y-m-d")."%'";

	  $enr = mysql_fetch_array(mysql_query($sql));

	  $txt .= "<br>".($nb = $enr[0])." message".($nb > 1 ? "s" : "");
  	$txt .= " posté".($nb > 1 ? "s" : "")." aujourd'hui";

	  // Nb msg hier
	  $elts = explode("/", date("d/m/Y"));
	  $hier = mktime(0, 0, 0, $elts[1], $elts[0]-1, $elts[2]);

	  $sql  = "SELECT COUNT(id) ";
  	$sql .= "FROM `$forum_table` ";
	  $sql .= "WHERE `approved`='Y' AND datestamp LIKE '".date("Y-m-d", $hier)."%'";

	  $enr = mysql_fetch_array(mysql_query($sql));
	  $txt .= " [".$enr[0]." hier]";

	}
		
 	mysql_close($connect);
	
  print_news_content($txt);
	
	
	
  //affichage du bas	
  include('footer.php');
	
?>
