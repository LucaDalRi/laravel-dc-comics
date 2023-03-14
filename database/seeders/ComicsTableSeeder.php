<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config('comic');
        

        foreach ($comics as $comic) {
            $singleComics = new Comic;
            $singleComics->title = $comic['title'];
            $singleComics->description = $comic['description'];
            $singleComics->thumb = $comic['thumb'];
            $singleComics->price = $comic['price'];
            $singleComics->series = $comic['series'];
            $singleComics->sale_date = $comic['sale_date'];
            $singleComics->type = $comic['type'];

            $singleComics->save();
        }
    }
}
