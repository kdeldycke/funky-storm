<?

//------------------------------------------------------------------------------
// Ce script formate l'interface necessaire à l'ajout/modification d'une news et
// de son illustration.
//------------------------------------------------------------------------------

require_once('config.inc.php');
require_once('private_keeper.php');

if($news_writer != 'Y' && $news_admin != 'Y')
		header('location: '.home.'admins/menu.php');

    
//detection presence d'erreur et affichage
if(isset($e)) {
		print("<br><span class=\"warning\">La news n'a pas été postée : ");
		switch($e) {
    	case 1: print("Il n'y a pas de titre.");
            	break;
    	case 2: print("Le corps de la news est vide.");
            	break;
		}
		print("</span><br>");
}

?>


<br>
<form action="news_add.php" method="multipart/form-data">

	<? if(!empty($news_id)) print("<input type=\"hidden\" name=\"news_id\" value=\"$news_id\">"); ?>

  <b>Titre :</b><br><br>
  <b><font color="#ff0000">*</font></b>
  <input type="text" name="news_title" class="field" size="80" maxlength="50"<? if(!empty($news_title)) print(" value=\"$news_title\"");?>>
  <br><br><br>

	<b>Illustration :</b><br><br>
  <?	if(!empty($news_pict_name)) {
 				$news_pict = home.$news_pict_path.$news_pict_name;
		  		$dim = getimagesize($news_pict);
            print("<img alt=\"Illustration actuelle de la news ($news_pict_name)\" src=\"$news_pict\" $dim[3]><br>");
            print("<input type=\"checkbox\" name=\"news_pict_del\" class=\"field\">Supprimer cette illustration.br>");
            print("<br><br>");
			}
	?>
	<input type="hidden" name="news_pict_max_weight" value="<? echo $news_pict_max_weight; ?>"> 
  <input type="file" name="news_pict_browse" class="field" value="Choisir une illustration">
  <br><br><br>
  
  <b>Texte :</b><br><br>
  <b><font color="#ff0000">*</font></b>
  <textarea name="news_text" class="field" rows="10" cols="80"><? if(!empty($news_text)) echo $news_text;?></textarea>
  <br><br><br>

  <b>Signature :</b><br><br>
  <input type="text" name="news_sign" class="field" size="80" maxlength="50" <? if(!empty($news_sign)) print(" value=\"$news_sign\"");?>>
  <br><br><br>

  <input type="submit" name="submit" class="field" value="Poster la news">
  <br><br>

</form>



<hr>
<br>Régles d'utilisation des news<br>
<br>
Rappel des tags HTLM utilisables, uniquement dans le corps de la news :<br>
<tt>&lt;br&gt;</tt> : retour à la ligne<br>
<tt>&lt;i&gt;...&lt;/i&gt;</tt> : texte italique (italic)<br>
<tt>&lt;b&gt;...&lt;/b&gt;</tt> : texte gras (bold)<br>
<tt>&lt;u&gt;...&lt;/u&gt;</tt> : texte souligné (underline)<br>
<tt>&lt;s&gt;...&lt;/s&gt;</tt> : texte barré (strike-out)<br>
<br>
Les caractères HTML (genre "<tt>&...;</tt>") sont pris en compte dans tous les champs.<br>
<br>
Vous êtes autorisé à mettre des liens dans la news mais n'en abusez pas ! Si c'est un lien vers l'extérieur du site, n'oubliez pas l'attribut <tt>target="_blank"</tt> et le <tt>http://</tt>.<br>
<br>
La commande "<tt>\t</tt>" (sans les guillemets) permet d'afficher une tabulation de 5 caractères.<br>
<br>
Les champs marqués d'une étoile rouge (<b><font color="#ff0000">*</font></b>) doivent obligatoirement etres remplis.<br>
