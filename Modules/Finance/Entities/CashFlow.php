<?php

namespace Modules\Finance\Entities;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CashFlow extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'sub_category_id',
        'value',
        'name',
        'date',
        'is_subscription',
        'is_income',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function financeSubCategory(): BelongsTo
    {
        return $this->belongsTo(FinanceSubCategory::class, 'sub_category_id', 'id');
    }

}
