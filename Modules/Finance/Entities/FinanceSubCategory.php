<?php

namespace Modules\Finance\Entities;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FinanceSubCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'finance_main_category_id',
        'user_id',
        'name',
    ];

    public function financeMainCategory(): BelongsTo
    {
        return $this->belongsTo(FinanceMainCategory::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
