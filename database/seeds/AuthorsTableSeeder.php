<?php

use Illuminate\Database\Seeder;
use App\Author;
use App\AuthorInfo;
use Faker\Generator as Faker;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i<20; $i++) {

            $newAuthor = new Author;
            $newAuthor->name = $faker->firstName;
            $newAuthor->name = $faker->lastName;                                ;
            $newAuthor->date_of_birth = $faker->date('Y-m-d', 'now');
            $newAuthor->save();
        }
    }
}
