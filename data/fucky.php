<?
  require('glob_var.php');
  require('mep.php');
  print_header();
  print_news_title("Fucky Storm<br>");
?>
<br>
<center>
<!-- URL's used in the movie-->
<!-- text used in the movie-->
<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" WIDTH="550" HEIGHT="400">
<PARAM NAME="movie" VALUE="data/fucky.swf"><PARAM NAME="quality" VALUE="medium"><PARAM NAME="bgcolor" VALUE="#FFFFFF"><EMBED src="data/fucky.swf" quality="medium" bgcolor="#FFFFFF"  WIDTH="550" HEIGHT="400" TYPE="application/x-shockwave-flash" PLUGINSPAGE="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash"></EMBED>
</OBJECT>
</center>		
<br>
<?
  print_news_end();
  print_footer();
?>
