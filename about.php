<?

require_once('design.inc.php');

include('header.php');

print_news_title("A propos du webmaster...<br>");
  $txt  = "";
  $txt .= "	<table border=\"0\" cellpadding=\"0\" cellspacing=\"5\" width=\"100%\">\n" ;
  $txt .= "  <tr align=\"left\" valign=\"top\">\n" ;
  $txt .= "    <td><img alt=\"Bonjour !\" src=\"data/webmaster.jpg\" height=\"150\" width=\"200\"></td>\n" ;
  $txt .= "    <td class=\"n2\">\n" ;
  $txt .= "		  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Que Dire ?...<br>\n" ;
  $txt .= "			<br>\n" ;
  $txt .= "			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Je tiens tout de même à préciser que ce message apparemment pathétique n'est en aucun cas la connotation d'une hypothétique nature dépressive. Mais c'est réellement la question que je me pose à l'instant. Je tacherais d'écrire une description un peu plus détaillée sur <i>\"moi, ma vie, mon &oelig;uvre\"</i> un peu plus tard.<br>\n" ;
  $txt .= "			<br>\n" ;
  $txt .= "			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sinon, pour toutes questions (technique ou humaine), n'hésitez pas à m'écrire via le mail&nbsp;: <a href=\"mailto:webmaster@funky-storm.com\">webmaster@funky-storm.com</a><br>\n" ;
  $txt .= "			<br>\n" ;
  $txt .= "		</td>\n" ;
  $txt .= "  </tr>\n" ;
  $txt .= "  </table>\n" ;
print_news_content($txt);

	
print_news_title("A propos du développement...<br>");
  $txt  = "";
  $txt .= "	<table border=\"0\" cellpadding=\"0\" cellspacing=\"5\" width=\"100%\">\n" ;
  $txt .= "    <tr valign=\"top\">\n" ;
  $txt .= "      <td class=\"n2\">\n" ;
  $txt .= "			  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;La philosophie de développement est simple : elle consiste à fournir un code qui soit le plus possible conforme avec les standards (ceux du W3C notamment), et ce afin que le site puisse être compatible avec le plus grand nombre de navigateurs.<br>\n" ;
  $txt .= "	      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dans cette optique, nous utilisons les technologies suivantes :<br>\n" ;
  $txt .= "				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- PHP 4.1.1<br>\n" ;
  $txt .= "  			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- MySQL<br>\n" ;
  $txt .= "	      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Html 4.01<br>\n" ;
  $txt .= "				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Css 2.0<br>\n" ;
  $txt .= "				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Javascript<br>\n" ;
  $txt .= "				<br>\n" ;
  $txt .= "				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Si vous êtes en présence de ce qui semble être un bug quelconque (problème d'affichage, trou de sécurité, ...) n'hésitez pas à envoyer un mail au webmaster.<br>\n" ;
  $txt .= "			</td>\n" ;
  $txt .= "      <td>\n" ;
  $txt .= "			<center>\n" ;
  $txt .= "			<a href=\"http://www.php.net\" target=\"_blank\"><img alt=\"L'elePHPant\" src=\"include/php.gif\" height=\"80\" width=\"88\" border=\"0\"></a><br>\n" ;
  $txt .= "			<a href=\"http://www.mysql.com\" target=\"_blank\"><img alt=\"MySQL logo\" src=\"include/mysql.gif\" height=\"50\" width=\"88\" border=\"0\"></a><br>\n" ;
  $txt .= "			<a href=\"http://validator.w3.org/check/referer\" target=\"_blank\"><img alt=\"Valid HTML 4.01!\" src=\"include/vhtml401.gif\" height=\"31\" width=\"88\" border=\"0\"></a><br>\n" ;
  $txt .= "			<a href=\"http://jigsaw.w3.org/css-validator/check/referer\" target=\"_blank\"><img alt=\"Valid CSS 2!\" src=\"include/vcss.gif\" height=\"31\" width=\"88\" border=\"0\"></a><br>\n" ;
  $txt .= "  		<a href=\"http://www.phorum.org\" target=\"_blank\"><img alt=\"Phorum\" src=\"include/phorum.gif\" height=\"30\" width=\"90\" border=\"0\"></a><br>\n" ;
  $txt .= "			</center>\n" ;
  $txt .= "			</td>\n" ;
  $txt .= "    </tr>\n" ;
  $txt .= "  </table>\n" ;
print_news_content($txt);
	

