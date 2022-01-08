<?php

namespace Modules\Finance\Services\CashFlow;

use Illuminate\Http\RedirectResponse;
use Modules\Finance\Repositories\CashFlowRepository;

class StoreCashFlowService
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
