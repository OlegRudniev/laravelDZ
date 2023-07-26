<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SourcesSeeder extends Seeder
{
    public function run()
    {
        $sources = [
            ['name' => 'BBC News', 'url' => 'https://www.bbc.com/news'],
            ['name' => 'TechCrunch', 'url' => 'https://techcrunch.com/'],
            // Add more sources as needed
        ];

        DB::table('sources')->insert($sources);
    }
}
