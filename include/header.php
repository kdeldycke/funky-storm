<?

require_once('config.inc.php');

//--------------------------------------------------------
// fonction permettant, dans un espace perso, de detruire la session
// si on s'en va dans le domaine public.
// Le SID est automatiquement ajouté chez Free.
//--------------------------------------------------------

  function public_link($dest_page) {
    unset($pre_option); 					 						   //initialisation variables
    unset($post_option);
		if(session_id() != '') {   								 	 //si on a une session = si on est dans un espace perso = si on a un nom de session
			$pre_option = 'admins/logout.php?url=';    //on ajoute la redirection vers le logout pour les liens publics
			$post_option = '&';
		}
	  return $pre_option.$dest_page.$post_option;  //on retourne la chaine/lien
  }
	
?>



<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">


<html>


<head>

  <title>&gt;&gt;&gt;&nbsp;&nbsp;FUNKY STORM&nbsp;&nbsp;&lt;&lt;&lt; {site officiel} - Fusion/Funk/Rock</title>

  <base href="<? echo home; ?>">

  <meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
  <meta http-equiv="content-style-type" content="text/css">

  <meta name="generator" content="HTML-Kit">

  <meta name="author" content="Kévin DELDYCKE">
  <meta name="reply-to" content="webmaster@funky-storm.com">
  <meta name="description" content="Funky Storm, un groupe de Fusion/Funk/Rock originaire du Nord de la France. Site officiel avec l'agenda des prochains concerts, les extraits des compos (mp3), des infos sur le groupe et la vie du groupe, des photos de live, un forum libre, etc...">
  <meta name="keywords" content="funky, storm, musique, music, rock, funk, groove, groovy, heavy, metal, hard, electrique, electric, fusion, france, nord, groupe, band, artiste, artist, art, concert, gig, mp3, download, wallpaper, festival, cafe, bar, scene, forum, live, acoustic, acoustique, forum">
  <meta name="robots" content="<? if($pub == 0) echo 'none'; else echo 'all'; ?>">
  <meta name="revisit-after" content="30 days">

  <link type="text/css" rel="stylesheet" href="include/design.css" media="screen">

  <script type="text/javascript" language=javascript src="include/include.js">
  <!-- MM_reloadPage(true); //-->
  </script>

</head>


<body background="include/background.gif"<? if(isset($header_preload_img)) echo " onload=\"MM_preloadImages($header_preload_img)\""; ?>>


<!-- Logo banner -->
<table border="0" cellpadding="0" cellspacing="0" width="100%"><tr class="logobanner">
  <td align="left" background="include/logobg.jpg"><a href="<? public_link('index.php'); ?>"><img alt="Retour à la page principale" src="include/logo.jpg" height="120" width="456" border="0"></a></td>
	<td align="right" background="include/logobg.jpg"></td>
</tr></table>


<!-- Top banner -->
<table border="0" cellpadding="0" cellspacing="0">
  <tr class="topbanner">
     <td valign="middle">&nbsp;&nbsp;Funky Storm est un groupe français de Fusion/Funk/Rock farandoleux, énergique et vivant.</td>
     <td><img alt="" src="include/slice2.gif" height="16" width="50" align="top"></td>
   </tr>
</table>


<br>


<!-- Under banner -->
<table border="0" cellpadding="10" cellspacing="0" width="100%"><tr valign="top"><td>
	<!-- Verticalité gauche -->
	
	<!-- Prochain concert -->
	<table border="0" cellpadding="0" cellspacing="0" width="145">
    <tr class="boxheader">
      <td align="left" valign="top"><img alt="" src="include/round21.gif" height="16" width="8"></td>
      <td align="center" valign="middle">PROCHAIN CONCERT</td>
      <td align="right" valign="top"><img alt="" src="include/round22.gif" height="16" width="8"></td>
    </tr>
	</table>
	<table border="0" cellpadding="3" cellspacing="1" width="145" bgcolor="#cccccc">
		<tr class="boxtext"><td>
		  <center>Mai 2003<br>Festival Imagin'Aire<br>Le Cateau [59]<br></center>
		</td></tr>
	</table>
  <br>
	
	<!-- Menu de navigation -->
	<table border="0" cellpadding="0" cellspacing="0" width="145">
    <tr class="boxheader">
      <td align="left" valign="top"><img alt="" src="include/round21.gif" height="16" width="8"></td>
      <td align="center" valign="middle">MENU</td>
      <td align="right" valign="top"><img alt="" src="include/round22.gif" height="16" width="8"></td>
    </tr>
	</table>
	<table border="0" cellpadding="3" cellspacing="1" width="145" bgcolor="#cccccc">
		<tr class="boxtext"><td>
			<a href="<? echo public_link('index.php'); ?>">&nbsp;&nbsp;&gt; les news<br></a>
			<a href="<? echo public_link('histoire.php'); ?>">&nbsp;&nbsp;&gt; l'Histoire<br></a>
		 	<a href="<? echo public_link('members.php'); ?>">&nbsp;&nbsp;&gt; les membres<br></a>
		 	<a href="<? echo public_link('zik.php'); ?>">&nbsp;&nbsp;&gt; les compos<br></a>
  	 	<a href="<? echo public_link('concerts.php'); ?>">&nbsp;&nbsp;&gt; les concerts<br></a>
      <a href="<? echo public_link('photos.php'); ?>">&nbsp;&nbsp;&gt; les photos<br></a>			
  	 	<a href="<? echo public_link('forum/'); ?>">&nbsp;&nbsp;&gt; le forum<br></a>
  	 	<a href="<? echo public_link('contacts.php'); ?>">&nbsp;&nbsp;&gt; contact<br></a>
  	 	<a href="<? echo public_link('links.php'); ?>">&nbsp;&nbsp;&gt; liens<br></a>
  	 	<a href="<? echo public_link('guestbook.php'); ?>">&nbsp;&nbsp;&gt; le livre d'or<br></a>
  	 	<a href="<? echo public_link('about.php'); ?>">&nbsp;&nbsp;&gt; détails du site<br></a>		
		</td></tr>
	</table>
	<br>
	
	</td><td>
	
	<!-- News zone -->
