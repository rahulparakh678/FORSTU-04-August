<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\CollegeSociety;

class College extends Model
{
    //
    public $table = 'colleges';

    protected $fillable = [
        'college_name',
        'ref_code',
        'collegetrust_name',
        'college_email',
        
    ];


     public function college_society()
    {
        return $this->belongsTo(CollegeSociety::class, 'collegetrust_name');
    }
}
