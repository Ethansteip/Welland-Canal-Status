<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bridge extends Model
{
//    use HasFactory;

    protected $table = 'bridge';

    protected $fillable = ['name', 'nickname', 'location', 'order', 'canal_id'];

    public function status()
    {
        return $this->hasMany(BridgeStatus::class, 'bridge_id');
    }
}
