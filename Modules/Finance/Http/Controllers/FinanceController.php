<?php

namespace Modules\Finance\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\View\View;
use Modules\Finance\Services\CreateCashFlowService;
use Modules\Finance\Services\GetCashFlowsService;
use Modules\Finance\Services\StoreCashFlowService;

class FinanceController extends Controller
{
    public function __construct(private GetCashFlowsService  $getCashFlowsService,
                                private CreateCashFlowService $createCashFlowService,
                                private StoreCashFlowService $storeCashFlowService )
    {
    }

    public function index(): View
    {
        return $this->getCashFlowsService->execute();
    }

    public function create(): View
    {
        return $this->createCashFlowService->execute();
    }

    public function store(Request $request): RedirectResponse
    {
        return $this->storeCashFlowService->execute($request->all());
    }


}
