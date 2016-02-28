<?php

## ---------------------------
## /!\ Pour des grosses wordlist, pensez à désactiver le temps limite d'exécution (principalement pour wamp) /!\
## ---------------------------

// Ficher wordlist
$wordlist = "wordlist.txt";
// Le hash à casser
$hash = "YOUR_HASH";
// L'algorithme de hash
$algo = "md5";
 
// On appelle la fonction de hash
// On pourrait ici envisager un foreach pour parcourir un tableau rempli de hashs
// et donc automatiser le processus (Dans la v2 ?)

$break = attack($hash, $wordlist, $algo);
	
    if ($break) { 
         echo $hash . " => " . $break;
    }

    else {
        echo "pas de résultat";
    }

function attack($hash, $wordlist, $algo) {
    // On ouvre la wordlist
    $handle = fopen($wordlist, 'r');
    // On parcours le ficher
    while (!feof($handle)) {
		// On récupère les entrées et on vire les éventuels espaces
		$buffer = fgets($handle);
		$buffer = trim($buffer);
		
        // On hash et on compare avec le hash fourni
		if ($hash == hash($algo, $buffer)) {
            // Si les deux chaines correspondent
			return $buffer;
		}
	}
    
    fclose($handle);
    
    // Si rien n'a matché
    return (0);
}
?>
