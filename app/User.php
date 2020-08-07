<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /* ****************************** */

    protected $admin_role = 2;
    protected $table = 'users';

    protected $guarded = ['id', 'created_at', 'updated_at'];

    /* *************
     * Display User Role 
     * *************
    */
    public function printrole()
    {

        if ($this->role == 'admin') {
            echo '<span class="label bg-pink-800">مدير</span>';
        }
        if ($this->role == 'employee') {
            echo '<span class="label label label-success">موظفة</span>';
        }
        if ($this->role == 'data') {
            echo '<span class="label label-danger">مضيف بيانات</span>';
        }
        if ($this->role == 'deliver') {
            echo '<span class="label label-primary">  موزع </span>';
        }
        if ($this->role == 'stock') {
            echo '<span class="label bg-violet-800">متتبع المخزون</span>';
        }

        if ($this->role == 'suivi') {
            echo '<span class="label bg-violet-800">  لجنة المتابعة   </span>';
        }

        echo  " ";
    }

    /* *************
     * Display User Statue 
     * *************
    */
    public function statue()
    {
        $statue = self::where('username', $this->username)->first();

        if ($statue) {
            if ($statue->statue == 1) {
                echo '<span class="label border-left-success label-striped">' . $this->lang['panelang']['4'] . '</span>';
            }
            if ($statue->statue == 2) {
                echo '<span class="label border-left-primary label-striped">' . $this->lang['panelang']['5'] . '</span>';
            }
            if ($statue->statue == 3) {
                echo '<span class="label border-left-danger label-striped">' . $this->lang['panelang']['6'] . '</span>';
            }
        }
        echo  " ";
    }


    public function gender()
    {
        if ($this->gender == 'male') {
            return $this->lang['panelang']['7'];
        } else {
            return $this->lang['panelang']['8'];
        }
    }


    //    public function cities_list(){
    //        
    //        if(!empty($this->city)){
    //           $cities = explode(',',$this->city);
    //            foreach($cities as $city) {
    //            echo '<div class="his_cities">
    //                <input type="text"  class="form-control" name="city[]" value="'.$city.'" >
    //                <a><i class="icon-close2"></i></a>
    //            </div>';
    //        }
    //        }
    //        
    //        
    //         
    //    }
    //    
    public function cities()
    {
        return $this->hasMany('\App\Models\Cities', 'user_id');
    }


    //    public function reception()
    //    {
    //        return $this->hasManyThrough('\App\Models\Cities', '');
    //    }


    public function is_admin()
    {

        if ($this->role == $this->admin_role) {
            return true;
        }

        return false;
    }
}