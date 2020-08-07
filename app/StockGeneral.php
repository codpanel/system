<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StockGeneral extends Model
{
    protected $table = 'stockgeneral';

    protected $guarded = ['id', 'created_at', 'updated_at'];


    public function product()
    {
        return $this->belongsTo('\App\Models\Product', 'ProductID');
    }

    public function city()
    {
        return $this->belongsTo('\App\Models\Cities', 'CityID');
    }

    public function deliver()
    {
        return $this->belongsTo('\App\Models\User', 'User_id');
    }


    public function sortie()
    {
        return $this->belongsTo('\App\Models\StockSortie', 'productID');
    }



    public function stockTheorique()
    {

        if (isset($this->StockPhisique) and isset($this->stockEnCours)) {
            if ($this->stockEnCours != '0') {
                echo $this->StockPhisique - $this->stockEnCours;
            } else {
                echo  $this->StockPhisique;
            }
        } else {
            echo  $this->StockPhisique;
        }
    }
}