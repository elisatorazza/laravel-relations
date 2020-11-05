<?php

use Illuminate\Database\Seeder;
use App\AuthorInfo;
use App\Author;
use Faker\Generator as Faker;

class AuthorInfoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $authors = Author::all();

        foreach($authors as $author) {
        $authorInfo = new AuthorInfo;
        $authorInfo->author_id = $authors->id;
        $authorInfo->nationality = $faker->country();
        $authorInfo->biography = $faker->paragraph(5, true);
        $authorInfo->image = $faker->imageURL(200,300);
        $authorInfo->alive = $faker->boolean(50); 
        }   
    }
}
