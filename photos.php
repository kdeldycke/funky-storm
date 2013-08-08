<?

require_once('design.inc.php');

include('header.php');


print_news_title("Les photos des \"Ev�nements Funky\"<br>");
  $txt  = "" ;
  $txt .= "<br>\n" ;
  $txt .= "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Afin de prolonger l'exp�rience (la magie ?) Funky Storm jusque dans les chaumi�res, nous avons mis en place cette rubrique contenant tout le mat�riel pictural instantan� des \"Ev�nements Funky\" comme les concerts, les festivals, les sc�nes ouvertes, les s�ances d'enregistrements, ...<br>\n" ;
  $txt .= "<br>\n" ;
  $txt .= "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cette rubrique est d�di�e � toi, public, car tu auras la possibilit� de t'exprimer et de nous faire savoir tes sentiments gr�ce � un syst�me de commentaires (dont tu va faire bon usage, nous en sommes persuad�s et nous te faisons confiance). C'est une mani�re de te remercier de ta bonne humeur et de ta joie de vivre, dont tu nous gratifie � chacun de nos concerts, nous poussant � toujours allez plus loin.<br>\n" ;
  $txt .= "<br>\n" ;
  $txt .= "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Avec un peu de chance, tu pourras (qui sait ?) te reconna�tre dans le public et dans le cas o� la photo t'indisposerait, fais nous le savoir, nous serons compr�hensifs. Par contre, si tu poss�de des photos de Funky Storm en concert, n'h�site pas � nous les <a href=\"mailto:contact@funky-storm.com\">envoyer via e-mail</a>.<br>\n" ;
  $txt .= "<br>\n" ;
  $txt .= "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nous te donnons, public, rendez-vous au prochain concert !<br>\n" ;
  $txt .= "<br>\n" ;
  $txt .= "	<br>\n" ;
  $txt .= "	<table border=\"0\" cellpadding=\"2\" cellspacing=\"1\" width=\"100%\">\n" ;
  $txt .= "    <tr class=\"head\">\n" ;
  $txt .= "      <td>Ev�nement</td>\n" ;
  $txt .= "			<td>Date</td>\n" ;
  $txt .= "    </tr>\n" ;
  $txt .= "		<tr class=\"date\">\n" ;
  $txt .= "    	<td class=\"dateinfo\"><a href=\"data/gig_pics.php?date=220602\">F�te de la musique � F�chain</a></td>\n" ;
  $txt .= "      <td class=\"dateinfo\">22 juin 2002</td>\n" ;
  $txt .= "  	</tr>\n" ;
  $txt .= "		<tr><td colspan=\"5\"><hr width=\"100%\" size=\"1\"></td></tr>\n" ;
  $txt .= "		<tr class=\"date\">\n" ;
  $txt .= "    	<td class=\"dateinfo\"><a href=\"data/gig_pics.php?date=210602\">F�te de la musique au Luciole caf�</a></td>\n" ;
  $txt .= "      <td class=\"dateinfo\">21 juin 2002</td>\n" ;
  $txt .= "  	</tr>\n" ;
  $txt .= "		<tr><td colspan=\"5\"><hr width=\"100%\" size=\"1\"></td></tr>\n" ;
  $txt .= "		<tr class=\"date\">\n" ;
  $txt .= "    	<td class=\"dateinfo\"><a href=\"data/gig_pics.php?date=150602\">Concert au Flamingo caf�</a></td>\n" ;
  $txt .= "      <td class=\"dateinfo\">15 juin 2002</td>\n" ;
  $txt .= "  	</tr>\n" ;
  $txt .= "		<tr><td colspan=\"5\"><hr width=\"100%\" size=\"1\"></td></tr>\n" ;
  $txt .= "		<tr class=\"date\">\n" ;
  $txt .= "    	<td class=\"dateinfo\"><a href=\"data/gig_pics.php?date=090402\">Festival \"Masny en Musique\"</a></td>\n" ;
  $txt .= "      <td class=\"dateinfo\">9 avril 2002</td>\n" ;
  $txt .= "  	</tr>\n" ;
  $txt .= "		<tr><td colspan=\"5\"><hr width=\"100%\" size=\"1\"></td></tr>\n" ;
  $txt .= "    <tr class=\"date\">\n" ;
  $txt .= "     	<td class=\"dateinfo\"><a href=\"data/gig_pics.php?date=230302\">5�me sc�nes ouvertes du SIRA � Arleux</a></td>\n" ;
  $txt .= "      <td class=\"dateinfo\">23 mars 2002</td>\n" ;
  $txt .= "  	</tr>\n" ;
  $txt .= "	</table>\n" ;
  $txt .= "	<br>\n" ;
print_news_content($txt);


  include('footer.php');

?>
