<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\withoutModeEvents;

use Illuminate\Support\Str;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $limit = 10;

      for ($i = 0; $i < $limit; $i++) {
        DB::table('news')->insert([
          'title'=> Str::random(10),
          'email'=>Str::random(10).'@email.com',
          'description'=> Str::random(10),
        // 'created_at' => Str::random(10),
        // 'updated_at' => Str::random(10),
        ]);
        
      }
    }
}
