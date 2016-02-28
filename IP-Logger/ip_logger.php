<?php

function get_ip() {
    
	// IP si internet partagé
	if (isset($_SERVER['HTTP_CLIENT_IP'])) {
		return $_SERVER['HTTP_CLIENT_IP'];
	}
	// IP derrière un proxy
	elseif (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
		return $_SERVER['HTTP_X_FORWARDED_FOR'];
	}
	// Sinon : IP normale
	else {
		return (isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '');
	}
}

// Fuseau horraire par défaut
date_default_timezone_set('Europe/Paris');
// Fichier log
$file = "log.txt";
    
    // Adresse IP
    $ip = get_ip();
    // Date et heure
    $date = date("d-m-Y H:i:s");
    // DNS (toujours utile)
    $dns = gethostbyaddr($_SERVER['REMOTE_ADDR']);
    // Langue par défaut de l'utilisateur
    $country = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
    $country = $country{0} . $country{1};
    // User agent
    $user_agent = getenv("HTTP_USER_AGENT");
    // URL referer
    $url = $_SERVER['HTTP_REFERER'];
    // on met ça en forme pour les logs
    $infos = '['.$date.'] # '.$ip.' => from : '.$url.' | user agent : '.$user_agent.' | DNS : '.$dns.' | Pays : ' . $country . PHP_EOL;
    
    // On rentre ça dans un fichier log 
    $logfile = fopen($file, 'a+');
    fputs($logfile, $infos);
    fclose($logfile);
  
?>
