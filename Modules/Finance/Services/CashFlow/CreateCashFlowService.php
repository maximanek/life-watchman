<?php

namespace Modules\Finance\Services\CashFlow;

use Illuminate\View\View;

class CreateCashFlowService
{
    public function execute(): View
    {
        return view('finance::create');
    }

}
