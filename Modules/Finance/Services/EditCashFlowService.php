<?php

namespace Modules\Finance\Services;

use Illuminate\View\View;
use Modules\Finance\Repositories\CashFlowRepository;

class EditCashFlowService
{

    public function __construct(private CashFlowRepository $cashFlowRepository)
    {
    }

    public function execute(int $id): View
    {
        return view('finance::edit', [
           'payment' => $this->cashFlowRepository->getPayment($id)
        ]);
    }
}
