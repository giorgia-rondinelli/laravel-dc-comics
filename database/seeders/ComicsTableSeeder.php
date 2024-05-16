<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comic;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $comics=config('');
        foreach($comics as $comic){
            $new_comic= new Comic();
            $new_comic->title=$comic[''];
            $new_comic->year=$comic[''];
            $new_comic->description=$comic[''];
        }
    }
}
