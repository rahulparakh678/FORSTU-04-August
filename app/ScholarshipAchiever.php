<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \DateTimeInterface;
use Illuminate\Database\Eloquent\SoftDeletes;
class ScholarshipAchiever extends Model
{
    //
        use SoftDeletes;
        public $table = 'scholarship_achievers';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'student_name',
        'collegename',
        'course',
        'students_city',
        'schemename',
        'scholarshipamount',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
     protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

}
