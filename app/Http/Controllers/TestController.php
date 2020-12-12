<?php

namespace App\Http\Controllers;

use App\Models\Bridge;
use App\Models\BridgeStatus;
use App\Services\BridgeStatusService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\Test;

class TestController extends Controller
{
    public function showDuration()
    {

        $bridgeArr = [1, 2, 3, 4, 5, 6, 7];

        forEach($bridgeArr as $value)
        {

        $testRaising = Test::where('bridge_id', $value )->where('bridge_status', 'raising')->first();

        $testFullyRaised = Test::where('bridge_id', $value)->where('bridge_status', 'Fully Raised')->first();

        $testRaise = ($testRaising->status_time);
        $testFull = ($testFullyRaised->status_time);

        $estimatedBridgeDuration = $testRaise - $testFull;
        
        $finalDuration = date('Y-m-d H:i:s', $estimatedBridgeDuration); 

        

        //return View('bridge.index', compact('testRaising'));

        echo view('bridge.partials.test', compact('finalDuration'));
        
        };

        
    }
}
