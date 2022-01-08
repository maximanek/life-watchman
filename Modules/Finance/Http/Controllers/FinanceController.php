<?php

namespace Modules\Finance\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\View\View;
use Modules\Finance\Services\CashFlow\CreateCashFlowService;
use Modules\Finance\Services\CashFlow\DeleteCashFlowService;
use Modules\Finance\Services\CashFlow\EditCashFlowService;
use Modules\Finance\Services\CashFlow\GetCashFlowsService;
use Modules\Finance\Services\CashFlow\StoreCashFlowService;
use Modules\Finance\Services\CashFlow\UpdateCashFlowService;

class FinanceController extends Controller
{
    public function __construct(protected GetCashFlowsService  $getCashFlowsService,
                                protected CreateCashFlowService $createCashFlowService,
                                protected StoreCashFlowService $storeCashFlowService ,
                                protected EditCashFlowService $editCashFlowService,
                                protected UpdateCashFlowService $updateCashFlowService,
                                protected DeleteCashFlowService $deleteCashFlowService)
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

    public function edit(int $id): View
    {
        return $this->editCashFlowService->execute($id);
    }

    public function update(Request $request, int $id): RedirectResponse
    {
        return $this->updateCashFlowService->execute($request->all(), $id);
    }

    public function delete(int $id): RedirectResponse
    {
        return $this->deleteCashFlowService->execute($id);
    }


}
