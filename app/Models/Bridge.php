<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bridge extends Model
{
//    use HasFactory;

    protected $table = 'test';

    protected $fillable = ['bridge_id', 'bridge_status', 'status_time'];

    public function status()
    {
        return $this->hasMany(Test::class, 'bridge_id');
    }

    public function getDurationAttribute()
    {
        $testRaising = $this->status()->where('bridge_status', 'raising')->first();

        $testFullyRaised = $this->status()->where('bridge_status', 'Fully Raised')->first();

        $testRaise = ($testRaising->status_time);
        $testFull = ($testFullyRaised->status_time);

        $estimatedBridgeDuration = $testRaise - $testFull;
        
        $finalDuration = date('Y-m-d H:i:s', $estimatedBridgeDuration); 

        return finalDuration;
    }
}
