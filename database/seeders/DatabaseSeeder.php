<?php

namespace Database\Seeders;

use App\Models\category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

      $categoryFactory = category::factory(10)->create();

    }
}
