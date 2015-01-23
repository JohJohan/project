<?php
session_start();

class AdminController extends BaseController {

	/*
		Controller voor de admin panels.
	*/

	public function AdminCheck(){
		//
		if (Auth::check()){
			//
			if (Auth::user()->role > 10){
				//
				//If the user has admin powers.
				return View::make('admin.home');
			} else {
				//
				return Redirect::to('/');
			}
		} else {
			//
			return Redirect::to('/');
		}
	}//End of AdminCheck

	public function AdminBan(){
		//
		if (Auth::check()){
			//
			if (Auth::user()->role > 90){
				//
				//If user is super user
				if (Input::has('gebruikersnaam')){
					DB::table('users')->where('username', Input::get('gebruikersnaam'))->update(array('banned' => 1));
					return Redirect::to('/admin');
				}
			}
		}
	}
}