<?

	function print_news_title($title) {
  print( "  <!-- News header -->\n" );
  print( "  <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n" );
  print( "    <tr class=\"newsheader\">\n" );
  print( "      <td><img alt=\"\" src=\"include/round1.gif\" height=\"10\" width=\"10\" align=\"top\"></td>\n" );
  print( "      <td valign=\"middle\">&nbsp; $title</td>\n" );
  print( "      <td><img alt=\"\" src=\"include/slice1.gif\" height=\"22\" width=\"55\" align=\"top\"></td>\n" );
  print( "    </tr>\n" );
  print( "	</table>" );
	}
	
	function print_news_content($content) {
  print( "	<!-- News content -->\n" );
  print( "	  <table border=\"0\" cellpadding=\"4\" cellspacing=\"1\" width=\"100%\" bgcolor=\"#ff9933\">\n" );
  print( "    <tr><td class=\"newscontent\">\n" );
  echo $content;
  print( "		</td></tr>\n" );
  print( "  </table>\n" );
  print( "	<br>\n" );
  print( "	<br>\n" );
	}
	
?>
