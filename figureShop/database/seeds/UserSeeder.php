<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Rocky',
            'email' => 'rocky@gmail.com',
            'password' => bcrypt('rocky'),
            'phone' => '123456789011',
            'gender' => 'Male',
            'address' => 'Jalan Raya Kucing Oren',
            'picture' => 'pikachu_figure.jpg',
            'role' => 'Admin'
        ]);
    }
}
