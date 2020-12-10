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
    public function showDuration($id)
    {

        $testRaising = Test::where('bridge_id', $id )->where('bridge_status', 'raising')->first();

        $testFullyRaised = Test::where('bridge_id', $id)->where('bridge_status', 'Fully Raised')->first();

        $testRaise = intval($testRaising->status_time);
        $testFull = intval($testFullyRaised->status_time);

        $estimatedBridgeDuration = $testRaise - $testFull;
        
        $finalDuration = date('Y-m-d H:i:s', $estimatedBridgeDuration); 

        $min = 1;
        $max = 7;

        //return View('bridge.index', compact('testRaising'));

        if (($id < $min) && ($id > $max)) 
        {
            return 'Sorry, bridge duration not found';
        } else {
            return view('bridge.partials.test', compact('finalDuration'));
        }

        
    }
}
