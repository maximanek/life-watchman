<?php

namespace Modules\Finance\Services\CashFlow;

use Illuminate\Http\RedirectResponse;
use Modules\Finance\Repositories\CashFlowRepository;

class UpdateCashFlowService
{

    public function __construct(private CashFlowRepository $cashFlowRepository)
    {
    }

    public function execute(array $data, int $id): RedirectResponse
    {
        $data['is_subscription'] = $data['is_subscription'] ?? 0;
        $data['is_income'] = $data['is_income'] ?? 0;
        $this->cashFlowRepository->update($data, $id);
        return redirect()->route('finance.index');
    }
}
