<?php

namespace Modules\Finance\Services;

use Illuminate\Http\RedirectResponse;
use Modules\Finance\Repositories\CashFlowRepository;

class DeleteCashFlowService
{
    public function __construct(private CashFlowRepository $cashFlowRepository)
    {
    }

    public function execute(int $id): RedirectResponse
    {
        $this->cashFlowRepository->delete($id);
        return redirect()->route('finance.index');
    }
}
