<?



//--------------------------------------------------------
// maison
//--------------------------------------------------------

  define (home, "http://127.0.0.1/current_funky/");

	
	
//--------------------------------------------------------	
// identifiant des membres pour le site
// tout en minuscule
//--------------------------------------------------------
  $members[] = "vincent";
  $members[] = "emeric";
  $members[] = "guillaume";
  $members[] = "maxence";
  $members[] = "sylvain";



//--------------------------------------------------------
// association login/password/id_membre
//--------------------------------------------------------
  $auth_table["webmaster"] = array("funkypawa", "webmaster");
  $auth_table["vincent"] = array("vi", "vincent");
  $auth_table["maxence"] = array("ma", "maxence");
  $auth_table["sylvain"] = array("ma", "sylvain");
  $auth_table["guillaume"] = array("ma", "guillaume");
  $auth_table["emeric"] = array("ma", "emeric");
	
	

//--------------------------------------------------------
// acces base de donn�es
//--------------------------------------------------------
  $cfgHost  = "localhost";
  $cfgUser  = "root";
  $cfgPass  = "";	
  $cfgBase  = "Current_FS";


	
?>