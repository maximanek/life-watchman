<?php

namespace Modules\Finance\Services;

use Illuminate\Http\RedirectResponse;
use Modules\Finance\Repositories\CashFlowRepository;

class UpdateCashFlowService
{

    public function __construct(private CashFlowRepository $cashFlowRepository)
    {
    }

    public function execute(array $data, int $id): RedirectResponse
    {
        $this->cashFlowRepository->update($data, $id);
        return redirect()->route('finance.index');
    }
}
