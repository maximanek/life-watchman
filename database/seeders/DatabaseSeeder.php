<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Finance\Database\Seeders\FinanceDatabaseSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(FinanceDatabaseSeeder::class);
    }
}
