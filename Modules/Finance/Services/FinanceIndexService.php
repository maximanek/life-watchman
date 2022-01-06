<?php

namespace Modules\Finance\Services;

use Illuminate\View\View;
use Modules\Finance\Repositories\CashFlowRepository;

class FinanceIndexService
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

