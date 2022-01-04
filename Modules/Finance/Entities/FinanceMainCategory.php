<?php

namespace Modules\Finance\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class FinanceMainCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function financeSubCategories():HasMany
    {
        return $this->hasMany(FinanceSubCategory::class);
    }


//    protected static function newFactory()
//    {
//        return \Modules\Finance\Database\factories\FinanceMainCategoryFactory::new();
//    }
}
