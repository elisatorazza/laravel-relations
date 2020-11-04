<?php

use Illuminate\Database\Seeder;
use App\Genre;
use Faker\Generator as Faker;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    // public function run()
    // {
    //     $genres = [
    //         'fantasy',
    //         'horror',
    //         'comedy',
    //         'drama',
    //         'manga',
    //     ];

    //     foreach ($genres as $genre) {
    //         $newGenre = new Genre;
    //         $newGenre->name = $genre;
    //         $newGenre->save();
    //     }
    // }
    public function run(Faker $faker){

        $genresArray = [];

        while (count($genresArray) < 10) {

            $fakerWord = $faker->word;

            if (!in_array($fakerWord, $genresArray)) {

                $genresArray[] = $fakerWord;
            }
        }

        foreach ($genresArray as $genre) {
                    $newGenre = new Genre;
                    $newGenre->name = $genre;
                    $newGenre->save();
                }
        

        // for ($i=0; $i<10; $i++) {
        //     $newGenre = new Genre;
        //     $newGenre->name = $faker->word;
        //     $newGenre->save();
        // }
    }
}
