<?php

namespace Database\Seeders;

use App\Models\DcComics;
use Faker\Generator as Faker;
use App\Functions\Helper;
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
        $arr_comics= config('dc_comics');
        foreach($arr_comics as $data_comic){
            $comic= new DcComics();
            $comic->img = $data_comic['thumb'];
            $comic->slug = Helper::generateSlug($comic->title, DcComics);
            $comic->title = $data_comic['title'];
            $comic->description = $data_comic['description'];
            $comic->price = floatval(str_replace('$', '', $data_comic['price']));
            $comic->series = $data_comic['series'];
            $comic->sale_date = $data_comic['sale_date'];
            $comic->type = $data_comic['type'];
            $comic->save();
        }
    }
}
