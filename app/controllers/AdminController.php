<?php

class AdminController extends BaseController {

	/*
	text
	*/

	public function AdminCheck(){
		//
		if (Auth::check()){
			//
		} else {
			//
			return Redirect::to('/');
		}
	}
}