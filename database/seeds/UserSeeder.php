<?php

use Illuminate\Database\Seeder;
use App\User;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('users')->truncate();
        //
		$faker = \Faker\Factory::create();
		foreach(range(1,5) as $index){
			User::create([
			'name'=>$faker->name(),
			'email'=>$faker->email(),
			'password'=>bcrypt($faker->word()),
			'username'=>$faker->username(),
			'phone_number'=>'+2340802291092',
			'profile_img'=>$faker->word().'.jpg'
			
			]);
			
			
		}
    }
}
