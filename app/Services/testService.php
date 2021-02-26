<?php

namespace App\Services;
use App\Models\BridgeStatus;
use App\Models\Bridge;

class testService {




    public function getAvg(Bridge $bridge, $start_status, $end_status, $start_date, $end_date=null)
    {
        if (! in_array($start_status, BridgeStatus::VALID_STATUS)
        || ! in_array($end_status, BridgeStatus::VALID_STATUS))
        {
            return 'invalid status';
        }


        if (empty($end_date))
        {
            $end_date = $start_date;
        }

        $currentId = 0;

        $totalTime = 0;

        $events = 0;

        $i = True;

        $bridgeStatus = $bridge->status()
                            ->whereIn('status', [$start_status, $end_status])
                            ->whereBetween('created_at', [$start_date, $end_date])
                            ->orderBy('status_id')
                            ->get();


        While ($i)
        {


            $start = $bridgeStatus->where('status', $start_status)
                            ->where('status_id','>', $currentId)
                            ->first();

            if (empty($start))
            {    
                    $i = False;
                    break;
            }

                $end = $bridgeStatus->where('status', $end_status)
                            ->where('status_id', '>', $start->status_id)
                            ->first();

                if (empty($end))
            {    
                    $i = False;
                    break;
            }

                $totalTime += ($end->created_at)->diffInSeconds($start->created_at);
                
                $events++;
                

                $currentId = $end->status_id;

            }
        if ($events == 0)
        {
            return 0;
        }

        return $totalTime / $events;

        }
    }





    