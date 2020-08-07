<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class options extends Model
{
    protected $table = 'options';

    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function update_option($name, $value = '')
    {
        $option = Options::where('name', '=', $name)->first();
        if ($option) {
            $option->value = $value;
            $option->save();
        } else {
            if (!empty($name) and !empty($value)) {
                Options::create([
                    'name' => $name,
                    'value' => $value,
                ]);
            }
        }
    }

    public function get_option($name)
    {
        $option = Options::where('name', '=', $name)->first();
        if ($option) {
            return $option->value;
        }
        return " ";
    }

    //    
    //    public function __get($name){
    //        return Options::where('name','=',$name)->first();
    ////        return "dpdlmdlmdldmldmlm";
    //        
    //    }
}