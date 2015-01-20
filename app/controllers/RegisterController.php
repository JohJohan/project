<?php

/*
	Mew :3
*/

class RegisterController extends BaseController {
	
	public function register(){
		//
		$username 		= Input::get('gebruikersnaam');
		$password 		= Input::get('wachtwoord');
		$emailaddress 	= Input::get('emailaddress');
		$role 			= 0;

		$validator = Validator::make(Input::all(),array(
				'gebruikersnaam' => 'required|max:155|unique:users',
				'wachtwoord' => 'required|mix:4',
				'emailaddress' => 'required|email|unique:users'
			));

		if ($validator->fails()){
			//
			Redirect::to('/register')->withErrors($validator);
		} else {
			//
			DB::insert('insert into users (username, password, emailaddress, role) values (?,?,?,?);',
				array($username, $password, $emailaddress, $role));
			Redirect::to('/')->withErrors("Uw account is aangemaakt!");
		}
	}
}