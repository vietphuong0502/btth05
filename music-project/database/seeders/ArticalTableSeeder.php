<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Article;

class ArticalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker =  Faker::create();
        for($i=0;$i<50;$i++){
            Article::create([
                'ma_bviet'=> $i+1,
                'tieude'=> $faker->sentence(30,true),
                'ten_bhat'=> $faker->sentence(10,true),
                'ma_tloai'=> $faker->numberBetween(1,5),
                'tomtat'=> $faker->paragraph(1,true),
                'noidung'=> $faker->paragraph(3,true),
                'ma_tgia'=> $faker->numberBetween(1,10),
                'hinhanh'=> $faker->imageUrl(640, 480, 'animal', true)

            ]);
        }
    }
}
