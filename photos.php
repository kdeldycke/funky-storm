<?

require_once('design.inc.php');

include('header.php');


print_news_title("Les photos des \"Evénements Funky\"<br>");
  $txt  = "" ;
  $txt .= "<br>\n" ;
  $txt .= "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Afin de prolonger l'expérience (la magie ?) Funky Storm jusque dans les chaumières, nous avons mis en place cette rubrique contenant tout le matériel pictural instantané des \"Evénements Funky\" comme les concerts, les festivals, les scènes ouvertes, les séances d'enregistrements, ...<br>\n" ;
  $txt .= "<br>\n" ;
  $txt .= "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cette rubrique est dédiée à toi, public, car tu auras la possibilité de t'exprimer et de nous faire savoir tes sentiments grâce à un système de commentaires (dont tu va faire bon usage, nous en sommes persuadés et nous te faisons confiance). C'est une manière de te remercier de ta bonne humeur et de ta joie de vivre, dont tu nous gratifie à chacun de nos concerts, nous poussant à toujours allez plus loin.<br>\n" ;
  $txt .= "<br>\n" ;
  $txt .= "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Avec un peu de chance, tu pourras (qui sait ?) te reconnaître dans le public et dans le cas où la photo t'indisposerait, fais nous le savoir, nous serons compréhensifs. Par contre, si tu possède des photos de Funky Storm en concert, n'hésite pas à nous les <a href=\"mailto:contact@funky-storm.com\">envoyer via e-mail</a>.<br>\n" ;
  $txt .= "<br>\n" ;
  $txt .= "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nous te donnons, public, rendez-vous au prochain concert !<br>\n" ;
  $txt .= "<br>\n" ;
  $txt .= "	<br>\n" ;
  $txt .= "	<table border=\"0\" cellpadding=\"2\" cellspacing=\"1\" width=\"100%\">\n" ;
  $txt .= "    <tr class=\"head\">\n" ;
  $txt .= "      <td>Evénement</td>\n" ;
  $txt .= "			<td>Date</td>\n" ;
  $txt .= "    </tr>\n" ;
  $txt .= "		<tr class=\"date\">\n" ;
  $txt .= "    	<td class=\"dateinfo\"><a href=\"data/gig_pics.php?date=220602\">Fête de la musique à Féchain</a></td>\n" ;
  $txt .= "      <td class=\"dateinfo\">22 juin 2002</td>\n" ;
  $txt .= "  	</tr>\n" ;
  $txt .= "		<tr><td colspan=\"5\"><hr width=\"100%\" size=\"1\"></td></tr>\n" ;
  $txt .= "		<tr class=\"date\">\n" ;
  $txt .= "    	<td class=\"dateinfo\"><a href=\"data/gig_pics.php?date=210602\">Fête de la musique au Luciole café</a></td>\n" ;
  $txt .= "      <td class=\"dateinfo\">21 juin 2002</td>\n" ;
  $txt .= "  	</tr>\n" ;
  $txt .= "		<tr><td colspan=\"5\"><hr width=\"100%\" size=\"1\"></td></tr>\n" ;
  $txt .= "		<tr class=\"date\">\n" ;
  $txt .= "    	<td class=\"dateinfo\"><a href=\"data/gig_pics.php?date=150602\">Concert au Flamingo café</a></td>\n" ;
  $txt .= "      <td class=\"dateinfo\">15 juin 2002</td>\n" ;
  $txt .= "  	</tr>\n" ;
  $txt .= "		<tr><td colspan=\"5\"><hr width=\"100%\" size=\"1\"></td></tr>\n" ;
  $txt .= "		<tr class=\"date\">\n" ;
  $txt .= "    	<td class=\"dateinfo\"><a href=\"data/gig_pics.php?date=090402\">Festival \"Masny en Musique\"</a></td>\n" ;
  $txt .= "      <td class=\"dateinfo\">9 avril 2002</td>\n" ;
  $txt .= "  	</tr>\n" ;
  $txt .= "		<tr><td colspan=\"5\"><hr width=\"100%\" size=\"1\"></td></tr>\n" ;
  $txt .= "    <tr class=\"date\">\n" ;
  $txt .= "     	<td class=\"dateinfo\"><a href=\"data/gig_pics.php?date=230302\">5éme scènes ouvertes du SIRA à Arleux</a></td>\n" ;
  $txt .= "      <td class=\"dateinfo\">23 mars 2002</td>\n" ;
  $txt .= "  	</tr>\n" ;
  $txt .= "	</table>\n" ;
  $txt .= "	<br>\n" ;
print_news_content($txt);


  include('footer.php');

?>
