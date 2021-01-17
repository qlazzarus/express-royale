<?php

namespace App\Http\Requests;

use App\Helpers\JsonValidationSchema;
use Illuminate\Foundation\Http\FormRequest;

class SignInRequest extends FormRequest
{
    use JsonValidationSchema;

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }
}
