<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $guarded = [];
    protected $table = 'customer';

    public function user()
    {
        return $this->belongsTo('App\User', 'id_user');
    }
}