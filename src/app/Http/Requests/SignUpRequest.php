<?php

namespace App\Http\Requests;

use App\Enums\UserChannel;
use App\Helpers\JsonValidationSchema;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

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
        $rules = $this->schema();

        // merge below here
        if (array_key_exists('email', $rules)) {
            $rules['email'][] = Rule::unique('user_channels', 'channel_id')->where(function ($query) {
                return $query->where('channel', UserChannel::Email);
            });
        }

        return $rules;
    }
}
