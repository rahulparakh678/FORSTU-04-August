<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePersonalDetails extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            'email'                        => [
                'required',
                'unique:student_profiles,email',
                
                
            ],
            'fullname'                     => [
                'regex:/^[\pL\s\-]+$/u',
                'min:4',
                'max:510',
                'required',
            ],
            'mobile'                       => [
                'min:0',
                'max:10',
                'required',
                'unique:student_profiles,mobile',
                
                
            ],
            'dob'                          => [
                'required',
                'date_format:' . config('panel.date_format'),
            ],
            'gender'                       => [
                'required',
            ],
            'religion'                     => [
                'required',
            ],
            
            'handicapped'                  => [
                'required',
            ],
            'aadharnumber'                 => [
                
                'integer',
                'regex:/^[0-9]{12}$/',

                'unique:student_profiles,aadharnumber',
            ],
            
        ];
    }
}
