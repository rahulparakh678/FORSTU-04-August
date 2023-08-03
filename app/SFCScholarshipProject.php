<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use \DateTimeInterface;
use Carbon\Carbon;

class SFCScholarshipProject extends Model
{
    //
    public $table='s_f_c_scholarship_projects';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    
     protected $fillable = [
              
        'scholarship_project_name',
        
        'created_at',
        'updated_at',
        
        
    ];
    
    
   public function userids()
    {
        return $this->belongsToMany(User::class);
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
