<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i<=10; $i++){
            DB::table('products')->insert([
                'name' => 'Product '.$i,
                'price' => rand(50, 200),
                'description' => 'Description '.$i,
            ]);
        }
    }
}
