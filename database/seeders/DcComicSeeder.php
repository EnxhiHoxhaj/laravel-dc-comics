<?php

namespace Database\Seeders;

use App\Models\DcComics;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DcComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for($i = 0; $i < 10; $i++){
            $comic= new DcComics();
            $comic->title = $faker->randomElement(["Action Comics #1000: The Deluxe Edition", "American Vampire 1976 #1", "Batgirl #1", "Batman #56", "Batman Beyond #1", "Batman/Superman #1", "Batman/Superman Annual #1", "Batman: The Joker War Zone #1", "Batman: Three Jokers #1", "Batman: White Knight Presents: Harley Quinn #1", "Catwoman Vol. 1: Copycats"]);
            $comic->description = $faker->words(20, true);
            $comic->price = $faker->randomFloat(2, 5, 15);
            $comic->series = $faker->randomElement(["Action Comics", "Aquaman", "Batgirls", "Batman", "Batman Beyond", "Batman/Superman", "Batman: The Joker,War Zone", "Catwoman"]);
            $comic->sale_date = $faker->date('Y-m-d');
            $comic->type = $faker->randomElement(["graphic novel", "comic book"]);
            $comic->save();
        }
    }
}
