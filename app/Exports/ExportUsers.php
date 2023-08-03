<?php

namespace App\Exports;

use App\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ExportUsers implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return User::all();
    }
     public function headings(): array
    {
    	return [
    		'id','name','email','user_type','mobile','gender','email_verified_at','password','ref_code','created_at','updated_at','deleted_at',

    	];
    }	
}
