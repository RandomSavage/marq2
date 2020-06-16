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
     'user_name' => 'kiryu',
     'message_input' => "All yo bass. You know the drill now. Let's make the Picnic model.",
     'user_id' => 3,
     'updated_at' => Carbon::now(),
     'created_at' => Carbon::now()
    ]);

     DB::table('message_controllers')->insert([
    'user_name' => 'Ananda Dolan',
    'message_input' => 'MASS ASSIGNMENT define which attributes are mass assignable (for security)
    we only want these 3 attributes able to be filled',
    'user_id' => 1,
    'updated_at' => Carbon::now(),
    'created_at' => Carbon::now()
    ]);

    DB::table('message_controllers')->insert([
   'user_name' => 'johnny',
   'message_input' => 'Like we talked about earlier, since we named our table fish, then it does not follow convention. We will explicitly call out the database name using protected table',
   'user_id' => 2,
   'updated_at' => Carbon::now(),
   'created_at' => Carbon::now()
   ]);

  //  DB::table('message_controllers')->insert([
  // 'user_name' => 'gnarls',
  // 'message_input' => 'Similar to how we defined our relationship in the Bear model, we will define the inverse of that relationship. A Fish belongs to a Bear.',
  // 'user_id' => 4,
  // 'updated_at' => Carbon::now(),
  // 'created_at' => Carbon::now()
  // ]);
  }
}
