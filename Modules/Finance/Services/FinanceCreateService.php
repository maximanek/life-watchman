<?php

namespace Modules\Finance\Services;

use Illuminate\View\View;

class FinanceCreateService
{
    public function execute(): View
    {
        return view('finance::create');
    }

}
