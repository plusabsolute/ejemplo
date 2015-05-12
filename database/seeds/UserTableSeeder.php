<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

	class UserTableSeeder extends Seeder
	{		
		public function run()
		{
			$faker = Faker::create();
			for($i=0; $i<30; $i++)
			{
				$id = \DB::table('users')->insertGetId(array(
					'first_name' => $faker->firstName,
					'last_name' => $faker->lastName,
					'email' => $faker->unique()->email,
					'password' => \Hash::make('123456'),
					'type' => 'user'
				));		

				\DB::table('user_profiles')->insert(array(
					'user_id' => $id,
					'bio' 	  => $faker->paragraph(rand(2,5)),
					'website' => 'http://' . $faker->domainName,
					'twitter' => 'http://twitter.com/' . $faker->unique()->userName,
					'birthdate' => $faker->dateTimeBetween('-40 years', '-10 years')->format('Y-m-d')
				));	
			}				
		}
	}
?>