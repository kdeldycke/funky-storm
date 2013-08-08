<?
require('include/glob_var.php');
require('include/mep.php');
?>


<!-- insertion en-t&ecirc;te commune + barre de navigation gauche -->
<? print_header(); ?>


  <? print_news_title("A propos du webmaster...<br>"); ?>
	<table border="0" cellpadding="0" cellspacing="5" width="100%">
  <tr align="left" valign="top">
    <td><img alt="Bonjour !" src="data/webmaster.jpg" height="150" width="200"></td>
    <td class="n2">
		  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Que Dire ?...<br>
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Je tiens tout de m�me � pr�ciser que ce message apparemment path�tique n'est en aucun cas la connotation d'une hypoth�tique nature d�pressive. Mais c'est r�ellement la question que je me pose � l'instant. Je tacherais d'�crire une description un peu plus d�taill�e sur <i>"moi, ma vie, mon &oelig;uvre"</i> un peu plus tard.<br>
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sinon, pour toutes questions (technique ou humaine), n'h�sitez pas � m'�crire via le mail&nbsp;: <a href="mailto:webmaster@funky-storm.com">webmaster@funky-storm.com</a><br>
			<br>
		</td>
  </tr>
  </table>
	<? print_news_end(); ?>

	
  <? print_news_title("A propos du d�veloppement...<br>"); ?>
	<table border="0" cellpadding="0" cellspacing="5" width="100%">
    <tr valign="top">
      <td class="n2">
			  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;La philosophie de d�veloppement est simple : elle consiste � fournir un code qui soit le plus possible conforme avec les standards (ceux du W3C notamment), et ce afin que le site puisse �tre compatible avec le plus grand nombre de navigateurs.<br>
	      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dans cette optique, nous utilisons les technologies suivantes :<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- PHP 4.1.1<br>
  			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- MySQL<br>
	      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Html 4.01<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Css 2.0<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Javascript<br>
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Si vous �tes en pr�sence de ce qui semble �tre un bug quelconque (probl�me d'affichage, trou de s�curit�, ...) n'h�sitez pas � envoyer un mail au webmaster.<br>
			</td>
      <td>
			<center>
			<a href="http://www.php.net" target="_blank"><img alt="L'elePHPant" src="include/php.gif" height="80" width="88" border="0"></a><br>
			<a href="http://www.mysql.com" target="_blank"><img alt="MySQL logo" src="include/mysql.gif" height="50" width="88" border="0"></a><br>
			<a href="http://validator.w3.org/check/referer" target="_blank"><img alt="Valid HTML 4.01!" src="include/vhtml401.gif" height="31" width="88" border="0"></a><br>
			<a href="http://jigsaw.w3.org/css-validator/check/referer" target="_blank"><img alt="Valid CSS 2!" src="include/vcss.gif" height="31" width="88" border="0"></a><br>
  		<a href="http://www.phorum.org" target="_blank"><img alt="Phorum" src="include/phorum.gif" height="30" width="90" border="0"></a><br>
			</center>
			</td>
    </tr>
  </table>
  <? print_news_end(); ?>
	
	
  <? print_news_title("What's news ?<br>"); ?>
	<br>
	<b>17 novembre 2002: lendemain de chouille chez Dam's difficile.</b><br>
	concert: nouvelle date (5 decembre 2002).<br>
	<br>
	<b>29 octobre 2002: c'est la saint Narcisse ? alors vive moi !</b><br>
	forum: ajout d'un compteur de visiteurs "live".<br>
	<br>
	<b>4 octobre 2002: n'oubliez pas de venir me voir demain soir.</b><br>
	photos: ajout des photos du concert � F�chain (22 juin 2002).<br>
  livre d'or: r�par� !<br>
	<br>
	<b>29 septembre 2002: bonne f�te � Michel, saint patron des ing�nieurs informaticiens.</b><br>
	site: ajout d'un livre d'or.<br>
	<br>
	<b>15 septembre 2002: retour de la plage.</b><br>
	photos: ajout des photos au Luciole.<br>
	concert: nouvelle date (24 octobre).<br>
	liens: ajout du site de Meaningless.<br>
	contact: ajout des mails personnels des membres.<br>
	<br>
	<b>9 septembre 2002: horoscope cette semaine "vous charmez de fa�on si naturelle".</b><br>
	news: affichage des 5 derni�res news.<br>
	forum: liste des 10 derniers posts en premi�re page.<br>
	<br>
	<b>8 septembre 2002: f�te du village.</b><br>
	photos: correction du bug "pluriel".<br>
	commentaires: am�liorations du parser.<br>
	news: am�liorations du parser.<br>
	<br>
	<b>6 septembre 2002: ce soir, week-end !</b><br>
	concert: ajout d'une date (5 octobre).<br>
	<br>
	<b>29 ao�t 2002: enregistrement des parties de batteries.</b><br>
	compos: ajout de la reprise "My lovely man".<br>
  commentaires: ajout d'une note concernant la responsabilit� des auteurs.<br>
	forum: meilleure v�rification de la validit� de l'adresse e-mail.<br>
	<br>
	<b>27 ao�t 2002: il re-re-pleut :-(</b><br>
	compos: nouvelle mise en page (tu en pense quoi Sylvain ?).<br>
	compos: ajout des reprises.<br>
	compos: ajout de "Rage in Wonderland".<br>
	forum: correction du bug "R�pondre � ce message".<br>
	<br>
	<b>20 ao�t 2002: il re-pleut...</b><br>
	concert: nouvelle date (28 ao�t).<br>
	about: ajout du lien vers Phorum.<br>
	news: autorisation de l'utilisation des balises HTML &lt;s&gt;...&lt;/s&gt;, &lt;b&gt;...&lt;/b&gt; et &lt;a href=""&gt;...&lt;/a&gt;.<br>
	<br>
	<b>17 ao�t 2002: joyeux anniversaire Sylvain ! (pense � changer ta page perso)</b><br>
	site: ajout d'un Phorum apr�s une nuit (0h~6h) pass� dans une petite chambre avec 2 PC surchauff�s (Tmoy=35� dans la chambre !) � se battre avec les scripts. K�vin win !<br> 
  photos, about: r�glage de la mise en page pour ce �#?!$% d'IE5 qui g�re le CSS comme un pied.<br>
	liens: ajout du lien vers Entre Guillemets.<br>
	news, membres, commentaires: remplacement des doubles quotes par leur �quivalent HTML.<br>
	photos, membres: correction d'un petit bug qui n'affichait pas que les photos.<br>
	<br>
	<b>13 ao�t 2002: retour du soleil sur nos contr�es !</b><br>
  news: la page principale affiche maintenant les 7 derni�res news.<br>
  news, membres, commentaires: probl�mes avec le formatage automatique des ponctuations. Je d�sactive les RegEx. Note pour VM: prendre garde au Vince.<br>
	membres: nouvelles photos pour chacun !<br>
	photos: ajout du flyer du festival "Masny en Musique".<br> 
	s�curit�: les r�pertoires ne sont plus accessibles.<br> 
	<br>
	<b>10 ao�t 2002: hier c'�tait la St Amour... snif... (faut que je passe mon spleen � la machine)</b><br>
  concert: annulation du "Tribe Festival".<br>
	membres: ajout de quelques photos.<br>
	<br>
	<b>4 ao�t 2002: hier, petite chouille sans pr�tention chez un ami �loign� de FunkyStorm que personne ne conna�t et dont vous n'entendrez plus jamais parler.</b><br>
	photos:	nouvel "Ev�nement Funky" (concert � Masny).<br>
	photos:	nouvelle mise en page.<br>
	commentaires: correction d'un bug concernant les retours � la ligne.<br>
	news: les news avec photos sont correctement format�es.<br>
	news: correction du bug qui n'affichait pas les illustrations dans les anciennes news.<br>
	news: correction du bug des liens vers les auteurs des anciennes news.<br> 
	about: petit espace pour la personne du webmaster.<br>
	<br>
	<b>2 ao�t 2002: exp�rimentations vid�os avec les Thomas.</b><br>
	news: possibilit� d'ajouter des illustrations.<br>
	photos: petit texte d'introduction � la rubrique.<br>
	photos:	correction du bug photo suivante/pr�c�dente (merci Thomas !).<br>
	membres: m�me bug, m�me solution.<br>
	site: correction de bugs linguistiques (gr�ce � Ma�tre Riko).<br>
	<br>
	<b>31 juillet 2002: journ�e d'enregistrement chez Mask.</b><br>
	news, membres, commentaires: les ponctuations doubles (? ! ; :) sont automatiquement format�es (avec un espace ins�cable). Merci les RegEx !<br>
	concerts: nouvelle date (Tribe Festival).<br>
	liens: changement du commentaire sur le site d'Awesome (RIP).<br>  
  <br>
	<b>28 juillet 2002: hier on �tait chez Charlotte.</b><br>
	photos: la liste de photos affiche le nombre de commentaires ainsi que le dernier.<br>
	site: int�gration des pages 404 et 403 dans l'interface du site.<br>
	site: la photo de l'histoire passe dans la rubrique photos.<br>
	histoire: nouvelle photo du groupe.<br>
  <br>
	<b>26 juillet 2002: on prospecte du cot� de Cambrai ce soir.</b><br>
	site: ajout d'une nouvelle rubrique contenant les photos des "Ev�nements Funky". Il est possible d'ajouter des commentaires sur chacune des photos.<br>
  <br>
  <b>24 juillet 2002: ce soir repet' pour pr�parer l'enregistrement.</b><br>
	liens: ajout du lien vers Neonord.<br>
	about: d�tails sur le d�veloppement.<br>
	<br>
	<b>21 juillet 2002: hier soir c'�tait la chouille chez Flo'.</b><br>
	concert: report du festival en Mai 2003.<br>
	histoire: ajout de la photo du groupe.<br>
	membres: surnom sous les photos.<br>
	membres: int�gration des photos haute qualit� dans l'interface du site.<br>
	membres: liens vers les photos pr�cedentes et suivantes (slide-show).<br>
	about: eph�m�ride pour chaque date.<br>
	<br>
	<b>19 juillet 2002: ce soir ma soeur f�te son bac.</b><br>
	news: seules les 5 derni�res news sont affich�es.<br>
	news: les anciennes news sont accessibles via un lien en bas de page.<br>
	news: lors de la consultation des anciennes news, il est possible d'afficher la news pr�c�dente et suivante.<br>
	<br>
	<b>18 juillet 2002: hier c'�tait la f�te � (ou de ?) Charlotte ;-)</b><br>
	membres: preview des photos de meilleur qualit�.<br>
	admins: majuscule au nom des membres.<br>
	<br>
	<b>15 juillet 2002: je suis victime d'une inflammation g�n�ralis�e de mon syst�me ORL.</b><br>
  site: "d�finition" de Funky Storm sous le bandeau.<br>
  histoire: signature de l'auteur v�ritable.<br>
	admins: les news peuvent �tres supprim�es.<br>
	<br>
	<b>14 juillet 2002: hier on �tait � Dour !</b><br>
	compos: ajout des copyright.<br>
	<br>
	<b>5 juillet 2002: bonne f�te Antoine !</b><br>
	liens: correction du lien vers Awesome.<br>
	<br>
	<b>3 juillet 2002: bonne f�te aux 3 brasseurs (ben oui, les thomas de masny + celui d'ex-Awesome).</b><br>
	contacts: d�localisation de la soci�t� de managment.<br>
	design: int�gration du compteur en bas de page.<br>
	admins: modifications possible des news d�j� post�es.<br>
	<br>
	<b>23 juin 2002: l'�t� commence fort...</b><br>
	concert: changement des intitul�s.<br>
	compos: "Onomatop�e" devient la chanson au bon go�t bulgare � la place de "Ph�nom�ne de mode".<br>
	design: suppression du contour dans la section membres.<br>
	design: re-codage de la barre de copyright.<br>
	site: ajout de la page d'erreur 403.<br>
	site: correction de quelques fotes...<br>
	site: ajout d'un compteur de visites.<br>
	admins: ajout illustration.<br>
	admins: les pages de configuration ne sont plus prises en compte par les robots des moteurs de recherche.<br>
	admins: authentification avec IP supprim�e (�a marchait pas avec AOL...).<br>
	admins: lors du r�-affichage du formulaire de news en cas d'erreur, les donn�es pr�c�dentes sont conserv�s.<br>
  admins: fusion du formulaire et du script de traitement.<br>
	<br>	
	<b>18 juin 2002</b><br>
	concert: nouvelle date (23 ao�t 2002).<br>
	design: r�duction de l'ent�te.<br>
	bug: le lien vers l'auteur de la news fonctionne.<br>
	admins: prise en compte de tags HTML (&lt;br&gt; et &lt;i&gt;) et des caract�res du type &...;<br>
	admins: gestion des tabulations '\t'.<br>
	admins: message d'erreur si le titre ou le corps du texte est vide.<br>
	admins: avertissement si une op�ration s'est bien d�roul�e.<br>
	<br>	
	<b>17 juin 2002: R.A.S.</b><br>
	membres: cr&eacute;ations de "preview" pour les photos.<br>
	compos: ajout de "ph&eacute;nom&egrave;ne de mode".<br>
	compos: ajout d'illustrations.<br>
	news: la signature est en bas &agrave; droite et inclus un lien vers l'auteur.<br>
	news: ajout de l'heure du post.<br>
	<br>	
	<b>15 juin 2002: bonne f�te � toutes les Germaine !</b><br>
  first public release: champagne !<br>	
	<br>
  <? print_news_end(); ?>
			
<!-- insertion du bas -->
<? print_footer(); ?>
