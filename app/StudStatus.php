<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \DateTimeInterface;
use Carbon\Carbon;

class StudStatus extends Model
{
    //
    protected $fillable = [
        'user_id',
        'scheme_name',
        'status',
        'created_at',
        'updated_at',
        
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
