<?
//--------------------------------------------------------
// fonction permettant, dans un espace perso, de detruire la session
// si on s'en va dans le domaine public.
// Le SID est automatiquement ajouté chez Free.
//--------------------------------------------------------
  function public_link($dest_page) {
    unset($pre_option); //initialisation variables
    unset($post_option);
    if(session_id() != '')   //si on a une session = si on est dans un espace perso = si on a un nom de session
      $pre_option = 'admins/logout.php?url=';  //on ajoute la redirection vers le logout pour les liens publics
    return $pre_option.$dest_page; //on retourne la chaine/lien
  }


//--------------------------------------------------------
// Fonction d'affichage pour mise en page
//--------------------------------------------------------
  //contenu de la barre juste sous le bandeau FS
  define (high_line_content, "Funky Storm est un groupe français de Fusion/Funk/Rock farandoleux, énergique et vivant.<br>");
  
   function print_header($preloaded_img="", $private=0) {
  print( "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\" \"http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd\">" );
  print( "<html>" );
  print( "<head>" );
  print( "<title>&gt;&gt;&gt;&gt;&gt;&nbsp;&nbsp;FUNKY STORM&nbsp;&nbsp;&lt;&lt;&lt;&lt;&lt; {site officiel}</title>" );
  if(contexte == "phorum") {
    $relative_path = "../";
  } else {
    $relative_path = "";
    print( "<base href=\"");
    echo home;
    print("\">" );
  }
  print( "<meta http-equiv=\"content-type\" content=\"text/html; charset=iso-8859-1\">" );
  print( "<meta http-equiv=\"content-style-type\" content=\"text/css\">" );
  print( "<meta name=\"generator\" content=\"HTML-Kit\">" );
  print( "<meta name=\"reply-to\" content=\"funkystorm@free.fr\">" );
  print( "<meta name=\"description\" content=\"Funky Storm, un groupe de fusion-funk-rock originaire du Nord de la France. Site officiel avec l'agenda des prochains concerts, les extraits des compos (mp3), des infos sur le groupe et la vie du groupe, etc...\">" );
  print( "<meta name=\"keywords\" content=\"funky, storm, musique, music, rock, funk, fusion, france, nord, groupe, band, artiste, artist, art, concert, mp3, download, wallpaper\">" );
  print( "<meta name=\"robots\" content=\"" );
  //si zone privée, référencement par bots autorisé
  if($private == 1)
    echo 'none';
  else
    echo 'all';
  print( "\">" );
  print( "<meta name=\"revisit-after\" content=\"15 days\">" );
  print( "<link type=\"text/css\" rel=\"stylesheet\" href=\"".$relative_path."include/style.css\" media=\"screen\">" );
  if(contexte == "phorum") {
    print( "<link type=\"text/css\" rel=\"stylesheet\" href=\"".$relative_path."phorum/phorum.css\" media=\"screen\">" );
  }
  print( "<script type=\"text/javascript\" language=javascript src=\"".$relative_path."include/common.js\">" );
  print( "  <!-- MM_reloadPage(true); //-->" );
  print( "</script>" );
  print( "</head>" );
  print( "<body");
    if(isset($preloaded_img))
    print(" onload=\"MM_preloadImages(".$preloaded_img.")\"");
  print( ">" );
  print( "<!-- table principale: lignes 100% -->" );
  print( "<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">" );
  print( "  <tr><td class=\"line\"><img alt=\"\" src=\"".$relative_path."include/nothing.gif\" height=\"3\" width=\"1\"></td></tr>" );
  print( "  <!-- partie haute -->" );
  print( "  </table>" );
  print( "<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\"><tr bgcolor=\"#ff9900\">" );
  print( "  <td align=\"left\"> ");
  print( "  <a href=\"".public_link($relative_path.'index.php')."\">");
  print( "  <img alt=\"Retour à la page principale\" src=\"".$relative_path."include/logo.gif\" height=\"100\" width=\"358\" border=\"0\"></a></td>" );
  print( "  <td align=\"right\"><img alt=\"Explosive band !\" src=\"".$relative_path."include/goout.gif\" height=\"100\" width=\"188\" border=\"0\"></td>" );
  print( "</tr></table>" );  print( "<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">" );
  print( "  <!-- barre esthetique -->" );
  print( "  <tr><td class=\"line\"><img alt=\"\" src=\"".$relative_path."include/nothing.gif\" height=\"3\" width=\"1\"></td></tr>" );
  print( "  <!-- barre de progression -->" );
  print( "  <tr>" );
  print( "    <td class=\"b1\">" );
  echo high_line_content;
  print( "    </td>" );
  print( "  </tr>" );
  print( "  <!-- partie du milieu -->" );
  print( "  <tr>" );
  print( "    <td>" );
  print( "      <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">" );
  print( "        <tr>" );
  print( "          <!-- zone de navigation a gauche -->" );
  print( "          <td valign=\"top\">" );
  print( "            <br>          " );
  print( "            <table cellpadding=\"2\" width=\"130\" class=\"m0\">" );
  print( "              <tr class=\"m1\"><td>" );
  print( "                PROCHAIN CONCERT<br>" );
  print( "              </td></tr>" );
  print( "              <tr class=\"c1\"><td>" );  print( "                <center><b>Samedi 19 juin 2004 à 18h30</b><br>Tapage Rockturne Festival, Courchelette<br></center>" );
  print( "                <br>" );
  print( "              </td></tr>" );
  print( "            </table>" );
  print( "            <br>" );
  print( "            <table cellpadding=\"2\" width=\"130\" class=\"m0\">" );
  print( "              <tr class=\"m1\"><td>" );
  print( "                MENU<br>" );
  print( "              </td></tr>" );
  print( "              <tr class=\"c1\"><td>" );
  print( "                <a href=\"".public_link($relative_path.'index.php')."\" class=\"m2\">&nbsp;&nbsp;&gt; les news<br></a>" );
  print( "                <a href=\"".public_link($relative_path.'histoire.php')."\" class=\"m2\">&nbsp;&nbsp;&gt; l'Histoire<br></a>" );
  print( "                <a href=\"".public_link($relative_path.'members.php')."\" class=\"m2\">&nbsp;&nbsp;&gt; les membres<br></a>" );
  print( "                <a href=\"".public_link($relative_path.'zik.php')."\" class=\"m2\">&nbsp;&nbsp;&gt; les compos<br></a>" );
  print( "                <a href=\"".public_link($relative_path.'concerts.php')."\" class=\"m2\">&nbsp;&nbsp;&gt; les concerts<br></a>" );
  print( "                <a href=\"".public_link($relative_path.'photos.php')."\" class=\"m2\">&nbsp;&nbsp;&gt; les photos<br></a>" );
  print( "                <a href=\"".public_link($relative_path.'phorum/')."\" class=\"m2\">&nbsp;&nbsp;&gt; le forum<br></a>" );
  print( "                <a href=\"".public_link($relative_path.'contacts.php')."\" class=\"m2\">&nbsp;&nbsp;&gt; contacts<br></a>" );
  print( "                <a href=\"".public_link($relative_path.'links.php')."\" class=\"m2\">&nbsp;&nbsp;&gt; liens<br></a>" );
   print( "                <a href=\"".public_link($relative_path.'guestbook.php')."\" class=\"m2\">&nbsp;&nbsp;&gt; le livre d'or<br></a>" );
   print( "                <a href=\"".public_link($relative_path.'about.php')."\" class=\"m2\">&nbsp;&nbsp;&gt; about this site<br></a>" );
  print( "                <br>" );
  print( "              </td></tr>" );
  print( "            </table>" );
  print( "            <br>" );
  print( "            <br>" );
  print( "        </td>" );
  print( "          <!-- FIN: zone de navigation a gauche -->" );
  print( "          <!-- zone de contenu principale -->" );
  print( "          <td valign=\"top\">" );
  print( "            <table border=\"0\" cellpadding=\"20\" cellspacing=\"0\" width=\"100%\"><tr><td>" );
  }
  function print_news_title($title) {
  print( "              <table cellpadding=\"4\" width=\"100%\" class=\"n0\">" );
  print( "                <tr><td class=\"n1\">$title</td></tr>" );
  print( "                <tr><td class=\"n2\">" );
  }
  
  function print_news_end() {
  print( "                </td></tr>" );
  print( "              </table>" );
  print( "              <br>" );
  print( "              <br>" );
  }
  function print_footer() {
  if(contexte == "phorum") {
    $relative_path = "../";    
  } else {
    $relative_path = "";
  }
  print( "            <tr><td></table>" );
  print( "          </td>" );
  print( "          <!-- FIN: zone de contenu principale -->" );
  print( "        </tr>" );
  print( "      </table>" );
  print( "    </td>" );
  print( "  </tr>" );
  print( "  <!-- barre esthetique -->" );
  print( "  <tr><td bgcolor=\"#000000\"><img alt=\"\" src=\"".$relative_path."include/nothing.gif\" height=\"2\" width=\"1\"></td></tr>");
  print( "</table>" );
  print( "  <center>" );
  print( "  <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\">" );
  print( "    <tr>" );
  print( "      <td align=\"right\" valign=\"top\"><img alt=\"\" src=\"".$relative_path."include/diag1.gif\" height=\"13\" width=\"13\"></td>" );
  print( "      <td class=\"copy\">&copy; 2002 - Funky Storm - all rights reserved</td>" );
  print( "      <td align=\"left\" valign=\"top\"><img alt=\"\" src=\"".$relative_path."include/diag2.gif\" height=\"13\" width=\"13\"></td>" );
  print( "    </tr>" );
  print( "  </table>" );
  print( "</center>" );
  print( "<br>" );
  print( "<span class=\"visit\" align=\"left\"><img src=\"http://perso0.free.fr/cgi-bin/wwwcount.cgi?df=www.funkystorm.dat&amp;dd=E&amp;display=counter&amp;ft=0&amp;tr=T&amp;trgb=ffffff\" alt=\"compteur\">&nbsp;&nbsp;visiteurs depuis le 23 juin 2002</span>" );
  print( "</body>" );
  print( "</html>" );
  }
  
  
  
?>
