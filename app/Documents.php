<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Documents extends Model
{
    //
    protected $fillable = [
        'document_name',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function scholarships()
    {
        return $this->belongsToMany(Scholarship::class, 'document_scholarship','scholarship_id');
    }
}
