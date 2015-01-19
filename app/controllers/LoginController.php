<?php

/*
	LoginController@login
		Kijk of de velden 'gebruikersnaam' en 'wachtwoord' gezet zijn.
		Als deze gezet zijn dan proberen we daar mee in te loggen.
		Als dit lukt dan gaan we naar view hello, als dit mislukt
		dan gaan we ook naar hello maar met foutmelding.

	LoginController@logout
		Kijk of er ingelogd is. Als er ingelogd is log uit en probeer
		terug te gaan waar je vandaan kwam/heen wou. Lukt dit niet
		ga dan naar view hello.
*/

class LoginController extends BaseController {

	public function login(){
		//
		if (Input::has('gebruikersnaam') && Input::has('wachtwoord')){
			//
			if (Auth::attempt(array('gebruikersnaam' => Input::get('gebruikersnaam'), 'wachtwoord' => Input::get('wachtwoord')))){
				//
				return Redirect::intended('hello');
			} else {
				//
				return Redirect::intended('hello')->withErrors('Onjuist naam of wachtwoord', 'login');
			}
		}
	}

	public function logout(){
		//
		if (Auth::check()){
			//
			Auth::logout();
			return Redirect::intended('hello');
		}
	}
}