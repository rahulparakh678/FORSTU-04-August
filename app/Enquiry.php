<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \DateTimeInterface;
use Carbon\Carbon;

class Enquiry extends Model
{
    //

    
    public $table='enquiries';
    protected $fillable = [
    	'fullname',
    	'orgname',
    	'emailaddress',
    	'mobile',
    	'designation',
    	'comments',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
