<?php

namespace App\Http\Requests\Country;

use Illuminate\Foundation\Http\FormRequest;

class GetUsersRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'countryName' => [
                'required',
                'exists:countries,name',
            ],
        ];
    }
}
