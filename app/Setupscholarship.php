<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;
use \DateTimeInterface;

class Setupscholarship extends Model
{
    //
    use SoftDeletes;
    public $table = 'scholarships';


    protected $dates = [
        'last_date',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
      const STATUS_SELECT = [
        'Active'    => 'Active',
        'Closed'    => 'Closed',
        'In Drafts' => 'In Drafts',
    ];
     protected $fillable = [
        'user_id',
        'scheme_name',
        'company_name_id',
        'category_id',
        'scheme_description',
        'eligibility_criteria',
        'benefits',
        'how_to_apply',
        'last_date',
        'docs_required',
        'scholarship_amount',
        'terms_conditions',
        'contact_address',
        'contact_email',
        'contact_phone_number',
        'status',
        'created_at',
        'updated_at',
        'deleted_at',
        'video_link',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
    public function company_name()
    {
        return $this->belongsTo(ScholarshipProvider::class, 'company_name_id');
    }
     public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    public function studentcourses()
    {
        return $this->belongsToMany(StudentCourses::class);
    }
     public function getLastDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }
    public function setLastDateAttribute($value)
    {
        $this->attributes['last_date'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

     public function profile()
    {
        //return $this->hasOne(StudentProfile::class);
        return $this->belongsTo(StudentProfile::class, 'dob');
    }

}
