<?php

namespace App\Http\Controllers;

use App\Models\Bridge;
use App\Models\BridgeStatus;
use App\Services\BridgeStatusService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class BridgeController extends Controller
{
    public function index() {
        (new BridgeStatusService)->get();

        $bridges = Bridge::with('status')->get();

        return View::make('bridge.index', compact('bridges'));
    }

    public function show(Bridge $bridge)
    {
        ddd($bridge);
    }
}
