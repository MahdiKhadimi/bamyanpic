<?php

namespace Database\Seeders;

use App\Models\Image;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $images = Storage::allFiles('images');

        foreach($images as $image){

            if(strpos($image,".DS_Store")) continue;
            Image::factory()->create([
                'file'=>'storage/'.$image,
                'dimention'=>Image::getDimention($image),
            ]);
        }
        
        

    }

}