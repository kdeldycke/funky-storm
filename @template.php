<?
require('glob_var.php');
require('mep.php');
?>



<!-- insertion en-tête commune + barre de navigation gauche -->
<? print_header(); ?>



<!-- debut de la zone de contenu principal -->

  <!-- insertion titre de la news -->
  <? print_news_title("Titre de la news<br>"); ?>
	
  <!-- insertion contenu de la news -->
	Site en cours de developpement total.<br>				
						 
  <!-- fermeture de la news -->
  <? print_news_end(); ?>
	
	
	
<!-- insertion du bas -->
<? print_footer(); ?>
