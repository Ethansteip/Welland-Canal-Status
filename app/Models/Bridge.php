<?php

namespace App\Models;


//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bridge extends Model
{
//    use HasFactory;

    protected $table = 'bridge';

    protected $fillable = ['bridge_id', 'name', 'nickname', 'location', 'order', 'canal_id'];

    public function status()
    {
        return $this->hasMany(BridgeStatus::class, 'bridge_id');
    }
    
    public function getDurationAttribute()
    {
       
        $testRaising = $this->status()
            ->where('status', 'Raised')
            ->latest()
            ->first();
        
        if ($testRaising === null) {
            return 'no raising';
        }

        $testFullyRaised = $this->status()
            ->where('status', 'like', 'Fully Raised%')
            ->where('id', '>', $testRaising->id)
            ->first();

        
        if ($testFullyRaised === null)
        {
            return "no raise";
        }
        
        $testRaise = ($testRaising->created_at);
        $testFull = ($testFullyRaised->created_at);




        //ddd($testFull);

        //$estimatedBridgeDuration = $testRaise - $testFull;
        
        
        $finalDuration = date('Y-m-d H:i:s', $estimatedBridgeDuration); 

        return $testFull->diffForHumans($testRaise);
    }

    public function getHistoryAttribute()
    {
        //select a bridge
        $raising = $this->status()
            ->where('status', 'Raising')
            ->first();

        return $raising->created_at->diffForHumans();

        
        //find the all instances of the bridge status changing in the last 24 hours
        //for each of those instances return the bridge name, id, status, timestamp;
    }

    public function getRaisingAttribute()
    {
        $raising = $this->status()
            ->where('status', 'Raising')
            ->latest()
            ->first();

        return $raising;
    }
}
