<?
	
  //script d'auto copyright
	
  $string='(c) copyright 2002 - Funky Storm - www.funkystorm.free.fr';
	
  $im = imagecreatefromjpeg($file_path);

  $color = imagecolorallocate($im, 255, 255, 255);
	
	//positions x et y de la chaine
	$pos_x = imagesx($im) - 7.5 * strlen($string);
	$pos_y = imagesy($im) - 7.5 * 3;
	
  header("Content-type: image/jpeg");	
	imagestring($im, 3, $pos_x, $pos_y, $string, $color);
	imagejpeg($im);
	imagedestroy($im);

?>