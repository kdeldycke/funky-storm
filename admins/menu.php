<?

//------------------------------------------------------------------------------
// Menu principal de gestion du site selon les droits de l'utilisateur 
//------------------------------------------------------------------------------

require_once('private_keeper.php');


if(isset($user_login))
		print("<br>Bonjour $user_login !<br>");

print("(utilisateur n°$user_id)<br>");

if($ok == 1)
		print("<br><span class=\"success\">L'opération s'est déroulée avec succés !</span><br>");

if($news_writer == 'Y' || $news_admin == 'Y') {
		print("<br>News<br>");
		print("<a href=\"news_form.php\">Ecrire une news</a><br>");
		print("<a href=\"news_manager.php\">Gérer mes news</a><br>");
}
    
if($questions == 'Y') {
		print("<br>Espace perso<br>");
		print("<a href=\"questions.php\">Mofifier/remplir mon test de répartie</a><br>");
    print("<a href=\"pics_add.php\">Ajouter une photo</a><br>");
    print("<a href=\"pics_manager.php\">Gérer mes photos</a><br>");
}
    
print("<br>Administration<br>");
if($news_admin == 'Y')
		print("<a href=\"news_admin.php\">News</a><br>");
if($guestbook_admin == 'Y')  
		print("<a href=\"guestbook_admin.php\">Livre d'or</a><br>");
if($questions_admin == 'Y')
		print("<a href=\"questions_admin.php\">Test de répartie</a><br>");

print("<br>Divers<br>");
print("<a href=\"logout.php\">Quitter (logout)</a><br>");

?>
