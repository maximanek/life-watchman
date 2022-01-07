<?php

namespace Modules\Finance\Services;

use Illuminate\View\View;

class CreateCashFlowService
{
    public function execute(): View
    {
        return view('finance::create');
    }

}
