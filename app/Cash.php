<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cash extends Model
{
    protected $table = 'cache';

    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function product()
    {
        return $this->belongsTo('\App\Models\Product', 'productID');
    }

    public function city()
    {
        return $this->belongsTo('\App\Models\Cities', 'cityID');
    }

    public function deliver()
    {
        return $this->belongsTo('\App\Models\User', 'userID');
    }
}