<?php


class Registration{
	
	private $_username;
	private $_password;
	private $_email;
	private $_role;


	function __construct(){

	}

	function __destruct(){

	}

	public function setUser($username, $email, $password){

		var $checkuser  = $this->checkUser($username);
		var $checkemail = $this->checkemail($email);

		if($checkuser == false){
			$msg = "User already exits";
		}elseif ($checkemail == false) {
			$msg = "Email already exits";
		}else{
			$msg = "Sucessfully Sign up";
		}


		if($checkuser != false && $checkemail != false){
			
		}

	}

	private function checkUser($username){

	}

	private function checkemail($email){

	}


}
