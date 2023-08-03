<?php

namespace App\Http\Requests;

use App\Caste;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreCasteRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('caste_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'caste_name' => [
                'required',
            ],
        ];
    }
}