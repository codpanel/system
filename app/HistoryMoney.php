<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HistoryMoney extends Model
{
    protected $table = 'historymoney';

    protected $guarded = ['id', 'created_at', 'updated_at'];
}