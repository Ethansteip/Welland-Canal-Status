<?php

namespace App\Services;

use App\Models\Test;


class testService
{
    function findFirstInstance ($bridgeId, $bridgeStatus) {

        $firstInstance = DB::table('test')->where('bridge_id', $bridgeId)->where('bridge_status', '$bridgeStatus')->first();
        
        $nextPhase = DB::table('test')->where('bridge_id', '2')->where('bridge_status', 'Fully Raised')->first();
        
        
        }
}