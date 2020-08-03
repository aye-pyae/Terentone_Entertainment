<?php


function invalid_email($email){

	return !filter_var($email,FILTER_VALIDATE_EMAIL);
}



function old($field){

	if(isset($_REQUEST[$field])){

		return $_REQUEST[$field];
	}

}


?>




