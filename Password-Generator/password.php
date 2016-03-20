function GeneratePassword($lengh){

	if(!$lengh) {
		$lengh = 8; // Valur par defaut
	}
	
	// Possibilité d'introduire des caractères supplémentaires
	$patern = '123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$pass = '';
	
	for ($i = 0; $i < $lengh; $i++){
		$pass .= substr($patern, mt_rand(0, strlen($patern) -1), 1);
	}
	
	return $pass;
}
