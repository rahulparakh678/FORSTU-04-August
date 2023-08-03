<?php

namespace App\Http\Requests;

use App\ScholarshipAchiever;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyScholarshipAchieverRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('scholarship_achiever_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:scholarship_achievers,id',
        ];
    }
}