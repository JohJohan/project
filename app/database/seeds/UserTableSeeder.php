<?php

class UserTableSeeder extends Seeder {
	//
	public function run(){
		//
		DB::table('users')->insert(
			array(
					array('username' => 'admin', 'password' => Hash::make('admin'), 'role' => 99),
				)
			);
	}
}