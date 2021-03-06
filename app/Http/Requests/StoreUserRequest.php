<?php

namespace App\Http\Requests;

use App\Rules\TwoWords;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

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
            'email' => Rule::unique('users', 'email')->ignore($this->user),
            'phone1' => 'nullable|numeric|size:10',
            'phone2' => 'nullable|numeric|size:10',
            'password' => '',
            
        ];
    }
}
