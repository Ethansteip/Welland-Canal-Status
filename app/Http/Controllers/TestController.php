<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;

class TestController extends Controller
{
    public function index()
    {
        $testRaising = Test::where('bridge_id', '4')->where('bridge_status', 'raising')->first();

        $testFullyRaised = Test::where('bridge_id', '4')->where('bridge_status', 'Fully Raised')->first();

        $testRaise = intval($testRaising->status_time);
        $testFull = intval($testFullyRaised->status_time);

        $estimatedBridgeDuration = $testRaise - $testFull;
        
        return date('Y-m-d H:i:s', $estimatedBridgeDuration); 
        

        //return $testSecondRaising;
    }
}
