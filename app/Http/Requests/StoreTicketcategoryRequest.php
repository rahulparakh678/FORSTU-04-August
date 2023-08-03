<?php

namespace App\Http\Requests;

use App\Ticketcategory;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreTicketcategoryRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('ticketcategory_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [];
    }
}