<?

	require('../include/glob_var.php');
	require('../include/private.php');
  require('../include/mep.php');
	print_header('', 1);
	print_news_title("Bonjour ".ucfirst($name)." ! Bienvenue dans ton espace perso.<br>");
  
	//affichage si opération successful
	if (isset($ok))
    echo "<br><span class=\"success\">L'opération s'est déroulée avec succés !</span><br>";
	
?>

	<br>
	<a href="data/news_add.php">ecrire une news</a><br>
	<a href="data/illus_all.php">ajouter/modifier les illustrations de mes news</a><br>
	<a href="data/news_list.php">modifier/supprimer mes news</a><br>
	<br>
<?
  if($name != 'webmaster')
    print( "  	<a href=\"data/persdata.php\">modifier les infos de ma fiche de membre</a><br>\n" );
?>
  <?/*<a href="admins/perspics.php">*/?>ajouter une photo sur ma fiche de membre<br>
  <br>
	ajouter une date de concert<br>
	ajouter une photo de concert<br>
	<br>
	ajouter une date dans l'histoire du groupe<br>
	<br>
<?
  if($name != 'webmaster') {
	  print( "<a href=\"admins/logout.php?url=members.php&member_name=$name\">fiche de membre du groupe</a><br>\n" );
    print( "	<br>\n" );
  }

  print_news_end();
	print_footer();
	
?>
