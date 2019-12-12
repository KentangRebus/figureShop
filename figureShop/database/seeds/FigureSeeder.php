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
        DB::table('figure')->insert([
            'categoryId' => '1',
            'figureName' => 'Pikachu',
            'figureDescription' => 'Mouse electric pokemon, strong and agile',
            'figureQuantity' => '41',
            'figurePrice' => '50000',
            'figurePicture' => ''
        ]);

        DB::table('figure')->insert([
            'categoryId' => '1',
            'figureName' => 'Squirtle',
            'figureDescription' => 'Turtle water pokemon, have a nice defense and kind to the others',
            'figureQuantity' => '12',
            'figurePrice' => '30000',
            'figurePicture' => ''
        ]);

        DB::table('figure')->insert([
            'categoryId' => '2',
            'figureName' => 'Naruto',
            'figureDescription' => 'Strongest hokage alive with the power of kyubi',
            'figureQuantity' => '53',
            'figurePrice' => '20000',
            'figurePicture' => ''
        ]);

        DB::table('figure')->insert([
            'categoryId' => '2',
            'figureName' => 'Sasuke',
            'figureDescription' => 'His rival is naruto and he is the strongest uchiha ever',
            'figureQuantity' => '32',
            'figurePrice' => '60000',
            'figurePicture' => ''
        ]);
    }
}