print_news_title("What's news ?<br>");
  $txt  = "";
  $txt .= "	<b> octobre 2002: </b><br>\n" ;
  $txt .= "	admins: gestion des utilisateurs et des droits de modification du site via MySQL.<br>\n" ;
  $txt .= "	admins: possibilité de gérer le livre d'or.<br>\n" ;
  $txt .= "	site: modification du compteur live.<br>\n" ;
  $txt .= "	members: ajout d'un petit commentaire.<br>\n" ;
  $txt .= "	photos: modification du texte.<br>\n" ;
  $txt .= "	contact: e-mail de guillaume.<br>\n" ;
  $txt .= "	<br>\n" ;
  $txt .= "	<b>4 octobre 2002: n'oubliez pas de venir me voir demain soir.</b><br>\n" ;
  $txt .= "	photos: ajout des photos du concert à Féchain (22 juin 2002).<br>\n" ;
  $txt .= "  livre d'or: réparé !<br>\n" ;
  $txt .= "	<br>\n" ;
  $txt .= "	<b>29 septembre 2002: bonne fête à Michel, saint patron des ingénieurs informaticiens.</b><br>\n" ;
  $txt .= "	site: ajout d'un livre d'or.<br>\n" ;
  $txt .= "	<br>\n" ;
  $txt .= "	<b>15 septembre 2002: retour de la plage.</b><br>\n" ;
  $txt .= "	photos: ajout des photos au Luciole.<br>\n" ;
  $txt .= "	concert: nouvelle date (24 octobre).<br>\n" ;
  $txt .= "	liens: ajout du site de Meaningless.<br>\n" ;
  $txt .= "	contact: ajout des mails personnels des membres.<br>\n" ;
  $txt .= "	<br>\n" ;
  $txt .= "	<b>9 septembre 2002: horoscope cette semaine \"vous charmez de façon si naturelle\".</b><br>\n" ;
  $txt .= "	news: affichage des 5 dernières news.<br>\n" ;
  $txt .= "	forum: liste des 10 derniers posts en première page.<br>\n" ;
  $txt .= "	<br>\n" ;
  $txt .= "	<b>8 septembre 2002: fête du village.</b><br>\n" ;
  $txt .= "	photos: correction du bug \"pluriel\".<br>\n" ;
  $txt .= "	commentaires: améliorations du parser.<br>\n" ;
  $txt .= "	news: améliorations du parser.<br>\n" ;
  $txt .= "	<br>\n" ;
  $txt .= "	<b>6 septembre 2002: ce soir, week-end !</b><br>\n" ;
  $txt .= "	concert: ajout d'une date (5 octobre).<br>\n" ;
  $txt .= "	<br>\n" ;
  $txt .= "	<b>29 août 2002: enregistrement des parties de batteries.</b><br>\n" ;
  $txt .= "	compos: ajout de la reprise \"My lovely man\".<br>\n" ;
  $txt .= "  commentaires: ajout d'une note concernant la responsabilité des auteurs.<br>\n" ;
  $txt .= "	forum: meilleure vérification de la validité de l'adresse e-mail.<br>\n" ;
  $txt .= "	<br>\n" ;
  $txt .= "	<b>27 août 2002: il re-re-pleut :-(</b><br>\n" ;
  $txt .= "	compos: nouvelle mise en page (tu en pense quoi Sylvain ?).<br>\n" ;
  $txt .= "	compos: ajout des reprises.<br>\n" ;
  $txt .= "	compos: ajout de \"Rage in Wonderland\".<br>\n" ;
  $txt .= "	forum: correction du bug \"Répondre à ce message\".<br>\n" ;
  $txt .= "	<br>\n" ;
  $txt .= "	<b>20 août 2002: il re-pleut...</b><br>\n" ;
  $txt .= "	concert: nouvelle date (28 août).<br>\n" ;
  $txt .= "	about: ajout du lien vers Phorum.<br>\n" ;
  $txt .= "	news: autorisation de l'utilisation des balises HTML &lt;s&gt;...&lt;/s&gt;, &lt;b&gt;...&lt;/b&gt; et &lt;a href=\"\"&gt;...&lt;/a&gt;.<br>\n" ;
  $txt .= "	<br>\n" ;
  $txt .= "	<b>17 août 2002: joyeux anniversaire Sylvain ! (pense à changer ta page perso)</b><br>\n" ;
  $txt .= "	site: ajout d'un Phorum aprés une nuit (0h~6h) passé dans une petite chambre avec 2 PC surchauffés (Tmoy=35° dans la chambre !) à se battre avec les scripts. Kévin win !<br> \n" ;
  $txt .= "  photos, about: réglage de la mise en page pour ce §#?!$% d'IE5 qui gére le CSS comme un pied.<br>\n" ;
  $txt .= "	liens: ajout du lien vers Entre Guillemets.<br>\n" ;
  $txt .= "	news, membres, commentaires: remplacement des doubles quotes par leur équivalent HTML.<br>\n" ;
  $txt .= "	photos, membres: correction d'un petit bug qui n'affichait pas que les photos.<br>\n" ;
  $txt .= "	<br>\n" ;
  $txt .= "	<b>13 août 2002: retour du soleil sur nos contrées !</b><br>\n" ;
  $txt .= "  news: la page principale affiche maintenant les 7 dernières news.<br>\n" ;
  $txt .= "  news, membres, commentaires: problèmes avec le formatage automatique des ponctuations. Je désactive les RegEx. Note pour VM: prendre garde au Vince.<br>\n" ;
  $txt .= "	membres: nouvelles photos pour chacun !<br>\n" ;
  $txt .= "	photos: ajout du flyer du festival \"Masny en Musique\".<br> \n" ;
  $txt .= "	sécurité: les répertoires ne sont plus accessibles.<br> \n" ;
  $txt .= "	<br>\n" ;
  $txt .= "	<b>10 août 2002: hier c'était la St Amour... snif... (faut que je passe mon spleen à la machine)</b><br>\n" ;
  $txt .= "  concert: annulation du \"Tribe Festival\".<br>\n" ;
  $txt .= "	membres: ajout de quelques photos.<br>\n" ;
  $txt .= "	<br>\n" ;
  $txt .= "	<b>4 août 2002: hier, petite chouille sans prétention chez un ami éloigné de FunkyStorm que personne ne connaît et dont vous n'entendrez plus jamais parler.</b><br>\n" ;
  $txt .= "	photos:	nouvel \"Evénement Funky\" (concert à Masny).<br>\n" ;
  $txt .= "	photos:	nouvelle mise en page.<br>\n" ;
  $txt .= "	commentaires: correction d'un bug concernant les retours à la ligne.<br>\n" ;
  $txt .= "	news: les news avec photos sont correctement formatées.<br>\n" ;
  $txt .= "	news: correction du bug qui n'affichait pas les illustrations dans les anciennes news.<br>\n" ;
  $txt .= "	news: correction du bug des liens vers les auteurs des anciennes news.<br> \n" ;
  $txt .= "	about: petit espace pour la personne du webmaster.<br>\n" ;
  $txt .= "	<br>\n" ;
  $txt .= "	<b>2 août 2002: expérimentations vidéos avec les Thomas.</b><br>\n" ;
  $txt .= "	news: possibilité d'ajouter des illustrations.<br>\n" ;
  $txt .= "	photos: petit texte d'introduction à la rubrique.<br>\n" ;
  $txt .= "	photos:	correction du bug photo suivante/précédente (merci Thomas !).<br>\n" ;
  $txt .= "	membres: même bug, même solution.<br>\n" ;
  $txt .= "	site: correction de bugs linguistiques (grâce à Maître Riko).<br>\n" ;
  $txt .= "	<br>\n" ;
  $txt .= "	<b>31 juillet 2002: journée d'enregistrement chez Mask.</b><br>\n" ;
  $txt .= "	news, membres, commentaires: les ponctuations doubles (? ! ; :) sont automatiquement formatées (avec un espace insécable). Merci les RegEx !<br>\n" ;
  $txt .= "	concerts: nouvelle date (Tribe Festival).<br>\n" ;
  $txt .= "	liens: changement du commentaire sur le site d'Awesome (RIP).<br>  \n" ;
  $txt .= "  <br>\n" ;
  $txt .= "	<b>28 juillet 2002: hier on était chez Charlotte.</b><br>\n" ;
  $txt .= "	photos: la liste de photos affiche le nombre de commentaires ainsi que le dernier.<br>\n" ;
  $txt .= "	site: intégration des pages 404 et 403 dans l'interface du site.<br>\n" ;
  $txt .= "	site: la photo de l'histoire passe dans la rubrique photos.<br>\n" ;
  $txt .= "	histoire: nouvelle photo du groupe.<br>\n" ;
  $txt .= "  <br>\n" ;
  $txt .= "	<b>26 juillet 2002: on prospecte du coté de Cambrai ce soir.</b><br>\n" ;
  $txt .= "	site: ajout d'une nouvelle rubrique contenant les photos des \"Evénements Funky\". Il est possible d'ajouter des commentaires sur chacune des photos.<br>\n" ;
  $txt .= "  <br>\n" ;
  $txt .= "  <b>24 juillet 2002: ce soir repet' pour préparer l'enregistrement.</b><br>\n" ;
  $txt .= "	liens: ajout du lien vers Neonord.<br>\n" ;
  $txt .= "	about: détails sur le développement.<br>\n" ;
  $txt .= "	<br>\n" ;
  $txt .= "	<b>21 juillet 2002: hier soir c'était la chouille chez Flo'.</b><br>\n" ;
  $txt .= "	concert: report du festival en Mai 2003.<br>\n" ;
  $txt .= "	histoire: ajout de la photo du groupe.<br>\n" ;
  $txt .= "	membres: surnom sous les photos.<br>\n" ;
  $txt .= "	membres: intégration des photos haute qualité dans l'interface du site.<br>\n" ;
  $txt .= "	membres: liens vers les photos précedentes et suivantes (slide-show).<br>\n" ;
  $txt .= "	about: ephéméride pour chaque date.<br>\n" ;
  $txt .= "	<br>\n" ;
  $txt .= "	<b>19 juillet 2002: ce soir ma soeur fête son bac.</b><br>\n" ;
  $txt .= "	news: seules les 5 dernières news sont affichées.<br>\n" ;
  $txt .= "	news: les anciennes news sont accessibles via un lien en bas de page.<br>\n" ;
  $txt .= "	news: lors de la consultation des anciennes news, il est possible d'afficher la news précédente et suivante.<br>\n" ;
  $txt .= "	<br>\n" ;
  $txt .= "	<b>18 juillet 2002: hier c'était la fête à (ou de ?) Charlotte ;-)</b><br>\n" ;
  $txt .= "	membres: preview des photos de meilleur qualité.<br>\n" ;
  $txt .= "	admins: majuscule au nom des membres.<br>\n" ;
  $txt .= "	<br>\n" ;
  $txt .= "	<b>15 juillet 2002: je suis victime d'une inflammation généralisée de mon système ORL.</b><br>\n" ;
  $txt .= "  site: \"définition\" de Funky Storm sous le bandeau.<br>\n" ;
  $txt .= "  histoire: signature de l'auteur véritable.<br>\n" ;
  $txt .= "	admins: les news peuvent êtres supprimées.<br>\n" ;
  $txt .= "	<br>\n" ;
  $txt .= "	<b>14 juillet 2002: hier on était à Dour !</b><br>\n" ;
  $txt .= "	compos: ajout des copyright.<br>\n" ;
  $txt .= "	<br>\n" ;
  $txt .= "	<b>5 juillet 2002: bonne fête Antoine !</b><br>\n" ;
  $txt .= "	liens: correction du lien vers Awesome.<br>\n" ;
  $txt .= "	<br>\n" ;
  $txt .= "	<b>3 juillet 2002: bonne fête aux 3 brasseurs (ben oui, les thomas de masny + celui d'ex-Awesome).</b><br>\n" ;
  $txt .= "	contacts: délocalisation de la société de managment.<br>\n" ;
  $txt .= "	design: intégration du compteur en bas de page.<br>\n" ;
  $txt .= "	admins: modifications possible des news déjà postées.<br>\n" ;
  $txt .= "	<br>\n" ;
  $txt .= "	<b>23 juin 2002: l'été commence fort...</b><br>\n" ;
  $txt .= "	concert: changement des intitulés.<br>\n" ;
  $txt .= "	compos: \"Onomatopée\" devient la chanson au bon goût bulgare à la place de \"Phénoméne de mode\".<br>\n" ;
  $txt .= "	design: suppression du contour dans la section membres.<br>\n" ;
  $txt .= "	design: re-codage de la barre de copyright.<br>\n" ;
  $txt .= "	site: ajout de la page d'erreur 403.<br>\n" ;
  $txt .= "	site: correction de quelques fotes...<br>\n" ;
  $txt .= "	site: ajout d'un compteur de visites.<br>\n" ;
  $txt .= "	admins: ajout illustration.<br>\n" ;
  $txt .= "	admins: les pages de configuration ne sont plus prises en compte par les robots des moteurs de recherche.<br>\n" ;
  $txt .= "	admins: authentification avec IP supprimée (ça marchait pas avec AOL...).<br>\n" ;
  $txt .= "	admins: lors du ré-affichage du formulaire de news en cas d'erreur, les données précédentes sont conservés.<br>\n" ;
  $txt .= "  admins: fusion du formulaire et du script de traitement.<br>\n" ;
  $txt .= "	<br>	\n" ;
  $txt .= "	<b>18 juin 2002</b><br>\n" ;
  $txt .= "	concert: nouvelle date (23 août 2002).<br>\n" ;
  $txt .= "	design: réduction de l'entête.<br>\n" ;
  $txt .= "	bug: le lien vers l'auteur de la news fonctionne.<br>\n" ;
  $txt .= "	admins: prise en compte de tags HTML (&lt;br&gt; et &lt;i&gt;) et des caractères du type &...;<br>\n" ;
  $txt .= "	admins: gestion des tabulations '\\t'.<br>\n" ;
  $txt .= "	admins: message d'erreur si le titre ou le corps du texte est vide.<br>\n" ;
  $txt .= "	admins: avertissement si une opération s'est bien déroulée.<br>\n" ;
  $txt .= "	<br>	\n" ;
  $txt .= "	<b>17 juin 2002: R.A.S.</b><br>\n" ;
  $txt .= "	membres: cr&eacute;ations de \"preview\" pour les photos.<br>\n" ;
  $txt .= "	compos: ajout de \"ph&eacute;nom&egrave;ne de mode\".<br>\n" ;
  $txt .= "	compos: ajout d'illustrations.<br>\n" ;
  $txt .= "	news: la signature est en bas &agrave; droite et inclus un lien vers l'auteur.<br>\n" ;
  $txt .= "	news: ajout de l'heure du post.<br>\n" ;
  $txt .= "	<br>	\n" ;
  $txt .= "	<b>15 juin 2002: bonne fête à toutes les Germaine !</b><br>\n" ;
  $txt .= "  first public release: champagne !<br>	\n" ;
  $txt .= "	<br>\n" ;
