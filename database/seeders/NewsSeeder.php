<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class NewsSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        $categories = DB::table('categories')->pluck('id')->toArray();
        $sources = DB::table('sources')->pluck('id')->toArray();

        foreach ($categories as $categoryId) {
            for ($i = 0; $i < 10; $i++) {
                DB::table('news')->insert([
                    'category_id' => $categoryId,
                    'source_id' => $faker->randomElement($sources),
                    'title' => $faker->sentence,
                    'content' => $faker->paragraph,
                    'published_at' => $faker->dateTimeThisYear,
                ]);
            }
        }
    }
}
