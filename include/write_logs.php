<?php
// $table = table_name  should be set in the page under control

include ("config_sql.php");
echo $ezboowebstats;
if ($ezboowebstats != "Admin") {
    $ct = mysql_connect("$server","$user","$password") or die("Impossible de se connecter au server SQL, essayez plus tard");
    $db = mysql_select_db("$base") or die("Impossible de se selectionner la base SQL, essayez plus tard");
    $To = $PHP_SELF;
    $REMOTE_HOST = @getHostByAddr($REMOTE_ADDR);
    $servertime = time();
    $second = date("s", ($servertime));
    $minute = date("i", ($servertime));
    $hour = date("G", ($servertime));
    $day = date("j", ($servertime));
    $month = date("n", ($servertime));
    $year = date("y", ($servertime))+2000;
    $logdate = $year.'-'.$month.'-'.$day.' '.$hour.':'.$minute.':'.$second ;
    $res = mysql_query("INSERT INTO $table (id, request, host, address, agent, date, referer, country, provider, os, wb) VALUES ('', '$To', '$REMOTE_HOST', '$REMOTE_ADDR', '$HTTP_USER_AGENT', '$logdate', '$HTTP_REFERER', '', '', '', '')");
    mysql_close ($ct);        // close sql connection
}

?>