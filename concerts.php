<?
require('glob_var.php');
require('mep.php');
?>


<!-- insertion en-tête commune + barre de navigation gauche -->
<? print_header(); ?>



<!-- debut de la zone de contenu principal -->

  <!-- insertion titre de la news -->
  <? print_news_title("Agenda des concerts<br>"); ?>
  <!-- insertion contenu de la news -->
	<br>
  <table border="0" cellpadding="2" cellspacing="1" width="100%">
    <tr class="head">
      <td>Date</td>
      <td>Lieu, contexte</td>
      <td>Ville, pays</td>
      <td align="center">Affiche</td>
      <td>Notes</td>
    </tr>
		<tr class="date">
      <td class="datedate">24 octobre 2002, 21h</td>
      <td class="dateinfo">Salsa Verte (en face du Van Gogh)</td>
      <td class="dateinfo">Valenciennes [59], France</td>
      <td class="datefoto">-</td>
      <td class="dateinfo">Avec Meaningless.<br>Entrée gratuite.</td>
    </tr>
		<tr><td colspan="5"><hr width="100%" size="1"></td></tr>
		<tr class="date">
      <td class="datedate">Mai 2003</td>
      <td class="dateinfo">Festival Imagin'Aire</td>
      <td class="dateinfo">Le Cateau [59], France</td>
      <td class="datefoto">-</td>
      <td class="dateinfo">Le festival, initialement prévu pour septembre 2002 est reporté au mois de mai 2003.</td>
    </tr>
  </table>
	<br>
	
<?
  print_news_end();
  print_news_title("Historique des concerts<br>");
?>
	<br>
	<table border="0" cellpadding="2" cellspacing="1" width="100%">
    <tr class="head">
      <td>Date</td>
      <td>Lieu, contexte</td>
      <td>Ville, pays</td>
      <td align="center">Photos</td>
      <td>Notes</td>
    </tr>
		<tr class="date">
      <td class="dateinfo">28 septembre 2002, 17h</td>
      <td class="dateinfo">Salle des sports</td>
      <td class="dateinfo">Féchain [59], France</td>
      <td class="datefoto">-</td>
      <td class="dateinfo">Concert dans le cadre du "2éme Carrefour Intercommunal de la Vie Associative (CIVA)" (CIVA ouvert de 14h00 à 18h30).<br>Entrée libre.</td>
    </tr>
		<tr><td colspan="5"><hr width="100%" size="1"></td></tr>
		<tr class="date">
      <td class="dateinfo">31 août 2002, 16h</td>
      <td class="dateinfo">ANNULE<br><s>Tribe festival (salle des fêtes, 98 rue Berlandois)</s></td>
      <td class="dateinfo"><s>Villereau [59], France</s></td>
      <td class="datefoto"><?/*<a href="data/thumbnls.php?date=21062002">[X]</a>*/?>-</td>
      <td class="dateinfo"><s>Festival métal avec Clown (métal/fusion), Agonia (metal/ambient), Shargath (today-metalcore), Wombat (métal/fusion) et QNL (neo-hardcore).<br>Entrée : 5 Euros.</s></td>
    </tr>
		<tr><td colspan="5"><hr width="100%" size="1"></td></tr>
		<tr class="date">
      <td class="dateinfo">28 août 2002, 21h</td>
      <td class="dateinfo">Van Gogh café</td>
      <td class="dateinfo">Valenciennes [59], France</td>
      <td class="datefoto">-</td>
      <td class="dateinfo">Entrée gratuite.</td>
    </tr>
		<tr><td colspan="5"><hr width="100%" size="1"></td></tr>
		<tr class="date">
      <td class="dateinfo">24 août 2002, 13h30</td>
      <td class="dateinfo">Scènes ouvertes du SIRA (place de la mairie ou salle des fêtes selon la météo)</td>
      <td class="dateinfo">Cantin [59], France</td>
      <td class="datefoto"><?/*<a href="data/thumbnls.php?date=21062002">[X]</a>*/?>-</td>
      <td class="dateinfo">Avec Lionel Caboche DJ (hip hop/R&amp;B), Entre Guillemets (pop/rock), Cactus in Love (unplugged), New World Project (dance/techno), Bud (grunge), Loreley (rock) et Positive Hate (métal).<br>Entrée libre.</td>
    </tr>
		<tr><td colspan="5"><hr width="100%" size="1"></td></tr>
		<tr class="date">
      <td class="dateinfo">26 juin 2002, 20h</td>
      <td class="dateinfo">Van Gogh café</td>
      <td class="dateinfo">Valenciennes [59], France</td>
      <td class="datefoto">-</td>
      <td class="dateinfo">Avec Awesome (métal cross-over).</td>
    </tr>
		<tr><td colspan="5"><hr width="100%" size="1"></td></tr>
		<tr class="date">
      <td class="dateinfo">22 juin 2002, 22h</td>
      <td class="dateinfo">Scènes ouvertes du SIRA</td>
      <td class="dateinfo">Féchain [59], France</td>
      <td class="datefoto"><a href="data/gig_pics.php?date=220602">[X]</a></td>
      <td class="dateinfo">&nbsp;</td>
    </tr>
		<tr><td colspan="5"><hr width="100%" size="1"></td></tr>
		<tr class="date">
      <td class="dateinfo">21 juin 2002, 21h</td>
      <td class="dateinfo">le Luciole café (en face de la gare)</td>
      <td class="dateinfo">Douai [59], France</td>
      <td class="datefoto"><a href="data/gig_pics.php?date=210602">[X]</a></td>
      <td class="dateinfo">Fête de la musique.<br>Deux set de suite !</td>
    </tr>
		<tr><td colspan="5"><hr width="100%" size="1"></td></tr>
		<tr class="date">
      <td class="dateinfo">15 juin 2002, 20h</td>
      <td class="dateinfo">le Flamingo (286, rue nationale)</td>
      <td class="dateinfo">Lille [59], France</td>
      <td class="datefoto"><a href="data/gig_pics.php?date=150602">[X]</a></td>
      <td class="dateinfo">&nbsp;</td>
    </tr>
		<tr><td colspan="5"><hr width="100%" size="1"></td></tr>
		<tr class="date">
      <td class="dateinfo">9 avril 2002</td>
     	<td class="dateinfo">Festival "Masny en Musique"</td>
    	<td class="dateinfo">Masny [59], France</td>
    	<td class="datefoto"><a href="data/gig_pics.php?date=090402">[X]</a></td>
    	<td class="dateinfo">Première partie de Khâro.<br>Happy birthday guiguit' !</td>
  	</tr>
		<tr><td colspan="5"><hr width="100%" size="1"></td></tr>
    <tr class="date">
      <td class="dateinfo">23 mars 2002</td>
     	<td class="dateinfo">5éme scènes ouvertes du SIRA</td>
    	<td class="dateinfo">Arleux [59], France</td>
    	<td class="datefoto"><a href="data/gig_pics.php?date=230302">[X]</a></td>
    	<td class="dateinfo">Premier concert de Funky Storm !<br>Avec Positive Hate, Cactus in Love, Lionel Caboche, New World Project, Entre Guillemets et Bud.</td>
  	</tr>
	</table>
	<br>
<?
	print_news_end();
	print_footer();
?>
