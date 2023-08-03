<?php

namespace App\Http\Requests;

use App\StudentCourses;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreCourseRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('course_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

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
    }
}