<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category')->insert([
            'categoryName' => 'Pokemon'
        ]);

        DB::table('category')->insert([
            'categoryName' => 'Naruto'
        ]);
    }
}
