<?php

namespace App\Http\Controllers\Auth;

use App\Enums\UserChannel;
use App\Providers\RouteServiceProvider;
use App\Http\Controllers\Controller;
use App\Http\Requests\SignUpRequest;
use App\Services\AccountService;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

/**
 * Class RegisterController
 * https://github.com/ankurk91/laravel-socialite-multiple-providers-example/blob/master/app/Http/Controllers/Auth/SocialiteController.php
 * @package App\Http\Controllers\Auth
 */
class RegisterController extends Controller
{
    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected string $redirectTo = RouteServiceProvider::HOME;

    protected AccountService $accountService;

    /**
     * RegisterController constructor.
     * @param AccountService $accountService
     */
    public function __construct(AccountService $accountService)
    {
        $this->middleware('guest');
        $this->accountService = $accountService;
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => [
                'required',
                'string',
                'max:255'
            ],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique('user_channels', 'channel_id')->where(function ($query) {
                    return $query->where('channel', UserChannel::Email);
                }),
            ],
            'password' => [
                'required',
                'string',
                'min:8',
                'confirmed'
            ],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param SignUpRequest $request
     * @return User
     */
    protected function create(SignUpRequest $request)
    {
        return null;
        /*
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
        */
    }
}
