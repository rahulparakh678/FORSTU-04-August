<?php

namespace App\Http\Requests;

use App\ScholarshipAchiever;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdateScholarshipAchieverRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('scholarship_achiever_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'student_name'      => [
                'min:0',
                'max:255',
                'required',
            ],
            'collegename'       => [
                'min:0',
                'max:255',
            ],
            'course'            => [
                'min:0',
                'max:255',
            ],
            'scholarshipamount' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
        ];
    }
}