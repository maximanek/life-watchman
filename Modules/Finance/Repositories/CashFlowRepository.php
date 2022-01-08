<?php

namespace Modules\Finance\Repositories;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Auth;
use Modules\Finance\Entities\CashFlow;

class CashFlowRepository
{
    public function getPayment(int $id): CashFlow
    {
        return CashFlow::find($id);
    }

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
    public function update(array $data, int $id)
    {
         CashFlow::find($id)->update($data);
    }

    public function delete(int $id)
    {
        CashFlow::find($id)->delete();
    }
}
