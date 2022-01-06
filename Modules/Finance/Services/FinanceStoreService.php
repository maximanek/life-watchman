<?php

namespace Modules\Finance\Services;

use Illuminate\Http\RedirectResponse;
use Modules\Finance\Repositories\CashFlowRepository;

class FinanceStoreService
{
    public function __construct(private CashFlowRepository $cashFlowRepository)
    {
    }
    public function execute(array $data): RedirectResponse
    {
        $this->cashFlowRepository->store($data);
        return redirect()->route('finance.index');
    }


}
