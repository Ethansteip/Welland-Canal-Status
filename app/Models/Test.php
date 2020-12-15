<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use HasFactory;

    protected $table = 'test';

    protected $fillable = ['bridge_name', 'bridge_status', 'bridge_id'];

    public function raising() 
    {

        return $this->hasMany(Test::class, 'bridge_id');
    }


    





}
