<?

	$max_len = 32;  //longueur maximale des login/password

?>

<br>

<?
// affichage de l'état de la tentative d'identification
if (isset($e)) {
	 	print( "<span class=\"warning\">" );
    echo "Erreur de connexion à l'espace perso : ";
    switch($e) {
        case 1: echo 'Champ(s) vide(s)';
                break;
        case 2: echo 'Utilisateur inconnu';
                break;
    }
	  print( "</span>" );
}
?>

<br>
<form action="login.php" method="post">
  <table border="0" cellpadding="0" cellspacing="5">
    <tr>
      <td>Login :</span></td>
      <td><input class="field" type="text" name="user_login" value="" size="18" maxlength="<? echo $max_len; ?>"></td>
		  <td rowspan="3" valign="top">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img alt="Fort Boyard" src="key.jpg" height="100" width="168"></td>
    </tr>
    <tr>
      <td>Password :</span></td>
      <td><input class="field" type="password" name="user_password" value="" size="18" maxlength="<? echo $max_len; ?>"></td>
	  </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input class="field" type="submit" name="submit" value="Valider">&nbsp;&nbsp;<input class="field" type="reset" value="Effacer"></td>
    </tr>
  </table>
</form>
<br>

