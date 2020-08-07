<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CC extends Model
{
    protected $table = 'cc';

    protected $guarded = ['id', 'created_at', 'updated_at'];
    protected $dates = ['paied_at', 'created_at', 'updated_at'];
}