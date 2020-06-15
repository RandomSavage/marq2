<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;


class LosersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        DB::table('users')->insert([
            'name' => 'Ananda Dolan',
            'email' => 'ananda@email.com',
            'profile_image' => '/uploads/images/kiryu_1592237846.jpg',
            'password' => Hash::make('12345678'),
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        DB::table('users')->insert([
            'name' => 'johnny',
            'email' => 'johnny@email.com',
            'profile_image' => '/uploads/images/ben_1591661155.jpg',
            'password' => Hash::make('12345678'),
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
    }
}
