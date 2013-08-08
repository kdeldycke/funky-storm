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
  $txt .= "			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Je tiens tout de m�me � pr�ciser que ce message apparemment path�tique n'est en aucun cas la connotation d'une hypoth�tique nature d�pressive. Mais c'est r�ellement la question que je me pose � l'instant. Je tacherais d'�crire une description un peu plus d�taill�e sur <i>\"moi, ma vie, mon &oelig;uvre\"</i> un peu plus tard.<br>\n" ;
  $txt .= "			<br>\n" ;
  $txt .= "			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sinon, pour toutes questions (technique ou humaine), n'h�sitez pas � m'�crire via le mail&nbsp;: <a href=\"mailto:webmaster@funky-storm.com\">webmaster@funky-storm.com</a><br>\n" ;
  $txt .= "			<br>\n" ;
  $txt .= "		</td>\n" ;
  $txt .= "  </tr>\n" ;
  $txt .= "  </table>\n" ;
print_news_content($txt);

	
print_news_title("A propos du d�veloppement...<br>");
  $txt  = "";
  $txt .= "	<table border=\"0\" cellpadding=\"0\" cellspacing=\"5\" width=\"100%\">\n" ;
  $txt .= "    <tr valign=\"top\">\n" ;
  $txt .= "      <td class=\"n2\">\n" ;
  $txt .= "			  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;La philosophie de d�veloppement est simple : elle consiste � fournir un code qui soit le plus possible conforme avec les standards (ceux du W3C notamment), et ce afin que le site puisse �tre compatible avec le plus grand nombre de navigateurs.<br>\n" ;
  $txt .= "	      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dans cette optique, nous utilisons les technologies suivantes :<br>\n" ;
  $txt .= "				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- PHP 4.1.1<br>\n" ;
  $txt .= "  			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- MySQL<br>\n" ;
  $txt .= "	      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Html 4.01<br>\n" ;
  $txt .= "				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Css 2.0<br>\n" ;
  $txt .= "				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Javascript<br>\n" ;
  $txt .= "				<br>\n" ;
  $txt .= "				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Si vous �tes en pr�sence de ce qui semble �tre un bug quelconque (probl�me d'affichage, trou de s�curit�, ...) n'h�sitez pas � envoyer un mail au webmaster.<br>\n" ;
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
  $txt .= "	admins: possibilit� de g�rer le livre d'or.<br>\n" ;
  $txt .= "	site: modification du compteur live.<br>\n" ;
  $txt .= "	members: ajout d'un petit commentaire.<br>\n" ;
  $txt .= "	photos: modification du texte.<br>\n" ;
  $txt .= "	contact: e-mail de guillaume.<br>\n" ;
  $txt .= "	<br>\n" ;
  $txt .= "	<b>4 octobre 2002: n'oubliez pas de venir me voir demain soir.</b><br>\n" ;
  $txt .= "	photos: ajout des photos du concert � F�chain (22 juin 2002).<br>\n" ;
  $txt .= "  livre d'or: r�par� !<br>\n" ;
  $txt .= "	<br>\n" ;
  $txt .= "	<b>29 septembre 2002: bonne f�te � Michel, saint patron des ing�nieurs informaticiens.</b><br>\n" ;
  $txt .= "	site: ajout d'un livre d'or.<br>\n" ;
  $txt .= "	<br>\n" ;
  $txt .= "	<b>15 septembre 2002: retour de la plage.</b><br>\n" ;
  $txt .= "	photos: ajout des photos au Luciole.<br>\n" ;
  $txt .= "	concert: nouvelle date (24 octobre).<br>\n" ;
  $txt .= "	liens: ajout du site de Meaningless.<br>\n" ;
  $txt .= "	contact: ajout des mails personnels des membres.<br>\n" ;
  $txt .= "	<br>\n" ;
  $txt .= "	<b>9 septembre 2002: horoscope cette semaine \"vous charmez de fa�on si naturelle\".</b><br>\n" ;
  $txt .= "	news: affichage des 5 derni�res news.<br>\n" ;
  $txt .= "	forum: liste des 10 derniers posts en premi�re page.<br>\n" ;
  $txt .= "	<br>\n" ;
  $txt .= "	<b>8 septembre 2002: f�te du village.</b><br>\n" ;
  $txt .= "	photos: correction du bug \"pluriel\".<br>\n" ;
  $txt .= "	commentaires: am�liorations du parser.<br>\n" ;
  $txt .= "	news: am�liorations du parser.<br>\n" ;
  $txt .= "	<br>\n" ;
  $txt .= "	<b>6 septembre 2002: ce soir, week-end !</b><br>\n" ;
  $txt .= "	concert: ajout d'une date (5 octobre).<br>\n" ;
  $txt .= "	<br>\n" ;
  $txt .= "	<b>29 ao�t 2002: enregistrement des parties de batteries.</b><br>\n" ;
  $txt .= "	compos: ajout de la reprise \"My lovely man\".<br>\n" ;
  $txt .= "  commentaires: ajout d'une note concernant la responsabilit� des auteurs.<br>\n" ;
  $txt .= "	forum: meilleure v�rification de la validit� de l'adresse e-mail.<br>\n" ;
  $txt .= "	<br>\n" ;
  $txt .= "	<b>27 ao�t 2002: il re-re-pleut :-(</b><br>\n" ;
  $txt .= "	compos: nouvelle mise en page (tu en pense quoi Sylvain ?).<br>\n" ;
  $txt .= "	compos: ajout des reprises.<br>\n" ;
  $txt .= "	compos: ajout de \"Rage in Wonderland\".<br>\n" ;
  $txt .= "	forum: correction du bug \"R�pondre � ce message\".<br>\n" ;
  $txt .= "	<br>\n" ;
  $txt .= "	<b>20 ao�t 2002: il re-pleut...</b><br>\n" ;
  $txt .= "	concert: nouvelle date (28 ao�t).<br>\n" ;
  $txt .= "	about: ajout du lien vers Phorum.<br>\n" ;
  $txt .= "	news: autorisation de l'utilisation des balises HTML &lt;s&gt;...&lt;/s&gt;, &lt;b&gt;...&lt;/b&gt; et &lt;a href=\"\"&gt;...&lt;/a&gt;.<br>\n" ;
  $txt .= "	<br>\n" ;
  $txt .= "	<b>17 ao�t 2002: joyeux anniversaire Sylvain ! (pense � changer ta page perso)</b><br>\n" ;
  $txt .= "	site: ajout d'un Phorum apr�s une nuit (0h~6h) pass� dans une petite chambre avec 2 PC surchauff�s (Tmoy=35� dans la chambre !) � se battre avec les scripts. K�vin win !<br> \n" ;
  $txt .= "  photos, about: r�glage de la mise en page pour ce �#?!$% d'IE5 qui g�re le CSS comme un pied.<br>\n" ;
  $txt .= "	liens: ajout du lien vers Entre Guillemets.<br>\n" ;
  $txt .= "	news, membres, commentaires: remplacement des doubles quotes par leur �quivalent HTML.<br>\n" ;
  $txt .= "	photos, membres: correction d'un petit bug qui n'affichait pas que les photos.<br>\n" ;
  $txt .= "	<br>\n" ;
  $txt .= "	<b>13 ao�t 2002: retour du soleil sur nos contr�es !</b><br>\n" ;
  $txt .= "  news: la page principale affiche maintenant les 7 derni�res news.<br>\n" ;
  $txt .= "  news, membres, commentaires: probl�mes avec le formatage automatique des ponctuations. Je d�sactive les RegEx. Note pour VM: prendre garde au Vince.<br>\n" ;
  $txt .= "	membres: nouvelles photos pour chacun !<br>\n" ;
  $txt .= "	photos: ajout du flyer du festival \"Masny en Musique\".<br> \n" ;
  $txt .= "	s�curit�: les r�pertoires ne sont plus accessibles.<br> \n" ;
  $txt .= "	<br>\n" ;
  $txt .= "	<b>10 ao�t 2002: hier c'�tait la St Amour... snif... (faut que je passe mon spleen � la machine)</b><br>\n" ;
  $txt .= "  concert: annulation du \"Tribe Festival\".<br>\n" ;
  $txt .= "	membres: ajout de quelques photos.<br>\n" ;
  $txt .= "	<br>\n" ;
  $txt .= "	<b>4 ao�t 2002: hier, petite chouille sans pr�tention chez un ami �loign� de FunkyStorm que personne ne conna�t et dont vous n'entendrez plus jamais parler.</b><br>\n" ;
  $txt .= "	photos:	nouvel \"Ev�nement Funky\" (concert � Masny).<br>\n" ;
  $txt .= "	photos:	nouvelle mise en page.<br>\n" ;
  $txt .= "	commentaires: correction d'un bug concernant les retours � la ligne.<br>\n" ;
  $txt .= "	news: les news avec photos sont correctement format�es.<br>\n" ;
  $txt .= "	news: correction du bug qui n'affichait pas les illustrations dans les anciennes news.<br>\n" ;
  $txt .= "	news: correction du bug des liens vers les auteurs des anciennes news.<br> \n" ;
  $txt .= "	about: petit espace pour la personne du webmaster.<br>\n" ;
  $txt .= "	<br>\n" ;
  $txt .= "	<b>2 ao�t 2002: exp�rimentations vid�os avec les Thomas.</b><br>\n" ;
  $txt .= "	news: possibilit� d'ajouter des illustrations.<br>\n" ;
  $txt .= "	photos: petit texte d'introduction � la rubrique.<br>\n" ;
  $txt .= "	photos:	correction du bug photo suivante/pr�c�dente (merci Thomas !).<br>\n" ;
  $txt .= "	membres: m�me bug, m�me solution.<br>\n" ;
  $txt .= "	site: correction de bugs linguistiques (gr�ce � Ma�tre Riko).<br>\n" ;
  $txt .= "	<br>\n" ;
  $txt .= "	<b>31 juillet 2002: journ�e d'enregistrement chez Mask.</b><br>\n" ;
  $txt .= "	news, membres, commentaires: les ponctuations doubles (? ! ; :) sont automatiquement format�es (avec un espace ins�cable). Merci les RegEx !<br>\n" ;
  $txt .= "	concerts: nouvelle date (Tribe Festival).<br>\n" ;
  $txt .= "	liens: changement du commentaire sur le site d'Awesome (RIP).<br>  \n" ;
  $txt .= "  <br>\n" ;
  $txt .= "	<b>28 juillet 2002: hier on �tait chez Charlotte.</b><br>\n" ;
  $txt .= "	photos: la liste de photos affiche le nombre de commentaires ainsi que le dernier.<br>\n" ;
  $txt .= "	site: int�gration des pages 404 et 403 dans l'interface du site.<br>\n" ;
  $txt .= "	site: la photo de l'histoire passe dans la rubrique photos.<br>\n" ;
  $txt .= "	histoire: nouvelle photo du groupe.<br>\n" ;
  $txt .= "  <br>\n" ;
  $txt .= "	<b>26 juillet 2002: on prospecte du cot� de Cambrai ce soir.</b><br>\n" ;
  $txt .= "	site: ajout d'une nouvelle rubrique contenant les photos des \"Ev�nements Funky\". Il est possible d'ajouter des commentaires sur chacune des photos.<br>\n" ;
  $txt .= "  <br>\n" ;
  $txt .= "  <b>24 juillet 2002: ce soir repet' pour pr�parer l'enregistrement.</b><br>\n" ;
  $txt .= "	liens: ajout du lien vers Neonord.<br>\n" ;
  $txt .= "	about: d�tails sur le d�veloppement.<br>\n" ;
  $txt .= "	<br>\n" ;
  $txt .= "	<b>21 juillet 2002: hier soir c'�tait la chouille chez Flo'.</b><br>\n" ;
  $txt .= "	concert: report du festival en Mai 2003.<br>\n" ;
  $txt .= "	histoire: ajout de la photo du groupe.<br>\n" ;
  $txt .= "	membres: surnom sous les photos.<br>\n" ;
  $txt .= "	membres: int�gration des photos haute qualit� dans l'interface du site.<br>\n" ;
  $txt .= "	membres: liens vers les photos pr�cedentes et suivantes (slide-show).<br>\n" ;
  $txt .= "	about: eph�m�ride pour chaque date.<br>\n" ;
  $txt .= "	<br>\n" ;
  $txt .= "	<b>19 juillet 2002: ce soir ma soeur f�te son bac.</b><br>\n" ;
  $txt .= "	news: seules les 5 derni�res news sont affich�es.<br>\n" ;
  $txt .= "	news: les anciennes news sont accessibles via un lien en bas de page.<br>\n" ;
  $txt .= "	news: lors de la consultation des anciennes news, il est possible d'afficher la news pr�c�dente et suivante.<br>\n" ;
  $txt .= "	<br>\n" ;
  $txt .= "	<b>18 juillet 2002: hier c'�tait la f�te � (ou de ?) Charlotte ;-)</b><br>\n" ;
  $txt .= "	membres: preview des photos de meilleur qualit�.<br>\n" ;
  $txt .= "	admins: majuscule au nom des membres.<br>\n" ;
  $txt .= "	<br>\n" ;
  $txt .= "	<b>15 juillet 2002: je suis victime d'une inflammation g�n�ralis�e de mon syst�me ORL.</b><br>\n" ;
  $txt .= "  site: \"d�finition\" de Funky Storm sous le bandeau.<br>\n" ;
  $txt .= "  histoire: signature de l'auteur v�ritable.<br>\n" ;
  $txt .= "	admins: les news peuvent �tres supprim�es.<br>\n" ;
  $txt .= "	<br>\n" ;
  $txt .= "	<b>14 juillet 2002: hier on �tait � Dour !</b><br>\n" ;
  $txt .= "	compos: ajout des copyright.<br>\n" ;
  $txt .= "	<br>\n" ;
  $txt .= "	<b>5 juillet 2002: bonne f�te Antoine !</b><br>\n" ;
  $txt .= "	liens: correction du lien vers Awesome.<br>\n" ;
  $txt .= "	<br>\n" ;
  $txt .= "	<b>3 juillet 2002: bonne f�te aux 3 brasseurs (ben oui, les thomas de masny + celui d'ex-Awesome).</b><br>\n" ;
  $txt .= "	contacts: d�localisation de la soci�t� de managment.<br>\n" ;
  $txt .= "	design: int�gration du compteur en bas de page.<br>\n" ;
  $txt .= "	admins: modifications possible des news d�j� post�es.<br>\n" ;
  $txt .= "	<br>\n" ;
  $txt .= "	<b>23 juin 2002: l'�t� commence fort...</b><br>\n" ;
  $txt .= "	concert: changement des intitul�s.<br>\n" ;
  $txt .= "	compos: \"Onomatop�e\" devient la chanson au bon go�t bulgare � la place de \"Ph�nom�ne de mode\".<br>\n" ;
  $txt .= "	design: suppression du contour dans la section membres.<br>\n" ;
  $txt .= "	design: re-codage de la barre de copyright.<br>\n" ;
  $txt .= "	site: ajout de la page d'erreur 403.<br>\n" ;
  $txt .= "	site: correction de quelques fotes...<br>\n" ;
  $txt .= "	site: ajout d'un compteur de visites.<br>\n" ;
  $txt .= "	admins: ajout illustration.<br>\n" ;
  $txt .= "	admins: les pages de configuration ne sont plus prises en compte par les robots des moteurs de recherche.<br>\n" ;
  $txt .= "	admins: authentification avec IP supprim�e (�a marchait pas avec AOL...).<br>\n" ;
  $txt .= "	admins: lors du r�-affichage du formulaire de news en cas d'erreur, les donn�es pr�c�dentes sont conserv�s.<br>\n" ;
  $txt .= "  admins: fusion du formulaire et du script de traitement.<br>\n" ;
  $txt .= "	<br>	\n" ;
  $txt .= "	<b>18 juin 2002</b><br>\n" ;
  $txt .= "	concert: nouvelle date (23 ao�t 2002).<br>\n" ;
  $txt .= "	design: r�duction de l'ent�te.<br>\n" ;
  $txt .= "	bug: le lien vers l'auteur de la news fonctionne.<br>\n" ;
  $txt .= "	admins: prise en compte de tags HTML (&lt;br&gt; et &lt;i&gt;) et des caract�res du type &...;<br>\n" ;
  $txt .= "	admins: gestion des tabulations '\\t'.<br>\n" ;
  $txt .= "	admins: message d'erreur si le titre ou le corps du texte est vide.<br>\n" ;
  $txt .= "	admins: avertissement si une op�ration s'est bien d�roul�e.<br>\n" ;
  $txt .= "	<br>	\n" ;
  $txt .= "	<b>17 juin 2002: R.A.S.</b><br>\n" ;
  $txt .= "	membres: cr&eacute;ations de \"preview\" pour les photos.<br>\n" ;
  $txt .= "	compos: ajout de \"ph&eacute;nom&egrave;ne de mode\".<br>\n" ;
  $txt .= "	compos: ajout d'illustrations.<br>\n" ;
  $txt .= "	news: la signature est en bas &agrave; droite et inclus un lien vers l'auteur.<br>\n" ;
  $txt .= "	news: ajout de l'heure du post.<br>\n" ;
  $txt .= "	<br>	\n" ;
  $txt .= "	<b>15 juin 2002: bonne f�te � toutes les Germaine !</b><br>\n" ;
  $txt .= "  first public release: champagne !<br>	\n" ;
  $txt .= "	<br>\n" ;
