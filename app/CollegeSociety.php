<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CollegeSociety extends Model
{
    //
    public $table = 'college_societies';

    protected $fillable = [
        'collegetrust_name',
        'collegetrust_address',
        'contactperson_name',
        'contactperson_designation',
        'contact_number',
        'collegetrust_email',
        
    ];


   

}
