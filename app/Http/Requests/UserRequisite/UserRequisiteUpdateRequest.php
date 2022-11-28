<?php

namespace App\Http\Requests\UserRequisite;

use Illuminate\Foundation\Http\FormRequest;

class UserRequisiteUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title_bank' => 'required',
            'iik' => 'required',
            'bik' => 'required',
            'kbe' => 'required',
    ];
    }
}
