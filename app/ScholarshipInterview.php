<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ScholarshipInterview extends Model
{
    //
    public $table='scholarship_interviews';

    protected $fillable = [
        'user_id',
        'scheme_id',
        'interview_title',
        'interview_duration',
        'interview_date_time',
        'interview_type',
        'description',
        ];
}
