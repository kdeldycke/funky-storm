<?

require_once('design.inc.php');

include('header.php');


print_news_title("Copinage<br>");
  $txt  = "";
  $txt .= "	<br>\n" ;
  $txt .= "	<a href=\"http://www.meaningless.fr.st\" target=\"_blank\">MEANINGLESS</a><br>\n" ;
  $txt .= "	Groupe de rock alternatif venant de Valenciennes, influences multiples (reprises : System, Spiders, Manson, Sweet dreams, Smashings, Bullet) mais qui surtout s'�clate avec un r�pertoire d'une quinzaine de compos.<br>\n" ;
  $txt .= "	<br><br>\n" ;
  $txt .= "	<a href=\"http://membres.lycos.fr/awesome\" target=\"_blank\">AWESOME</a><br>\n" ;
  $txt .= "  Le site des malheureusement d�funts Awesome, avec lesquels nous avons pass� de bons moments. Une question reste cependant en suspend : Pourquoi c'est eux ? On conserve le lien, par nostalgie (d�j� !).<br>				\n" ;
  $txt .= "	<br><br>\n" ;
  $txt .= "	<a href=\"http://www.neonord.com\" target=\"_blank\">N�ONORD.com</a><br>\n" ;
  $txt .= "	Ce site tenu par une �quipe active recense tous les �v�nements \"M�tal\" dans le Nord de la France.<br>				\n" ;
  $txt .= "	<br><br>\n" ;
  $txt .= "	<a href=\"http://membres.lycos.fr/entreguillemets59\" target=\"_blank\">ENTRE GUILLEMETS</a><br>\n" ;
  $txt .= "	Vous avez d� les croiser lors de nos participations aux \"Sc�nes Ouvertes du SIRA\", Entre Guillemets est un groupe aux compositions pop/rock originales. <i>Entre Guillemets change de nom et en attendant la nouvelle version de leur site, nous laissons l'ancienne adresse.</i><br>				\n" ;
  $txt .= "	<br><br>						 \n" ;
print_news_content($txt);
	
	
include('footer.php');

?>