print_news_content($txt);
	
	
print_news_title("TO DO list<br>"); ?>
	<pre>
	AVANT LA MISE ON-LINE:
	  supprimer le '&' de la variable post_option de la fonction public_link dans mep.php
	  modifier la variable globale home...
	  r�tablir l'entregistrement statistique dans mep.php
	
	
	webdesign
	  fluidifier tout �a...
	
	
	site
	  mettre un log file pour la 404
		tester le nouveau live counter
		cr�er un cadre "photo du groupe au hasard"
		faire un lien discret en bas de chaque page pour "retour en haut de page" 

	
	news
	  possibilit� de choisir la mise en page des images upload�
		mieux g�rer les ponctuations doubles (replace composition de " " et de "&nbsp;"+ponct double par "&nbsp;"+ponctuation)
	
	
	membres
		changer les gfx mouse_over avec photos in�dites de chacun des membres
	
		
	Terminer la page admin
		mettre au point le script d'ajout (c) en php3
		fusionner l'ajout/modif des news avec ajout/mofif des illustrations.
		
		
	Faire passer toutes les donn&eacute;es stock&eacute;es via MySQL
		concevoir les BdD selon le mod�le entit�-association et relationnel (CSI)
	
	
	Outil de statistiques
	  le fusionner avec la partie priv�e et faire le m�nage des choses inutiles
	
	
	Automatiser la saisie des concert (tout stocker dans un file txt)
	  passage automatique d'un concert pr&eacute;vu a un concert pass&eacute;
    page de garde nombre de jours avant prochain concert
		affiche du prochain concert sur la page de garde
		g&eacute;n&eacute;ration automatique des thumb... comme pour les pages members
		affichage d'un overview avec tous les thumbs automatiquement
		
		
	forum
	  revoir la mise en page (+ petit les fonction en haut et bas de page)
		pb d'alignement de la hierarchisation (sous mozilla uniquement � cause du respect de l'h�ritage des propri�t� des class css)
		pb de phorum concernant les &lt;&gt; qui ne sont pas convertis en html entities dans le titre
		couper les messages trop long ?
		
		
	Histoire
	  remplir les dates (permettre aux membre d'ajouter des dates)
	  r�-�crire l'histoire des strom avec timeline et bio de chaque membre		

		
	Compos
		mettre les lyrics de "Ph�nom�ne de mode".
		
		
  liens
	  cr�er un banner Funky Storm (static/flash & petit/grand)

		
	photos
	  changer la photo de bienvenue
		le lien vers la liste des photos est le nom de l'evenement avec � cot� la photo avec le + de hits
		afficher le label correct dans le cadre de la liste des photo (afficher un string d�crivant l'evenement funky plutot que la simple date)
		chercher des r�dacteurs (reviewer) pour les diff�rents concert de FS.
		
		
	about
		todo liste
	</pre>

	
<? include('footer.php'); ?>
