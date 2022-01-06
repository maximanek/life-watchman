<?php

namespace Modules\Finance\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Finance\Entities\FinanceSubCategory;

class SubCategoryTableSeeder extends Seeder
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
                'finance_main_category_id' => 1,
                'name' => 'Other'
            ],
        ];
        foreach($rows as $id => $row){
            FinanceSubCategory::updateOrCreate(
                ['id' => $id+1],
                $row
            );
        }
    }
}
