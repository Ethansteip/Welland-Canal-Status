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

        $testRaising = BridgeStatus::where('bridge_id', $id )
            ->where('status', 'Raising')
            ->first();

        $testFullyRaised = BridgeStatus::where('bridge_id', $id)
            ->where('status', 'like', 'Fully Raised%')
            ->where('id', '>', $testRaising->id)
            ->first();

        $testRaise = ($testRaising->created_at);
        $testFull = ($testFullyRaised->created_at);


        $finalDuration = $testFull->diffForHumans($testRaise);

        //return $finalDuration to view;

        return view('bridge.partials.test', compact('finalDuration'));
           
    }
}
