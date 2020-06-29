<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Helpers\JsonValidationSchema;

class SignUpRequest extends FormRequest
{
    use JsonValidationSchema;

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
        $rules = array_merge($this->schema(), [
            //
            'username' => 'required'
        ]);

        var_dump($rules);

        return $rules;
    }
}
