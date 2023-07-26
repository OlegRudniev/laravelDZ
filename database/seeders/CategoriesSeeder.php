<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    public function run()
    {
        $categories = [
            ['name' => 'Politics'],
            ['name' => 'Technology'],
            ['name' => 'Sports'],
            ['name' => 'Entertainment'],
            ['name' => 'Health'],
        ];

        DB::table('categories')->insert($categories);
    }
}
