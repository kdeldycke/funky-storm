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
// Fonction d'ouverture de connection à la base de donnée
//--------------------------------------------------------
//gérer les erreur ici avec arret du script si pb et affichage
//d'une page d'erreure appropié avec rediretion

  function db_connexion() {
	  $cfgHost  = "sql.free.fr";
		$cfgUser  = "www.funkystorm";
		$cfgPass  = "ruROcoB4";		
		@mysql_connect($cfgHote, $cfgUser, $cfgPass)
		  or die('Erreur SQL !'.$sql.'<br>'.mysql_error());
  }


	
//--------------------------------------------------------
// Fonction d'affichage du nombre de connectés simultané
//--------------------------------------------------------
/*
  function print_live_counter() {
    require("livecounter.php");
    $nb = nbc();
		if($nb > 1)
		  $p = 's';
    echo $nb." personne$p connectée$p";
  }
*/
	
	
//--------------------------------------------------------
// Fonction d'affichage pour mise en page
//--------------------------------------------------------

  //contenu de la barre juste sous le bandeau FS
  define (high_line_content, "Funky Storm est un groupe français de Fusion/Funk/Métal farandoleux, énergique et vivant.<br>");

 	function print_header($preloaded_img="", $private=0) {
  print( "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\" \"http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd\">" );
  print( "<html>" );
  print( "<head>" );
  print( "<title>&gt;&gt;&gt;&gt;&gt;&nbsp;&nbsp;FUNKY STORM&nbsp;&nbsp;&lt;&lt;&lt;&lt;&lt; {site officiel}</title>" );
  print( "<base href=\"");
	echo home;
	print("\">" );
  print( "<meta http-equiv=\"content-type\" content=\"text/html; charset=iso-8859-1\">" );
  print( "<meta http-equiv=\"content-style-type\" content=\"text/css\">" );
  print( "<meta name=\"generator\" content=\"HTML-Kit\">" );
  print( "<meta name=\"author\" content=\"Kévin DELDYCKE\">" );
  print( "<meta name=\"reply-to\" content=\"funkystorm@free.fr\">" );
  print( "<meta name=\"description\" content=\"Funky Storm, un groupe de fusion-funk-rock originaire du Nord de la France. Site officiel avec l'agenda des prochains concerts, les extraits des compos (mp3), des infos sur le groupe et la vie du groupe, etc...\">" );
  print( "<meta name=\"keywords\" content=\"funky, storm, musique, music, rock, funk, fusion, france, nord, groupe, band, artiste, artist, art, concert, mp3, download, wallpaper\">" );
	print( "<meta name=\"robots\" content=\"" );
	//si zone privée, référencement par bots autorisé
	if($private==1)
	  echo 'none';
	else
	  echo 'all';
	print( "\">" );
  print( "<meta name=\"revisit-after\" content=\"15 days\">" );
  print( "<link type=\"text/css\" rel=\"stylesheet\" href=\"include/style.css\" media=\"screen\">" );
  print( "<script type=\"text/javascript\" language=javascript src=\"include/common.js\">" );
  print( "  <!-- MM_reloadPage(true); //-->" );
  print( "</script>" );
  print( "</head>" );
  print( "<body");
	  if(isset($preloaded_img))
	  print(" onload=\"MM_preloadImages(".$preloaded_img.")\"");
	print( ">" );
  print( "<!-- table principale: lignes 100% -->" );
  print( "<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">" );
  print( "	<tr><td class=\"line\"><img alt=\"\" src=\"include/nothing.gif\" height=\"3\" width=\"1\"></td></tr>" );
  print( "	<!-- partie haute -->" );
  print( "  <tr>" );
  print( "    <td bgcolor=\"#ff9900\"><a href=\"".public_link('index.php')."\"><img alt=\"Retour à la page principale\" src=\"include/logo.gif\" height=\"100\" width=\"358\" border=\"0\"></a></td>" );
  print( "  </tr>" );
  print( "	<!-- barre esthetique -->" );
  print( "	<tr><td class=\"line\"><img alt=\"\" src=\"include/nothing.gif\" height=\"3\" width=\"1\"></td></tr>" );
  print( "	<!-- barre de progression -->" );
  print( "	<tr>" );
  print( "    <td class=\"b1\">" );
	echo high_line_content;
  print( "		</td>" );
  print( "  </tr>" );
  print( "	<!-- partie du milieu -->" );
  print( "  <tr>" );
  print( "    <td>" );
  print( "		  <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">" );
  print( "			  <tr>" );
  print( "					<!-- zone de navigation a gauche -->" );
  print( "				  <td valign=\"top\">" );
  print( "            <br>					" );
  print( "					  <table cellpadding=\"2\" width=\"130\" class=\"m0\">" );
  print( "  					  <tr class=\"m1\"><td>" );
  print( "							  PROCHAIN CONCERT<br>" );
  print( "							</td></tr>" );
  print( "							<tr class=\"c1\"><td>" );
  print( "							  <center>Sam. 28 septembre 2002<br>2éme CIVA<br>Féchain 59 - France<br></center>" );
  print( "								<br>" );
  print( "							</td></tr>" );
  print( "						</table>" );
  print( "						<br>" );
  print( "					  <table cellpadding=\"2\" width=\"130\" class=\"m0\">" );
  print( "							<tr class=\"m1\"><td>" );
  print( "							  MENU<br>" );
  print( "							</td></tr>" );
  print( "							<tr class=\"c1\"><td>" );
  print( "								<a href=\"".public_link('index.php')."\" class=\"m2\">&nbsp;&nbsp;&gt; les news<br></a>" );
  print( "								<a href=\"".public_link('histoire.php')."\" class=\"m2\">&nbsp;&nbsp;&gt; l'Histoire<br></a>" );
  print( "						  	<a href=\"".public_link('members.php')."\" class=\"m2\">&nbsp;&nbsp;&gt; les membres<br></a>" );
  print( "						  	<a href=\"".public_link('zik.php')."\" class=\"m2\">&nbsp;&nbsp;&gt; les compos<br></a>" );
  print( "  					  	<a href=\"".public_link('concerts.php')."\" class=\"m2\">&nbsp;&nbsp;&gt; les concerts<br></a>" );
  print( "  					  	<a href=\"".public_link('photos.php')."\" class=\"m2\">&nbsp;&nbsp;&gt; les photos<br></a>" );
  print( "  					  	<a href=\"".public_link('forum/')."\" class=\"m2\">&nbsp;&nbsp;&gt; le forum<br></a>" );
  print( "  					  	<a href=\"".public_link('contacts.php')."\" class=\"m2\">&nbsp;&nbsp;&gt; contacts<br></a>" );
  print( "  					  	<a href=\"".public_link('links.php')."\" class=\"m2\">&nbsp;&nbsp;&gt; liens<br></a>" );
  print( "  					  	<a href=\"".public_link('guestbook.php')."\" class=\"m2\">&nbsp;&nbsp;&gt; le livre d'or<br></a>" );
  print( "  					  	<a href=\"".public_link('about.php')."\" class=\"m2\">&nbsp;&nbsp;&gt; about this site<br></a>						" );
  print( "								<br>" );
  print( "							</td></tr>" );
  print( "						</table>" );
  print( "						<br>" );
  print( "						<br>" );
	print( "				</td>" );
  print( "					<!-- FIN: zone de navigation a gauche -->" );
  print( "					<!-- zone de contenu principale -->" );
  print( "					<td valign=\"top\">" );
  print( "					  <table border=\"0\" cellpadding=\"20\" cellspacing=\"0\" width=\"100%\"><tr><td>" );
  }

	function print_news_title($title) {
  print( "              <table cellpadding=\"4\" width=\"100%\" class=\"n0\">" );
	print( "                <tr><td class=\"n1\">$title</td></tr>" );
  print( "                <tr><td class=\"n2\">" );
	}
	
	function print_news_end() {
  print( "								</td></tr>" );
  print( "              </table>" );
  print( "							<br>" );
  print( "							<br>" );
	}

	function print_footer() {
  print( "					  <tr><td></table>" );
  print( "					</td>" );
  print( "			    <!-- FIN: zone de contenu principale -->" );
  print( "				</tr>" );
  print( "			</table>" );
  print( "		</td>" );
  print( "  </tr>" );
  print( "	<!-- barre esthetique -->" );
  print( "	<tr><td bgcolor=\"#000000\"><img alt=\"\" src=\"include/nothing.gif\" height=\"2\" width=\"1\"></td></tr>");
  print( "</table>" );
  print( "	<center>" );
  print( "	<table cellpadding=\"0\" cellspacing=\"0\" border=\"0\">" );
  print( "    <tr>" );
  print( "      <td align=\"right\" valign=\"top\"><img alt=\"\" src=\"include/diag1.gif\" height=\"13\" width=\"13\"></td>" );
  print( "      <td class=\"copy\">&copy; 2002 - Funky Storm - all rights reserved</td>" );
  print( "      <td align=\"left\" valign=\"top\"><img alt=\"\" src=\"include/diag2.gif\" height=\"13\" width=\"13\"></td>" );
  print( "    </tr>" );
  print( "	</table>" );
  print( "</center>" );
  print( "<br>" );
  print( "<span class=\"visit\" align=\"left\"><img src=\"http://perso0.free.fr/cgi-bin/wwwcount.cgi?df=www.funkystorm.dat&amp;dd=E&amp;display=counter&amp;ft=0&amp;tr=T&amp;trgb=ffffff\" alt=\"compteur\">&nbsp;&nbsp;visiteurs depuis le 23 juin 2002</span>" );
  //print( "<span class=\"visit\" align=\"right\">".print_live_counter()."</span><br>" );
  print( "</body>" );
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
