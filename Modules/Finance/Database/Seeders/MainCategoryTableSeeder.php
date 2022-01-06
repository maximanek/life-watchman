<?php

namespace Modules\Finance\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Finance\Entities\FinanceMainCategory;

class MainCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        $rows = [
            [
                'name' => 'Other'
            ],
        ];
        foreach($rows as $id => $row){
            FinanceMainCategory::updateOrCreate(
                ['id' => $id+1],
                $row
            );
        }
    }
}
