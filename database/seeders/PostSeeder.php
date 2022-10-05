<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 50; $i++) { 
            DB::table('posts')->insert([
                'title' => str_random(10),
                'content' => str_random(100),
                'user_id' => rand(0, 10),
                
            ]);
        }
    }
}
