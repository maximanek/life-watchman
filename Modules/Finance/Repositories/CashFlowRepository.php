<?php

namespace Modules\Finance\Repositories;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Auth;
use Modules\Finance\Entities\CashFlow;

class CashFlowRepository
{
    public function getUserPayments(): Collection
    {
        return CashFlow::where('user_id', Auth::id())
            ->with(['financeSubCategory.financeMainCategory'])
            ->get();
    }

    public function store(array $data)
    {
         CashFlow::create(['user_id' => Auth::id()]+ $data);
    }
}
