<?
	require('glob_var.php');
	require('private.php');
  require('mep.php');
	print_header('', 1);
	print_news_title("Ajouter une date de concert<br>");
	
	//detection presence d'erreur et affichage
	if (isset($erreur)) {
    echo "<br><span class=\"warning\">Probléme : ";
    switch($erreur) {
        case 1: echo "Au moins un des champs obligatoire est vide.";
                break;
        case 2: echo "Le format de date n'est pas valide.";
                break;
        case 3: echo "Le format de l'heure n'est pas valide.";
                break;
    }
		echo "</span><br>";
  }
	
?>
<br>
Les champs marqués d'une étoile rouge (<b><font color="#ff0000">*</font></b>) doivent obligatoirement etres remplis.<br>
<br>
<form action="data/add_gig.php" method="post">
  <b>Date du concert :</b><br>
  <br>
  &nbsp;&nbsp;&nbsp;&nbsp;<b><font color="#ff0000">*</font></b>
	<select name="gig_day" class="field">
	  <option value="0">Jour</option>
		<? //génération des jours
		  for($jour=1; $jour<=31; $jour++)
			  print("<option value=\"$jour\">$jour</option>");
		?>
	</select>&nbsp;&nbsp;
	<select name="gig_month" class="field">
	  <option value="0">Mois</option>
		<option value="1">Janvier</option>
		<option value="2">Février</option>
		<option value="3">Mars</option>
		<option value="4">Avril</option>
		<option value="5">Mai</option>
		<option value="6">Juin</option>
		<option value="7">Juillet</option>
		<option value="8">Août</option>
		<option value="9">Septembre</option>
		<option value="10">Octobre</option>
		<option value="11">Novembre</option>
		<option value="12">Décembre</option>
	</select>&nbsp;&nbsp;
	<input type="text" name="gig_year" size="5" maxlength="4" class="field" value="<? echo date("Y", mktime(date("Y")));?>"><br>
  <br><br>
  <b>Heure (HHMM):</b><br>
	<br>
  &nbsp;&nbsp;&nbsp;&nbsp;<b><font color="#ff0000">*</font></b><input type="text" name="gig_hour" size="5" maxlength="4" class="field"><br>
  <br><br>
  <b>Lieu, contexte :</b><br>
	Si c'est un café ou une salle de spectacle, donner son nom et entre paranthèses l'adresse.<br>
	Pour un festival, preciser son nom et eventuellement le nom de la scéne entre parenthése.<br>
	<br>
  &nbsp;&nbsp;&nbsp;&nbsp;<b><font color="#ff0000">*</font></b><input type="text" name="gig_place" size="80" maxlength="100" class="field"><br>
  <br><br>
  <b>Ville :</b><br>
	<br>
  &nbsp;&nbsp;&nbsp;&nbsp;<b><font color="#ff0000">*</font></b><input type="text" name="gig_town" size="80" maxlength="30" class="field"><br>
	<br><br>
  <b>Département :</b><br>
	Si le département est français, le choisir dans la liste et laisser vide le champs situé à coté.<br>
	Si le concert à lieu à l'étranger ou dans un DOM-TOM, choisir une région française au hasard et remplir le champ par le nom de la région.<br>
	<br>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<select name="gig_dept" class="field">
	<option value="1">01 - Ain </option>
	<option value="2">02 - Aisne </option>
	<option value="3">03 - Allier </option>
	<option value="4">04 - Alpes de Haute-Provence </option>
	<option value="5">05 - Hautes Alpes </option>
	<option value="6">06 - Alpes-Maritimes </option>
	<option value="7">07 - Ard&egrave;che </option>
	<option value="8">08 - Ardennes </option>
	<option value="9">09 - Ari&egrave;ge </option>
	<option value="10">10 - Aube </option>
	<option value="11">11 - Aude </option>
	<option value="12">12 - Aveyron </option>
	<option value="13">13 - Bouches-du-Rh&ocirc;ne </option>
	<option value="14">14 - Calvados </option>
	<option value="15">15 - Cantal </option>
	<option value="16">16 - Charente </option>
	<option value="17">17 - Charente-Maritime </option>
	<option value="18">18 - Cher </option>
	<option value="19">19 - Corr&egrave;ze </option>
	<option value="20">20 - Corse </option>
	<option value="21">21 - C&ocirc;te-d'Or </option>
	<option value="22">22 - C&ocirc;te d'Armor </option>
	<option value="23">23 - Creuse </option>
	<option value="24">24 - Dordogne </option>
	<option value="25">25 - Doubs </option>
	<option value="26">26 - Dr&ocirc;me </option>
	<option value="27">27 - Eure </option>
	<option value="28">28 - Eure-et-Loir </option>
	<option value="29">29 - Finist&egrave;re </option>
	<option value="30">30 - Gard </option>
	<option value="31">31 - Haute-Garonne </option>
	<option value="32">32 - Gers </option>
	<option value="33">33 - Gironde </option>
	<option value="34">34 - H&eacute;rault </option> 
	<option value="35">35 - Ille-et-Vilaine </option>
	<option value="36">36 - Indre </option>
	<option value="37">37 - Indre-et-Loire </option>
	<option value="38">38 - Is&egrave;re </option>
	<option value="39">39 - Jura </option> 
	<option value="40">40 - Landes </option>
	<option value="41">41 - Loir-et-Cher </option>
	<option value="42">42 - Loire </option>
	<option value="43">43 - Haute-Loire </option>
	<option value="44">44 - Loire-Atlantique </option> 
	<option value="45">45 - Loiret </option>
	<option value="46">46 - Lot </option>
	<option value="47">47 - Lot-et-Garonne </option>
	<option value="48">48 - Loz&egrave;re </option>
	<option value="49">49 - Maine-et-Loire </option> 
	<option value="50">50 - Manche </option>
	<option value="51">51 - Marne </option>
	<option value="52">52 - Haute-Marne </option>
	<option value="53">53 - Mayenne </option>
	<option value="54">54 - Meurthe-et-Moselle </option> 
	<option value="55">55 - Meuse </option>
	<option value="56">56 - Morbihan </option>
	<option value="57">57 - Moselle </option>
	<option value="58">58 - Ni&egrave;vre </option>
	<option value="59" selected="selected">59 - Nord </option>
	<option value="60">60 - Oise </option>
	<option value="61">61 - Orne </option>
	<option value="62">62 - Pas-de-Calais </option>
	<option value="63">63 - Puy-de-D&ocirc;me </option>
	<option value="64">64 - Pyr&eacute;n&eacute;es-Atlantiques </option>
	<option value="65">65 - Hautes-Pyr&eacute;n&eacute;es </option>
	<option value="66">66 - Pyr&eacute;n&eacute;es-Orientales </option>
	<option value="67">67 - Bas-Rhin </option>
	<option value="68">68 - Haut-Rhin </option>
	<option value="69">69 - Rh&ocirc;ne </option>
	<option value="70">70 - Haute-Sa&ocirc;ne </option>
	<option value="71">71 - Sa&ocirc;ne-et-Loire </option>
	<option value="72">72 - Sarthe </option>
	<option value="73">73 - Savoie </option>
	<option value="74">74 - Haute-Savoie </option>
	<option value="75">75 - Paris </option>
	<option value="76">76 - Seine-Maritime </option>
	<option value="77">77 - Seine-et-Marne </option>
	<option value="78">78 - Yvelines </option>
	<option value="79">79 - Deux-S&egrave;vres </option>
	<option value="80">80 - Somme </option>
	<option value="81">81 - Tarn </option>
	<option value="82">82 - Tarn-et-Garonne </option>
	<option value="83">83 - Var </option>
	<option value="84">84 - Vaucluse </option>
	<option value="85">85 - Vend&eacute;e </option>
	<option value="86">86 - Vienne </option>
	<option value="87">87 - Haute-Vienne </option> 
	<option value="88">88 - Vosges </option>
	<option value="89">89 - Yonne </option>
	<option value="90">90 - Territoire de Belfort </option>
	<option value="91">91 - Essonne </option>
	<option value="92">92 - Hauts-de-Seine </option> 
	<option value="93">93 - Seine-Saint-Denis </option>
	<option value="94">94 - Val-de-Marne </option>
	<option value="95">95 - Val-d'Oise </option>
	</select>&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="text" name="gig_dept2" size="30" maxlength="30" class="field"><br>
	<br><br>
  <b>Pays :</b><br>
	<br>
  &nbsp;&nbsp;&nbsp;&nbsp;<b><font color="#ff0000">*</font></b><input type="text" name="gig_country" size="80" maxlength="20" class="field"><br>
	<br><br>	
	<b>Notes diverses :</b><br>
	Ecrire ici les premières parties de Funky Storm (ou Funky Storm en première partie de...), les autres groupes du festival, gain au profit d'une association, concert-performance,...<br>
	<br>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="gig_notes" size="80" maxlength="250" class="field"><br>
	<br><br>	
	<b>Prix du concert :</b><br>
	Inscrire ici le prix du concert en euros. Si le concert est gratuit, coher la case.<br>
	<br>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="gig_price" size="40" maxlength="250" class="field">
	&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="gig_free" class="field">Entrée grauite<br>
	<br><br>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="submit" value="Ajouter ce concert" class="field"><br>
  <br>
</form>

<br><br>
<a href="admins/menu.php">Retour au menu de l'espace perso</a><br>
	
<?	
  print_news_end();
	print_footer();
?>
