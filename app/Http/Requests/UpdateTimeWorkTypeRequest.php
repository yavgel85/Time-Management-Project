<?php

namespace App\Http\Requests;

use App\TimeWorkType;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdateTimeWorkTypeRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('time_work_type_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;

    }

    public function rules()
    {
        return [
            'name' => [
                'required'],
        ];

    }
}
