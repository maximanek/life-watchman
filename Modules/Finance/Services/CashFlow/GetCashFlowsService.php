<?php

namespace Modules\Finance\Services\CashFlow;

use Illuminate\View\View;
use Modules\Finance\Repositories\CashFlowRepository;

class GetCashFlowsService
{

    public function __construct(private CashFlowRepository $cashFlowRepository)
    {
    }

    public function execute():View
    {
        return view('finance::index', [
            'payments' => $this->cashFlowRepository->getUserPayments()
        ]);
    }
}

