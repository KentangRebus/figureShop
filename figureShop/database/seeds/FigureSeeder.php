<?php

use Illuminate\Database\Seeder;

class FigureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('figures')->insert([
            'categoryId' => '1',
            'name' => 'Pikachu',
            'description' => 'Mouse electric pokemon, strong and agile',
            'quantity' => '41',
            'price' => '50000',
            'picture' => 'pikachu_figure.jpg'
        ]);

        DB::table('figures')->insert([
            'categoryId' => '1',
            'name' => 'Squirtle',
            'description' => 'Turtle water pokemon, have a nice defense and kind to the others',
            'quantity' => '12',
            'price' => '30000',
            'picture' => 'squirtle_figure.jpg'
        ]);

        DB::table('figures')->insert([
            'categoryId' => '2',
            'name' => 'Naruto',
            'description' => 'Strongest hokage alive with the power of kyubi',
            'quantity' => '53',
            'price' => '20000',
            'picture' => 'naruto_figure.jpg'
        ]);

        DB::table('figures')->insert([
            'categoryId' => '2',
            'name' => 'Sasuke',
            'description' => 'His rival is naruto and he is the strongest uchiha ever',
            'quantity' => '32',
            'price' => '60000',
            'picture' => 'sasuke_figure.jpg'
        ]);
    }
}
