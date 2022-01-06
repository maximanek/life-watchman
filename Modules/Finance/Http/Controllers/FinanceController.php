<?php

namespace Modules\Finance\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\View\View;
use Modules\Finance\Services\FinanceCreateService;
use Modules\Finance\Services\FinanceIndexService;
use Modules\Finance\Services\FinanceStoreService;

class FinanceController extends Controller
{
    public function __construct(private FinanceIndexService $financeIndexService,
                                private FinanceCreateService $financeCreateService,
                                private FinanceStoreService $financeStoreService )
    {
    }

    public function index(): View
    {
        return $this->financeIndexService->execute();
    }

    public function create(): View
    {
        return $this->financeCreateService->execute();
    }

    public function store(Request $request): RedirectResponse
    {
        return $this->financeStoreService->execute($request->all());
    }


}
