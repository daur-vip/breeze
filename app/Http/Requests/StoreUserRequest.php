<?php

namespace App\Http\Requests;

use App\Rules\TwoWords;
use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required', new TwoWords],
            'email' => 'unique:users,email',
            'phone1' => 'nullable|numeric|size:10',
            'phone2' => 'nullable|numeric|size:10',
            'password' => '',
            
        ];
    }
}
