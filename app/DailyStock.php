<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DailyStock extends Model
{
    protected $table = 'dailystock';

    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function product()
    {
        return $this->belongsTo('\App\Models\Product', 'productID');
    }

    public function city()
    {
        return $this->belongsTo('\App\Models\Cities', 'stockcity');
    }
}