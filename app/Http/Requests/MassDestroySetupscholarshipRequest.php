<?php

namespace App\Http\Requests;

use App\Setupscholarship;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroySetupscholarshipRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('setupscholarship_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:setupscholarships,id',
        ];
    }
}