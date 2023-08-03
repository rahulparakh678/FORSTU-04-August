<?php

namespace App\Http\Requests;

use App\ScholarshipProvider;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdateScholarshipProviderRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('scholarship_provider_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'organization_name' => [
                'required',
            ],
            'contact_person'    => [
                'required',
            ],
        ];
    }
}