<?php

use Illuminate\Database\Seeder;
use App\Articles;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->truncate();
        //
		$faker = \Faker\Factory::create();
		foreach(range(1,10) as $index){
			Articles::create([
			'post_title'=>$faker->sentence(1),
			'post_body'=>$faker->paragraphs(10, true),
			'intro'=>$faker->word(),
			'header_bg'=>$faker->word().'.jpg',
			'author'=>$faker->username(),
			'body_img'=>$faker->word().'.jpg',
			'pub_status'=>1
			
			]);
			
			
		}
    }
}
