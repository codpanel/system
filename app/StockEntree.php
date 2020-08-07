<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StockEntree extends Model
{
    protected $table = 'stockentree';

    protected $guarded = ['id', 'created_at', 'updated_at'];


    public function product()
    {
        return $this->belongsTo('\App\Models\Product', 'productID');
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