<?php

namespace App\Services;

use App\Models\Bridge;
use App\Models\BridgeStatus;

class BridgeStatusService
{
    public static function get() {
        $jsondata = file_get_contents("https://canalstatus.com/api/v1/bridges/");
        $json = json_decode($jsondata, true);
        $bridges = $json['bridges'];

        foreach($bridges as $bridge) {
            Bridge::updateOrCreate(
                [
                    'bridge_id' => $bridge['id']
                ],
                [
                    'bridge_id' => $bridge['id'],
                    'name' => $bridge['name'],
                    'nickname' => $bridge['nickname'],
                    'location' => $bridge['location'],
                    'order' => $bridge['order'],
                    'canal_id' => $bridge['canal_id'],
                ]
            );

            $status = $bridge['status'];

            BridgeStatus::updateOrCreate(
                [
                    'status_id' => $status['id']
                ],
                [
                    'status_id' => $status['id'],
                    'bridge_id' => $status['bridge_id'],
                    'status' => $status['status'],
                    'status_type' => $status['status_type'],
                ]
            );
        }

        return true;
    }
}
