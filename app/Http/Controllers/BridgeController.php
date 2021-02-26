<?php

namespace App\Http\Controllers;

use App\Models\Bridge;
use App\Models\BridgeStatus;

use App\Services\BridgeStatusService;
use App\Services\testService;
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
        $duration = (new testService)->getAvg($bridge, BridgeStatus::STATUS_RAISING, BridgeStatus::STATUS_AVAILABLE, '2020-10-01', '2021-02-25');
        

        $bridgeStatus = $bridge->status()
            ->paginate(10);


        return view('bridge.show', compact('bridge', 'bridgeStatus', 'duration'));
    }
}
