<?php

// Fonction qui génère une fausse adresse IP

function fake_ip() {
  $ip =
      mt_rand(0, 255) . '.' .  
      mt_rand(0, 255) . '.' .  
      mt_rand(0, 255) . '.' .  
      mt_rand(0, 255);  
  
// On exclut les adresses privées
  if (  
      !invalid_ip($ip, '10.0.0.0', '10.255.255.255') &&  
      !invalid_ip($ip, '172.16.0.0', '172.31.255.255') &&  
      !invalid_ip($ip, '192.168.0.0', '192.168.255.255')  
  ) {  
    return $ip;
  } else {  
    return fake_ip();  
  }  
}  

// Vérifie que l'ip générée n'est pas dans l'intervalle réservé aux adresses privées
function invalid_ip($ip, $start, $end) {
    
  $i = explode('.', $ip);  
  $s = explode('.', $start);  
  $e = explode('.', $end);  
  

  return in_array($i[0], range($s[0], $e[0])) &&  
      in_array($i[1], range($s[1], $e[1])) &&  
      in_array($i[2], range($s[2], $e[2])) &&  
      in_array($i[3], range($s[3], $e[3]));  
}  


	/* ---------------------- End Of : Function Fake IP --------------------- */
 
// Fonction qui génère un faux nom de page consulté 
  function fakepage() {
      
    //   Ici insérer les noms de page qui doivent apparaitre dans les logs  //
    //      Il est possible d'insérier plusieurs fois le même nom pour      //
    //        une plus grande fréquence d'apparition dans les logs          //
    
    $page_name = array(
        "index.php", 
        "index.php", 
        "index.php",
        "login.php", 
        "login.php",
        "about.php",
        "logout.php",
        "contact.php"
     );
    
    $array_size = sizeof($page_name);   
    $randpage = rand(0, $array_size - 1);
    
    $nameofpage = $page_name[$randpage];
    
    return $nameofpage;
  }
  
  /* ---------------------- End Of : Fonction Fake Page --------------------- */

    //Nombre de lignes à insérer dans le fichier log
    $lines = 500;
    // Nom du fichier à créer
    $fichier = "log.txt";
    
    // Fuseau horraire par défaut
    date_default_timezone_set('Europe/Paris');
    // Date minimum pour le générateur au format time() => Ici 0 pour la date limite (01/01/1970)
    $start_date = 0;
    // Date maximum pour le générateur au format time() => Ici la date actuelle
    $end_date = time();
    
	$monfichier = fopen($fichier, 'a+');
    
	for ($i = 0; $i < $lines; $i++) {
		
		$date = rand($start_date, $end_date);
		$date = date("Y-m-d H:i:s", $date);
		$fakeip = fake_ip();
		$name_page = fakepage();
        $texte = "[" . $date . "] # " . $fakeip . " => Connected to : " . $name_page . PHP_EOL;
		
		fputs($monfichier, $texte);
	}
	
	fclose($monfichier);
    
    echo "Les " . $lines . " lignes ont été générées et insérées avec succès !";

?>
