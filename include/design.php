<?



//--------------------------------------------------------
// fonction permettant, dans un espace perso, de detruire la session
// si on s'en va dans le domaine public.
// Le SID est automatiquement ajouté chez Free.
//--------------------------------------------------------

  function public_link($dest_page) {
    unset($pre_option); //initialisation variables
    unset($post_option);
		if(session_id() != '') {   //si on a une session = si on est dans un espace perso = si on a un nom de session
			$pre_option = 'admins/logout.php?url=';  //on ajoute la redirection vers le logout pour les liens publics
			$post_option = '&';
		}
	  return $pre_option.$dest_page.$post_option; //on retourne la chaine/lien
  }
	
	
	
//--------------------------------------------------------
// Fonction d'affichage pour mise en page
//--------------------------------------------------------

  //contenu de la barre juste sous le bandeau FS
  define (high_line_content, "Funky Storm est un groupe français de Fusion/Funk/Métal farandoleux, énergique et vivant.<br>");

 	function print_header($preloaded_img="", $private=0) {
	  print( "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\" \"http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd\">\n" );
  print( "\n" );
  print( "\n" );
  print( "<html>\n" );
  print( "\n" );
  print( "\n" );
  print( "<head>\n" );
  print( "\n" );
  print( "  <title>&gt;&gt;&gt;&gt;&gt;&nbsp;&nbsp;FUNKY STORM&nbsp;&nbsp;&lt;&lt;&lt;&lt;&lt; {site officiel}</title>\n" );
  print( "\n" );
  print( "<base href=\"".home."\">" );
  print( "\n" );
  print( "  <meta http-equiv=\"content-type\" content=\"text/html; charset=iso-8859-1\">\n" );
  print( "  <meta http-equiv=\"content-style-type\" content=\"text/css\">\n" );
  print( "\n" );
  print( "  <meta name=\"generator\" content=\"HTML-Kit\">\n" );
  print( "\n" );
  print( "  <meta name=\"author\" content=\"Kévin DELDYCKE\">\n" );
  print( "  <meta name=\"reply-to\" content=\"webmaster@funky-storm.com\">\n" );
  print( "  <meta name=\"description\" content=\"Funky Storm, un groupe de Fusion/Funk/Métal originaire du Nord de la France. Site officiel avec l'agenda des prochains concerts, les extraits des compos (mp3), des infos sur le groupe et la vie du groupe, etc...\">\n" );
  print( "  <meta name=\"keywords\" content=\"funky, storm, musique, music, rock, funk, groove, groovy, heavy, metal, hard, electrique, electric, fusion, france, nord, groupe, band, artiste, artist, art, concert, gig, mp3, download, wallpaper, festival, cafe, bar, scene\">\n" );
	print( "<meta name=\"robots\" content=\"" );
	//si zone privée, référencement par bots autorisé
	if($private==1)
	  echo 'none';
	else
	  echo 'all';
	print( "\">" );
  print( "  <meta name=\"revisit-after\" content=\"15 days\">\n" );
  print( "\n" );
  print( "  <link type=\"text/css\" rel=\"stylesheet\" href=\"include/design.css\" media=\"screen\">\n" );
  print( "\n" );
  print( "  <script type=\"text/javascript\" language=javascript src=\"include/common.js\">\n" );
  print( "  <!-- MM_reloadPage(true); //-->\n" );
  print( "  </script>\n" );
  print( "\n" );
  print( "</head>\n" );
  print( "\n" );
  print( "\n" );
  print( "<body background=\"include\back.gif\"");
	  if(isset($preloaded_img))
	  print(" onload=\"MM_preloadImages(".$preloaded_img.")\"");
	print( ">" );
  print( "\n" );
  print( "\n" );
  print( "<!-- Logo banner -->\n" );
  print( "<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\"><tr class=\"logobanner\">\n" );
  print( "  <td align=\"left\" background=\"include/logobg.jpg\"><a href=\"".public_link('index.php')."\"><img alt=\"Retour à la page principal\" src=\"include/logo.jpg\" height=\"120\" width=\"456\" border=\"0\"></a></td>\n" );
  print( "	<td align=\"right\" background=\"include/logobg.jpg\"><img alt=\"\" src=\"include/logoend.jpg\" height=\"120\" width=\"121\"></td>\n" );
  print( "</tr></table>" );
  print( "\n" );
  print( "\n" );
  print( "<!-- Top banner -->\n" );
  print( "<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n" );
  print( "  <tr class=\"topbanner\">\n" );
  print( "     <td valign=\"middle\">&nbsp;&nbsp;".high_line_content."</td>\n" );
  print( "     <td><img alt=\"\" src=\"include/slice2.gif\" height=\"16\" width=\"50\" align=\"top\"></td>\n" );
  print( "   </tr>\n" );
  print( "</table>\n" );
  print( "\n" );
  print( "\n" );
  print( "<br>\n" );
  print( "\n" );
  print( "\n" );
  print( "<!-- Under banner -->\n" );
  print( "<table border=\"0\" cellpadding=\"10\" cellspacing=\"0\" width=\"100%\"><tr valign=\"top\"><td>\n" );
  print( "	<!-- Verticalité gauche -->\n" );
  print( "	\n" );
  print( "	<!-- Prochain concert -->\n" );
  print( "	<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"145\">\n" );
  print( "    <tr class=\"boxheader\">\n" );
  print( "      <td align=\"left\" valign=\"top\"><img alt=\"\" src=\"include/round21.gif\" height=\"16\" width=\"8\"></td>\n" );
  print( "      <td align=\"center\" valign=\"middle\">PROCHAIN CONCERT</td>\n" );
  print( "      <td align=\"right\" valign=\"top\"><img alt=\"\" src=\"include/round22.gif\" height=\"16\" width=\"8\"></td>\n" );
  print( "    </tr>\n" );
  print( "	</table>\n" );
  print( "	<table border=\"0\" cellpadding=\"3\" cellspacing=\"1\" width=\"145\" bgcolor=\"#cccccc\">\n" );
  print( "		<tr class=\"boxtext\"><td>\n" );
  print( "		  <center>Sam. 28 septembre 2002<br>2éme CIVA<br>Féchain 59 - France<br></center>\n" );
  print( "		</td></tr>\n" );
  print( "	</table>\n" );
  print( "  <br>\n" );
  print( "	\n" );
  print( "	<!-- Menu de navigation -->\n" );
  print( "	<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"145\">\n" );
  print( "    <tr class=\"boxheader\">\n" );
  print( "      <td align=\"left\" valign=\"top\"><img alt=\"\" src=\"include/round21.gif\" height=\"16\" width=\"8\"></td>\n" );
  print( "      <td align=\"center\" valign=\"middle\">MENU</td>\n" );
  print( "      <td align=\"right\" valign=\"top\"><img alt=\"\" src=\"include/round22.gif\" height=\"16\" width=\"8\"></td>\n" );
  print( "    </tr>\n" );
  print( "	</table>\n" );
  print( "	<table border=\"0\" cellpadding=\"3\" cellspacing=\"1\" width=\"145\" bgcolor=\"#cccccc\">\n" );
  print( "		<tr class=\"boxtext\"><td>\n" );
  print( "			<a href=\"".public_link('index.php')."\">&nbsp;&nbsp;&gt; les news<br></a>\n" );
  print( "			<a href=\"".public_link('histoire.php')."\">&nbsp;&nbsp;&gt; l'Histoire<br></a>\n" );
  print( "		 	<a href=\"".public_link('members.php')."\">&nbsp;&nbsp;&gt; les membres<br></a>\n" );
  print( "		 	<a href=\"".public_link('zik.php')."\">&nbsp;&nbsp;&gt; les compos<br></a>\n" );
  print( "  	 	<a href=\"".public_link('concerts.php')."\">&nbsp;&nbsp;&gt; les concerts<br></a>\n" );
  print( "  	 	<a href=\"".public_link('photos.php')."\">&nbsp;&nbsp;&gt; les photos<br></a>\n" );
  print( "  	 	<a href=\"".public_link('forum/')."\">&nbsp;&nbsp;&gt; le forum<br></a>\n" );
  print( "  	 	<a href=\"".public_link('contacts.php')."\">&nbsp;&nbsp;&gt; contact<br></a>\n" );
  print( "  	 	<a href=\"".public_link('links.php')."\">&nbsp;&nbsp;&gt; liens<br></a>\n" );
  print( "  	 	<a href=\"".public_link('guestbook.php')."\">&nbsp;&nbsp;&gt; le livre d'or<br></a>\n" );
  print( "  	 	<a href=\"".public_link('about.php')."\">&nbsp;&nbsp;&gt; about this site<br></a>		\n" );
  print( "		</td></tr>\n" );
  print( "	</table>\n" );
  print( "	<br>\n" );
  print( "	\n" );
  print( "	</td><td>" );
  }

	function print_news_title($title) {
  print( "  <!-- News header -->\n" );
  print( "  <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n" );
  print( "    <tr class=\"newsheader\">\n" );
  print( "      <td><img alt=\"\" src=\"include/round1.gif\" height=\"10\" width=\"10\" align=\"top\"></td>\n" );
  print( "      <td valign=\"middle\">&nbsp; $title</td>\n" );
  print( "      <td><img alt=\"\" src=\"include/slice1.gif\" height=\"22\" width=\"55\" align=\"top\"></td>\n" );
  print( "    </tr>\n" );
  print( "	</table>" );
	}
	
	function print_news_content($content) {
  print( "	<!-- News content -->\n" );
  print( "  <table border=\"0\" cellpadding=\"4\" cellspacing=\"1\" width=\"100%\" bgcolor=\"#ff9933\">\n" );
  print( "    <tr><td class=\"newscontent\">\n" );
  echo $content;
  print( "		</td></tr>\n" );
  print( "  </table>\n" );
  print( "	<br>\n" );
  print( "	<br>" );
	}

	function print_footer() {
  print( "\n" );
  print( "  </td></tr>\n" );
  print( "</table>\n" );
  print( "\n" );
  print( "\n" );
  print( "<!-- Bottom banner -->\n" );
  print( "<table cellpadding=\"2\" cellspacing=\"0\" border=\"0\" width=\"100%\" bgcolor=\"#ff9933\"><tr>\n" );
  print( "\n" );
  print( "	<!-- Counter banner -->\n" );
  print( "	<td class=\"visitcounter\">\n" );
  print( "    <img src=\"http://perso0.free.fr/cgi-bin/wwwcount.cgi?df=www.funkystorm.dat&amp;dd=E&amp;display=counter&amp;ft=0&amp;tr=T&amp;trgb=ffffff\" alt=\"compteur\">&nbsp;&nbsp;visiteurs depuis le 23 juin 2002<br>		\n" );
  print( "	</td>\n" );
  print( "\n" );
  print( "	<!-- Copyright banner -->\n" );
  print( "	<td class=\"copyright\">\n" );
  print( "	  &copy; 2002 - Funky Storm - all rights reserved<br>\n" );
  print( "	</td>\n" );
  print( "\n" );
  print( "</tr></table>\n" );
  print( "\n" );
  print( "\n" );
  print( "\n" );
  print( "</body>\n" );
  print( "\n" );
  print( "\n" );
  print( "</html>" );
	}
	
	/*
  //récupération des statistiques
	if($private!=1) {
		$table="logezboo";
	  require ("write_logs.php");
	}
	*/
	
?>
