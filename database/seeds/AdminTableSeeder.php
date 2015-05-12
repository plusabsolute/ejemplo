<?php

use Illuminate\Database\Seeder;

	class AdminTableSeeder extends Seeder
	{		
		public function run()
		{
			\DB::table('users')->insert(array(
				'first_name' => 'Erick',
				'last_name' => 'Pac',
				'email' => 'pakincpp@gmail.com',
				'password' => \Hash::make('secret'),
				'type' => 'admin'
			));	

			\DB::table('user_profiles')->insert(array(
				'user_id' => 1,
				'birthdate' => '1992/06/10'
			));	
		}
	}
?>