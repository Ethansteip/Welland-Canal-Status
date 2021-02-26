<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BridgeStatus extends Model
{
//    use HasFactory;
    protected $table = 'bridge_status';

    protected $fillable = [
        
        'bridge_id', 
        'status_id', 
        'status', 
        'status_type'
    ];


    const STATUS_RAISING = 'Raising';
    const STATUS_AVAILABLE = 'Available';
    const VALID_STATUS = [
        self::STATUS_RAISING,
        self::STATUS_AVAILABLE,

    ];
    


    public function bridge()
    {
        return $this->belongsTo(Bridge::class, 'bridge_id');
    }

    public function getRaisingHistory()
    {
        $raise = Bridge::all()->get();

        return $raise;
    }


}
