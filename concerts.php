<?
require('include/glob_var.php');
require('include/mep.php');
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
      <td class="datedate">20 juin 2003</td>
      <td class="dateinfo">Festival</td>
      <td class="dateinfo">Sin-le-Noble [59], France</td>
      <td class="datefoto">-</td>
      <td class="dateinfo">Avec Svald, Lorelei et trois autres groupes à confirmer. Plus d'infos dans quelques semaines.<br></td>
    </tr>
		<tr><td colspan="5"><hr width="100%" size="1"></td></tr>
		<tr class="date">
      <td class="datedate">Novembre 2003</td>
      <td class="dateinfo">8éme scènes ouvertes du SIRA</td>
      <td class="dateinfo">Férin [59], France</td>
      <td class="datefoto">-</td>
      <td class="dateinfo">Plus d'infos dans quelques mois.<br></td>
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
      <td class="dateinfo">5 avril 2003, 17h</td>
      <td class="dateinfo">7éme scènes ouvertes du SIRA</td>
      <td class="dateinfo">Lécluse [59], France</td>
      <td class="datefoto"><a href="data/gig_pics.php?date=050403">[X]</a></td>
      <td class="dateinfo">Entrée libre.<br>Avec Gué des âmes, Svald, Brainstorm, Lorelei, Positive Hate et Bud.<br>Nous nous produirons vers 18h30.</td>
    </tr>
		<tr><td colspan="5"><hr width="100%" size="1"></td></tr>
    	<tr class="date">
      <td class="dateinfo">8 mars 2003, 22h</td>
      <td class="dateinfo">Minck café</td>
      <td class="dateinfo">Douai [59], France</td>
      <td class="datefoto"><a href="data/gig_pics.php?date=080303">[X]</a></td>
      <td class="dateinfo">Entrée gratuite.</td>
    </tr>
		<tr><td colspan="5"><hr width="100%" size="1"></td></tr>
		<tr class="date">
      <td class="dateinfo">8 février 2003, 20h</td>
      <td class="dateinfo">MJC/Maison pour tous</td>
      <td class="dateinfo">Lambres-lez-Douai [59], France</td>
      <td class="datefoto"><a href="data/gig_pics.php?date=080203">[X]</a></td>
      <td class="dateinfo">PAF: 3 euros.</td>
    </tr>
		<tr><td colspan="5"><hr width="100%" size="1"></td></tr>
		<tr class="date">
      <td class="dateinfo">24 octobre 2002, 21h</td>
      <td class="dateinfo">Salsa Verte</td>
      <td class="dateinfo">Valenciennes [59], France</td>
      <td class="datefoto">-</td>
      <td class="dateinfo">Avec Meaningless.</td>
    </tr>
		<tr><td colspan="5"><hr width="100%" size="1"></td></tr>
		<tr class="date">
      <td class="dateinfo">28 septembre 2002, 17h</td>
      <td class="dateinfo">Salle des sports</td>
      <td class="dateinfo">Féchain [59], France</td>
      <td class="datefoto">-</td>
      <td class="dateinfo">Concert dans le cadre du "2éme Carrefour Intercommunal de la Vie Associative (CIVA)".</td>
    </tr>
		<tr><td colspan="5"><hr width="100%" size="1"></td></tr>
		<tr class="date">
      <td class="dateinfo">31 août 2002, 16h</td>
      <td class="dateinfo">ANNULE<br><s>Tribe festival (salle des fêtes, 98 rue Berlandois)</s></td>
      <td class="dateinfo"><s>Villereau [59], France</s></td>
      <td class="datefoto"><?/*<a href="data/thumbnls.php?date=21062002">[X]</a>*/?>-</td>
      <td class="dateinfo"><s>Festival métal avec Clown (métal/fusion), Agonia (metal/ambient), Shargath (today-metalcore), Wombat (métal/fusion) et QNL (neo-hardcore).</s></td>
    </tr>
		<tr><td colspan="5"><hr width="100%" size="1"></td></tr>
		<tr class="date">
      <td class="dateinfo">28 août 2002, 21h</td>
      <td class="dateinfo">Van Gogh café</td>
      <td class="dateinfo">Valenciennes [59], France</td>
      <td class="datefoto">-</td>
      <td class="dateinfo">-</td>
    </tr>
		<tr><td colspan="5"><hr width="100%" size="1"></td></tr>
		<tr class="date">
      <td class="dateinfo">24 août 2002, 13h30</td>
      <td class="dateinfo">6éme scènes ouvertes du SIRA</td>
      <td class="dateinfo">Cantin [59], France</td>
      <td class="datefoto"><a href="data/gig_pics.php?date=240802">[X]</a></td>
      <td class="dateinfo">Avec Lionel Caboche DJ (hip hop/R&amp;B), Entre Guillemets (pop/rock), Cactus in Love (unplugged), New World Project (dance/techno), Bud (grunge), Loreley (rock) et Positive Hate (métal).</td>
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
      <td class="dateinfo">Concert avec la municipalité de Féchain</td>
      <td class="dateinfo">Féchain [59], France</td>
      <td class="datefoto"><a href="data/gig_pics.php?date=220602">[X]</a></td>
      <td class="dateinfo">-</td>
    </tr>
		<tr><td colspan="5"><hr width="100%" size="1"></td></tr>
		<tr class="date">
      <td class="dateinfo">21 juin 2002, 21h</td>
      <td class="dateinfo">le Luciole café</td>
      <td class="dateinfo">Douai [59], France</td>
      <td class="datefoto"><a href="data/gig_pics.php?date=210602">[X]</a></td>
      <td class="dateinfo">Fête de la musique.</td>
    </tr>
		<tr><td colspan="5"><hr width="100%" size="1"></td></tr>
		<tr class="date">
      <td class="dateinfo">15 juin 2002, 20h</td>
      <td class="dateinfo">le Flamingo</td>
      <td class="dateinfo">Lille [59], France</td>
      <td class="datefoto"><a href="data/gig_pics.php?date=150602">[X]</a></td>
      <td class="dateinfo">-</td>
    </tr>
		<tr><td colspan="5"><hr width="100%" size="1"></td></tr>
		<tr class="date">
      <td class="dateinfo">9 avril 2002</td>
     	<td class="dateinfo">Festival "Masny en Musique"</td>
    	<td class="dateinfo">Masny [59], France</td>
    	<td class="datefoto"><a href="data/gig_pics.php?date=090402">[X]</a></td>
    	<td class="dateinfo">Première partie de Khâro.</td>
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
