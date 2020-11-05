<?php

use Illuminate\Database\Seeder;
use App\Comic;
use App\Author;
use Faker\Generator as Faker;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        
        for($i=0; $i<20; $i++) {

            $author = Author::inRandomOrder()->first();

            $newComic = new Comic();
            $newComic->title = $faker->text(30); 
            $newComic->original_title = $faker->text(30);
            $newComic->number = $faker->randomDigitNotNull;
            $newComic->edition = $faker->company();
            $newComic->author_id = $author->id;
            $newComic->n_pages = $faker->numberBetween(1, 1000);
            $newComic->price = $faker->randomFloat(2, 20, 9000);
            $newComic->color = $faker->boolean(50);
            $newComic->year = $faker->year(2020);
            $newComic->cover = $faker->imageUrl(200, 300);
            $newComic->reading = $faker->boolean(50) ? "ltr" : "rtl";
            $newComic->save();
        }
    }
}