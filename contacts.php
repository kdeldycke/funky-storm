<?
require('glob_var.php');
require('mep.php');
?>


<!-- insertion en-tête commune + barre de navigation gauche -->
<? print_header(); ?>



<!-- debut de la zone de contenu principal -->

  <!-- insertion titre de la news -->
  <? print_news_title("Contacter Funky Storm<br>"); ?>
	
  <!-- insertion contenu de la news -->
	<table border="0" cellpadding="0" cellspacing="10">
    <tr>
      <td width="100" class="text"><img alt="Managueur de Funky Storm" src="data/manager.jpg" height="239" width="100"></td>
      <td class="text">
			  Tu es responsable artistique d'un label, tu es producteur, ingénieur du son, organisateur de festival, tu es artiste plasticien, tenancier d'un etablissement de spectacle, danseuse professionelle, tu es animateur d'une station de radio-télescope à diffusion intergalactique, kro-niqueur dans un magazine people ou tu es simplement un admirateur fortuné&nbsp;;<br>
				<br>
				Si tu souhaites collaborer aux performances scéniques des Funky Storm, leur donner la possibilité de se produire ou de les faire connaître, ou plus humblement les inviter à une chouille&nbsp;;<br>
				<br>
				Alors ce message s'adressait à toi.<br>
				<br>
				Je suis Paul Poor, managueur de stars. Tu veux prendre contact avec Funky Storm&nbsp;? Alors contacte-moi via&nbsp;:<br>
				<br>
				&nbsp;&nbsp;&nbsp;<b>e-mail</b>&nbsp;: <a href="mailto:contact@funky-storm.com">contact@funky-storm.com</a><br>
				&nbsp;&nbsp;&nbsp;<b>tatoo</b>&nbsp;: <i>indisponible pour le moment.</i><br>
				&nbsp;&nbsp;&nbsp;<b>société de managment</b>&nbsp;: délocalisation en cours.<br>        
			</td>
    </tr>
  </table>
	<br>
	Pour contacter individuellement les membres du groupes, voici leur adresse respective&nbsp;:<br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Emeric</b>&nbsp;: <a href="mailto:emeric@funky-storm.com">emeric@funky-storm.com</a><br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Maxence</b>&nbsp;: <a href="mailto:maxence@funky-storm.com">maxence@funky-storm.com</a><br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Sylvain</b>&nbsp;: <a href="mailto:sylvain@funky-storm.com">sylvain@funky-storm.com</a><br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Vincent</b>&nbsp;: <a href="mailto:vincent@funky-storm.com">vincent@funky-storm.com</a><br>
	<br>
	Pour tout ce qui concerne le site, voir la rubrique "about this site".<br>
	<br>
  <!-- fermeture de la news -->
  <? print_news_end(); ?>
	
	
	
<!-- insertion du bas -->
<? print_footer(); ?>