print_news_content($txt);
	
	
print_news_title("TO DO list<br>"); ?>
	<pre>
	AVANT LA MISE ON-LINE:
	  supprimer le '&' de la variable post_option de la fonction public_link dans mep.php
	  modifier la variable globale home...
	  rétablir l'entregistrement statistique dans mep.php
	
	
	webdesign
	  fluidifier tout ça...
	
	
	site
	  mettre un log file pour la 404
		tester le nouveau live counter
		créer un cadre "photo du groupe au hasard"
		faire un lien discret en bas de chaque page pour "retour en haut de page" 

	
	news
	  possibilité de choisir la mise en page des images uploadé
		mieux gérer les ponctuations doubles (replace composition de " " et de "&nbsp;"+ponct double par "&nbsp;"+ponctuation)
	
	
	membres
		changer les gfx mouse_over avec photos inédites de chacun des membres
	
		
	Terminer la page admin
		mettre au point le script d'ajout (c) en php3
		fusionner l'ajout/modif des news avec ajout/mofif des illustrations.
		
		
	Faire passer toutes les donn&eacute;es stock&eacute;es via MySQL
		concevoir les BdD selon le modéle entité-association et relationnel (CSI)
	
	
	Outil de statistiques
	  le fusionner avec la partie privée et faire le ménage des choses inutiles
	
	
	Automatiser la saisie des concert (tout stocker dans un file txt)
	  passage automatique d'un concert pr&eacute;vu a un concert pass&eacute;
    page de garde nombre de jours avant prochain concert
		affiche du prochain concert sur la page de garde
		g&eacute;n&eacute;ration automatique des thumb... comme pour les pages members
		affichage d'un overview avec tous les thumbs automatiquement
		
		
	forum
	  revoir la mise en page (+ petit les fonction en haut et bas de page)
		pb d'alignement de la hierarchisation (sous mozilla uniquement à cause du respect de l'héritage des propriété des class css)
		pb de phorum concernant les &lt;&gt; qui ne sont pas convertis en html entities dans le titre
		couper les messages trop long ?
		
		
	Histoire
	  remplir les dates (permettre aux membre d'ajouter des dates)
	  ré-écrire l'histoire des strom avec timeline et bio de chaque membre		

		
	Compos
		mettre les lyrics de "Phénoméne de mode".
		
		
  liens
	  créer un banner Funky Storm (static/flash & petit/grand)

		
	photos
	  changer la photo de bienvenue
		le lien vers la liste des photos est le nom de l'evenement avec à coté la photo avec le + de hits
		afficher le label correct dans le cadre de la liste des photo (afficher un string décrivant l'evenement funky plutot que la simple date)
		chercher des rédacteurs (reviewer) pour les différents concert de FS.
		
		
	about
		todo liste
	</pre>

	
<? include('footer.php'); ?>
