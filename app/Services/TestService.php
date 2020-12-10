<?php

namespace App\Services;

use App\Models\Test;


class testService
{
    public static function show()
    {
        $testRaising = Test::where('bridge_id', '5')->where('bridge_status', 'raising')->first();

        $testFullyRaised = Test::where('bridge_id', '5')->where('bridge_status', 'Fully Raised')->first();

        $testRaise = intval($testRaising->status_time);
        $testFull = intval($testFullyRaised->status_time);

        $estimatedBridgeDuration = $testRaise - $testFull;
        
        $finalDuration = date('Y-m-d H:i:s', $estimatedBridgeDuration); 

        //return View('bridge.index', compact('testRaising'));
        return $finalDuration;
    }
}