<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\StudentCourses;
use Symfony\Component\HttpFoundation\Response;
use Gate;

class StoreStudentCourse extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        
        abort_if(Gate::denies('course_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

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
            'course_name'     => [
                'required',
            ],
            'course_duration' => [
                'required',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'course_type_id'  => [
                'required',
                'integer',
            ],
        ];
            //
        
    }
}
