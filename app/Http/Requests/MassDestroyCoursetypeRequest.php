<?php

namespace App\Http\Requests;

use App\Coursetype;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyCoursetypeRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('coursetype_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:coursetypes,id',
        ];
    }
}