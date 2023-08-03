<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SaveProfile extends Model
{
    //
    public $table='save_profiles';

    protected $fillable = [
        'name',
        'categories',
        'profile_id',
        
    ];

     

   
    /*public function setCategoriesAttribute($value)
    {
        $this->attributes['categories'] = json_encode($value);
    }

    public function getCategoriesAttribute($value)
    {
        return $this->attributes['categories'] = json_decode($value);
    }
*/



      
}
