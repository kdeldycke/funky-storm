<?

// or die("Erreur: $sql == ".mysql_error())

require_once('config.inc.php');

//--------------------------------------------------------
// Fonction d'affichage du nombre de connectés simultané
//--------------------------------------------------------

  function live_counter() {
	  GLOBAL $cfg_Host, $cfg_User, $cfg_Pass, $livecounter_base, $livecounter_table, $sql_die_msg, $timeout;

		$connect = mysql_connect($cfg_Host, $cfg_User, $cfg_Pass)
		  or die($sql_die_msg);

    $db = mysql_select_db($livecounter_base)
		  or die($sql_die_msg);
		
		$sql  = "DELETE FROM `$livecounter_table` ";
		$sql .= "WHERE `HeureLimite`<now()";
		mysql_query($sql);

	  $ip = getenv('REMOTE_ADDR');
		
		$sql  = "SELECT count(*) "; 
		$sql .= "FROM `$livecounter_table` ";
		$sql .= "WHERE `IP`='$ip'";
		$result = mysql_fetch_array(mysql_query($sql));

		if($result[0] != 0) { // Déjà connecté
			  $sql2  = "UPDATE `$livecounter_table` ";
				$sql2 .= "SET `HeureLimite`=`HeureLimite`+$timeout ";
				$sql2 .= "WHERE `IP`='$ip'";
				mysql_query($sql2);
		} else {	    // Nouvelle connexion
		    $sql2  = "INSERT INTO `$livecounter_table` ";
				$sql2 .= "(`IP`,`HeureLimite`) ";
				$sql2 .= "VALUES ('$ip', now()+$timeout)";
				mysql_query($sql2);
		}

	  $sql  = "SELECT count(*) ";
	  $sql .= "FROM `$livecounter_table`";
    $result = mysql_query($sql);
	
	  mysql_close($connect);
		$nb = mysql_fetch_array($result);
		
	  return $nb[0];
  }

?>	


<!-- start footer -->
<table cellpadding="2" cellspacing="0" border="0" width="100%" bgcolor="#ff9933"><tr class="bottombanner">

	<!-- counter banner -->
	<td align="left">
    <img src="http://perso0.free.fr/cgi-bin/wwwcount.cgi?df=www.funkystorm.dat&amp;dd=E&amp;display=counter&amp;ft=0&amp;tr=T&amp;trgb=ffffff" alt="compteur">&nbsp;&nbsp;visiteurs depuis le 23 juin 2002<br>		
	</td>

	<!-- copyright banner -->
	<td align="center">
	  &copy; 2002 - Funky Storm - all rights reserved<br>
	</td>

	<!-- live counter banner -->
	<td align="right">
	  <? $n=live_counter(); if($n>1) $p='s'; else $p=''; echo "$n personne$p connectée$p"; ?><br>
	</td>
	
</tr></table>


</body>
</html>
<!-- end footer -->


<?
  //récupération des statistiques
	if($public != 0) {
		$table="logezboo";
	  require ("write_logs.php");
	}
?>
