<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Illuminate\Support\Str;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1,10) as $index)
        {
            $title = $faker->name;
            DB::table('posts')->insert(
                [
                    'title' => $title,
                    'slug' => Str::slug($title),
                    'content' => $faker->paragraph,
                    'category_id' => $faker->numberBetween(1,10),
                    'created_at' => $faker->dateTime
                ]
            );
        }
    }
}
