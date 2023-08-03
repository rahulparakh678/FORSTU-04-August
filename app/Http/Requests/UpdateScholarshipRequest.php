<?php

namespace App\Http\Requests;

use App\Scholarship;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdateScholarshipRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('scholarship_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'scheme_name' => [
                'required',
            ],
            'category_id' => [
                'required',
                'integer',
            ],
            'courses.*'   => [
                'integer',
            ],
            'courses'     => [
                'required',
                'array',
            ],
            'last_date'   => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
        ];
    }
}