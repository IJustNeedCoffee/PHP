function ValidateEmail($email){

   	if (preg_match("/[\\000-\\037]/",$email)) {
      		return false;
   	}
   	$pattern = "/^[-_a-z0-9\'+*$^&%=~!?{}]++(?:\.[-_a-z0-9\'+*$^&%=~!?{}]+)*+@(?:(?![-.])[-a-z0-9.]+(?<![-.])\.[a-z]{2,6}|\d{1,3}(?:\.\d{1,3}){3})(?::\d++)?$/iD";
   	if(!preg_match($pattern, $email)){
      		return false;
   	}
   	return true;
}
