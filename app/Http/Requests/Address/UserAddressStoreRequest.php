<?php

namespace App\Http\Requests\Address;

use Illuminate\Foundation\Http\FormRequest;

class UserAddressStoreRequest extends FormRequest
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
            'address' => 'required|string',
            'home' => 'required|string',
            'flat' => 'required|string',
            'user_id' => 'nullable|integer',
            'country_id' => 'required|integer|exists:address_countries,id',
            'city_id' => 'required|integer|exists:address_cities,id',
        ];
    }
}
