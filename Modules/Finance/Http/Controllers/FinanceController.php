<?php

namespace Modules\Finance\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\View\View;

class FinanceController extends Controller
{
    public function index(): View
    {
        return view('finance::index');
    }


}
