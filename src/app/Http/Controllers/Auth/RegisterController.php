<?php

namespace App\Http\Controllers\Auth;

use App\Providers\RouteServiceProvider;
use App\Http\Controllers\Controller;
use App\Http\Requests\SignUpRequest;
use App\Services\AccountService;
use App\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

/**
 * Class RegisterController
 * @package App\Http\Controllers\Auth
 * 
 * https://github.com/laravel/framework/blob/5.5/src/Illuminate/Foundation/Auth/RegistersUsers.php
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
     * Handle a registration request for the application.
     *
     * @param SignUpRequest $request
     * @return \Illuminate\Http\Response
     */
    public function register(SignUpRequest $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));

        $this->guard()->login($user);

        return $this->registered($request, $user)
                        ?: redirect($this->redirectPath());
    }

    /**
     * The user has been registered.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */
    protected function registered(Request $request, $user)
    {
        //
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
