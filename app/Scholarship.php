<?php

namespace App;



use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use \DateTimeInterface;

class Scholarship extends Model
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
    const MODE_SELECT = [
        'Online'    => 'Online',
        'Offline'   => 'Offline',
        'Both'      => 'Both',
        
    ];
    const MONTH_SELECT = [
        'January'       => 'January',
        'February'      => 'February',
        'March'         => 'March',
        'April'         => 'April',
        'May'           => 'May',
        'June'          => 'June',
        'July'          => 'July',
        'August'        => 'August',
        'September'     => 'September',
        'October'       => 'October',
        'November'      => 'November',
        'December'      => 'December',
        
    ];

    protected $fillable = [
        'user_id',
        'scheme_name',
        'company_name_id',
        'scheme_description',
        'eligibility_criteria',
        'category_id',
        'benefits',
        'scholarship_amount',
        'how_to_apply',
        'last_date',
        'expected_month',
        'docs_required',
        'terms_conditions',
        'contact_address',
        'contact_email',
        'contact_phone_number',
        'status',
        'mode',
        'created_at',
        'updated_at',
        'deleted_at',
        'student_count',
        'scholarship_corpus',
        'gender_criteria',
       // 'slug',
        'application_link',
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
    public function documents()
    {
        return $this->belongsToMany(Documents::class,'document_scholarship','documents_id');
    }

    public function courses()
    {
        return $this->belongsToMany(Course::class);
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
    public function users()
    {
        return $this->belongsToMany(User::class)->withTimeStamps()->withPivot('status','id');
    }
    public function checkApplication()
    {
       return \DB::table('scholarship_user')->where('user_id',auth()->user()->id)->where('scholarship_id',$this->id)->exists();
    }
}
