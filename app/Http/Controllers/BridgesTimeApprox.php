<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BridgesTimeApprox extends Controller
{
    public function averageRaisingTime() {

        $averageTime = 0;

        //Find the first instance of bridgeA's status switching from "Available" to "Raising Soon".

        //Save the time stamp of that instance

        //Find the next instance of BridgeA's status switching from "Raising Soon" to "Fully Raised".

        //Save that timestamp.
        
        //Find the duration between those 2 timestamps.

    }
}
