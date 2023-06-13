<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    protected $guarded = [];
    protected $table = 'rental';

    public function kendaraan()
    {
        return $this->belongsTo('App\Kendaraan', 'id_kendaraan');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'id_user');
    }
    
}