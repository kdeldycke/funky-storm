<?
require('include/glob_var.php');
require('include/mep.php');
?>
<!-- insertion en-t�te commune + barre de navigation gauche -->
<? print_header(); ?>
<!-- debut de la zone de contenu principal -->
  <!-- insertion titre de la news -->  <? print_news_title("Agenda des concerts<br>"); ?>
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
      <td class="datedate">19 juin 2004 � 18h30</td>
      <td class="dateinfo">Tapage Rockturne Festival</td>
      <td class="dateinfo">Salle polyvalente - Courchelette [59], France</td>
      <td class="datefoto">-</td>
      <td class="dateinfo">Avec Svald, Lorele�, Evil Skunk et Weed Killa.<br>PAF: 3 euros.<br></td>
    </tr>
    <tr><td colspan="5"><hr width="100%" size="1"></td></tr>
    <tr class="date">
      <td class="datedate">21 juin 2004</td>
      <td class="dateinfo">Dans la cour de l'espace Joliot Curie</td>
      <td class="dateinfo">Sin-le-Noble [59], France</td>
      <td class="datefoto">-</td>
      <td class="dateinfo">Funky Storm devrait se produire vers 22h.<br>Entr�e libre.<br></td>
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
      <td class="dateinfo">27 mars 2004 � 20h</td>
      <td class="dateinfo">CCL</td>
      <td class="dateinfo">Lille [59], France</td>
      <td class="datefoto">-</td>
      <td class="dateinfo">PAF: 3 euros.<br>Avec Doc.No<br></td>
    </tr>
       <tr><td colspan="5"><hr width="100%" size="1"></td></tr>
    <tr class="date">
      <td class="dateinfo">17 mars 2004 � partir de 20h30</td>
      <td class="dateinfo">Tremplin Funky Rock</td>
      <td class="dateinfo">Marly [59], France</td>
      <td class="datefoto">-</td>
      <td class="dateinfo">En premi�re partie des Blaireaux. Groupes participants au tremplin: Les Belmondos, Les Mine de rien et Oxes. PAF: 5 euros.<br></td>
    </tr>
      <tr><td colspan="5"><hr width="100%" size="1"></td></tr>
  <tr class="date">
      <td class="dateinfo">7 f�vrier 2004 � partir de 18h30</td>
      <td class="dateinfo">Triple concert � la MJC</td>
      <td class="dateinfo">Lambres-lez-Douai [59], France</td>
      <td class="datefoto">-</td>
      <td class="dateinfo">PAF: 3 euros.<br>Avec Svald et Brainstorm.<br></td>
    </tr>
    <tr><td colspan="5"><hr width="100%" size="1"></td></tr>
  <tr class="date">
      <td class="dateinfo">29 novembre 2003 � partir de 17h</td>
      <td class="dateinfo">8�mes sc�nes ouvertes du SIRA</td>
      <td class="dateinfo">Salle des f�tes de F�rin [59], France</td>
      <td class="datefoto">-</td>
      <td class="dateinfo">Entr�e libre.<br>Avec Kitchen Tool Set, Positiv'hate, Plug (ex-Bud), Brainstorm, Anonyme, Hourvary, Svald et Lorele�.<br></td>
    </tr>
    <tr><td colspan="5"><hr width="100%" size="1"></td></tr>
  <tr class="date">
      <td class="dateinfo">13 novembre 2003 � partir de 21h</td>
      <td class="dateinfo">Tribal Caf�</td>
      <td class="dateinfo">Lille [59], France</td>
      <td class="datefoto">-</td>
      <td class="dateinfo">Entr�e gratuite.<br>Concert en acoustique.<br></td>
    </tr>
  <tr><td colspan="5"><hr width="100%" size="1"></td></tr>
  <tr class="date">
      <td class="dateinfo">20 septembre 2003 � 20h30</td>
      <td class="dateinfo">Salle de la Durandale</td>
      <td class="dateinfo">L�cluse [59], France</td>
      <td class="datefoto"><a href="data/gig_pics.php?date=200903">[X]</a></td>
      <td class="dateinfo">Entr�e: 4,5 euros / 1,5 euros.<br>En premi�re partie de Rue Tabac Gars (Folk/Rock Celtique), dans le cadre des Journ�es du Patrimoine.<br></td>
    </tr>
  <tr><td colspan="5"><hr width="100%" size="1"></td></tr>
      <tr class="date">
  <td class="dateinfo">19 juillet 2003 � 23h</td>
      <td class="dateinfo">Pemberton Centre</td>
      <td class="dateinfo">Rushden [Northants], Royaume-Uni</td>
      <td class="datefoto"><a href="data/gig_pics.php?date=190703">[X]</a></td>
      <td class="dateinfo">Entr�e: �4.<br>Dans le cadre de la finale du tremplin local "Battle of the Bands".<br></td>
    </tr>
  <tr><td colspan="5"><hr width="100%" size="1"></td></tr>
    <tr class="date">
      <td class="dateinfo">14 juillet 2003 � 21h</td>
      <td class="dateinfo">ANNULE<br><s>A l'Abe� (119, Bld de la Libert�)</s></td>
      <td class="dateinfo"><s>Lille [59], France</s></td>
      <td class="datefoto">-</td>
      <td class="dateinfo"><s>Entr�e gratuite.<br>En ext�rieur.<br></s></td>
    </tr>
  <tr><td colspan="5"><hr width="100%" size="1"></td></tr>
  <tr class="date">
      <td class="dateinfo">21 juin 2003 � 23h</td>
      <td class="dateinfo">Devant le chateau</td>
      <td class="dateinfo">Cuincy [59], France</td>
      <td class="datefoto">-</td>
      <td class="dateinfo">Concert de cloture du marathon.<br>Entr�e libre.<br></td>
    </tr>
  <tr><td colspan="5"><hr width="100%" size="1"></td></tr>
  <tr class="date">
      <td class="dateinfo">21 juin 2003 � 21h</td>
      <td class="dateinfo">Dans la cour de l'�cole primaire</td>
      <td class="dateinfo">F�chain [59], France</td>
      <td class="datefoto">-</td>
      <td class="dateinfo">Concert avec la municipalit� de F�chain pour la f�te de la musique.<br>Avec Anonymes (vers 22h30).<br>Entr�e libre.<br></td>
    </tr>
  <tr><td colspan="5"><hr width="100%" size="1"></td></tr>
  <tr class="date">
      <td class="dateinfo">20 juin 2003 � partir de 19h</td>
      <td class="dateinfo">Dans la cour de l'espace Joliot Curie</td>
      <td class="dateinfo">Sin-le-Noble [59], France</td>
      <td class="datefoto"><a href="data/gig_pics.php?date=200603">[X]</a></td>
      <td class="dateinfo">Avec X-project (reggae/ragga), Monkey Balls (rock/blues), Svald (rock alternatif), Saudade (latino/funk), Loreley (rock ind�), Yovo Percussions (tribal), Hillal (percussions du Maghreb) et les animateur de la petite enfance (chansons).<br>Entr�e libre.<br></td>
    </tr>
  <tr><td colspan="5"><hr width="100%" size="1"></td></tr>
  <tr class="date">
      <td class="dateinfo">14 juin 2003 � 22h</td>
      <td class="dateinfo">Minck caf�</td>
      <td class="dateinfo">Douai [59], France</td>
      <td class="datefoto">-</td>
      <td class="dateinfo">En version acoustique.<br>Entr�e gratuite.<br></td>
    </tr>
  <tr><td colspan="5"><hr width="100%" size="1"></td></tr>
    <tr class="date">
      <td class="dateinfo">24 mai 2003, 21h</td>
      <td class="dateinfo">Van Gogh caf�</td>
      <td class="dateinfo">Valenciennes [59], France</td>
      <td class="datefoto"><a href="data/gig_pics.php?date=240503">[X]</a></td>
      <td class="dateinfo">Avec DOC.NO pour leur premier concert<br></td>
    </tr>
    <tr><td colspan="5"><hr width="100%" size="1"></td></tr>
  <tr class="date">
      <td class="dateinfo">5 avril 2003, 17h</td>
      <td class="dateinfo">7�me sc�nes ouvertes du SIRA</td>
      <td class="dateinfo">L�cluse [59], France</td>
      <td class="datefoto"><a href="data/gig_pics.php?date=050403">[X]</a></td>
      <td class="dateinfo">Entr�e libre.<br>Avec Gu� des �mes, Svald, Brainstorm, Lorelei, Positive Hate et Bud.<br>Nous nous produirons vers 18h30.</td>
    </tr>
  <tr><td colspan="5"><hr width="100%" size="1"></td></tr>
    <tr class="date">
      <td class="dateinfo">8 mars 2003, 22h</td>
      <td class="dateinfo">Minck caf�</td>
      <td class="dateinfo">Douai [59], France</td>
      <td class="datefoto"><a href="data/gig_pics.php?date=080303">[X]</a></td>
      <td class="dateinfo">Entr�e gratuite.</td>
    </tr>
  <tr><td colspan="5"><hr width="100%" size="1"></td></tr>
    <tr class="date">
      <td class="dateinfo">8 f�vrier 2003, 20h</td>
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
      <td class="dateinfo">F�chain [59], France</td>
      <td class="datefoto">-</td>
      <td class="dateinfo">Concert dans le cadre du "2�me Carrefour Intercommunal de la Vie Associative (CIVA)".</td>
    </tr>
  <tr><td colspan="5"><hr width="100%" size="1"></td></tr>
    <tr class="date">
      <td class="dateinfo">31 ao�t 2002, 16h</td>
      <td class="dateinfo">ANNULE<br><s>Tribe festival (salle des f�tes, 98 rue Berlandois)</s></td>
      <td class="dateinfo"><s>Villereau [59], France</s></td>
      <td class="datefoto"><?/*<a href="data/thumbnls.php?date=21062002">[X]</a>*/?>-</td>
      <td class="dateinfo"><s>Festival m�tal avec Clown (m�tal/fusion), Agonia (metal/ambient), Shargath (today-metalcore), Wombat (m�tal/fusion) et QNL (neo-hardcore).</s></td>
    </tr>
  <tr><td colspan="5"><hr width="100%" size="1"></td></tr>
    <tr class="date">
      <td class="dateinfo">28 ao�t 2002, 21h</td>
      <td class="dateinfo">Van Gogh caf�</td>
      <td class="dateinfo">Valenciennes [59], France</td>
      <td class="datefoto">-</td>
      <td class="dateinfo">-</td>
    </tr>
  <tr><td colspan="5"><hr width="100%" size="1"></td></tr>
    <tr class="date">
      <td class="dateinfo">24 ao�t 2002, 13h30</td>
      <td class="dateinfo">6�me sc�nes ouvertes du SIRA</td>
      <td class="dateinfo">Cantin [59], France</td>
      <td class="datefoto"><a href="data/gig_pics.php?date=240802">[X]</a></td>
      <td class="dateinfo">Avec Lionel Caboche DJ (hip hop/R&amp;B), Entre Guillemets (pop/rock), Cactus in Love (unplugged), New World Project (dance/techno), Bud (grunge), Loreley (rock) et Positive Hate (m�tal).</td>
    </tr>
  <tr><td colspan="5"><hr width="100%" size="1"></td></tr>
    <tr class="date">
      <td class="dateinfo">26 juin 2002, 20h</td>
      <td class="dateinfo">Van Gogh caf�</td>
      <td class="dateinfo">Valenciennes [59], France</td>
      <td class="datefoto">-</td>
      <td class="dateinfo">Avec Awesome (m�tal cross-over).</td>
    </tr>
  <tr><td colspan="5"><hr width="100%" size="1"></td></tr>
    <tr class="date">      <td class="dateinfo">22 juin 2002, 22h</td>
      <td class="dateinfo">Concert avec la municipalit� de F�chain</td>
      <td class="dateinfo">F�chain [59], France</td>
      <td class="datefoto"><a href="data/gig_pics.php?date=220602">[X]</a></td>
      <td class="dateinfo">-</td>
    </tr>
  <tr><td colspan="5"><hr width="100%" size="1"></td></tr>
    <tr class="date">
      <td class="dateinfo">21 juin 2002, 21h</td>
      <td class="dateinfo">le Luciole caf�</td>
      <td class="dateinfo">Douai [59], France</td>
      <td class="datefoto"><a href="data/gig_pics.php?date=210602">[X]</a></td>
      <td class="dateinfo">F�te de la musique.</td>
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
      <td class="dateinfo">Premi�re partie de Kh�ro.</td>
    </tr>
  <tr><td colspan="5"><hr width="100%" size="1"></td></tr>
    <tr class="date">
        <td class="dateinfo">23 mars 2002</td>
       <td class="dateinfo">5�me sc�nes ouvertes du SIRA</td>
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
