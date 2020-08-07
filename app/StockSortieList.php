<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StockSortieList extends Model
{
    protected $table = 'sortielistproducts';

    protected $guarded = ['id', 'created_at', 'updated_at'];


    // Get Post User
    public function cityID()
    {
        return $this->belongsTo('\App\Models\Product', 'ProductID');
    }


    public static function ValidateMe($id, $valid)
    {
        $yep = self::find($id);
        $yep->valid = $valid;
        $yep->statue = 1;
        $yep->save();
    }


    public function product()
    {
        return $this->belongsTo('\App\Models\Product', 'productID');
    }
}