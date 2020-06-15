<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class MessageControllerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

      DB::table('message_controllers')->insert([
     'user_name' => 'Milk',
     'message_input' => 'Discount if you return the glassbottle',
     'user_id' => 1,
     'updated_at' => Carbon::now(),
     'created_at' => Carbon::now()
 ]);
    }
}
