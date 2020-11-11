<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BridgeStatus extends Model
{
//    use HasFactory;
    protected $table = 'bridge_status';

    protected $fillable = ['bridge_id', 'status_id', 'status', 'status_type'];

    public function bridge()
    {
        return $this->belongsTo(Bridge::class, 'bridge_id');
    }
}
