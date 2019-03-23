<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use \Toastr;
use Illuminate\Contracts\Validation\Validator;

class ContactRequest extends FormRequest
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
        // dd(2);
        return [
            'name' => 'required|max:255',
            'phone' => 'required|max:15',
            'email' => 'required|email|max:50',
            'message' => 'required'
        ];
    }

    protected function formatErrors(Validator $validator)
    {
        dd(1);
        $messages = $validator->messages();
        foreach ($messages->all() as $message)
        {
            \Toastr::error($message, 'Failed', ['timeOut' => 10000]);
        }

        return $validator->errors()->all();
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'A name is required',
            'phone.required' => 'A phone is required',
            'phone.max' => 'Phone can\'t be more than 15 digits',
            'email.required' => 'An email is required',
            'email.max' => 'Email can\'t be more than 50 letters',
            'message.required'  => 'A message is required',
        ];
    }
}
