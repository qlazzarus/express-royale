<?php

namespace App\Http\Controllers\Auth;

use App\Providers\RouteServiceProvider;
use App\Http\Controllers\Controller;
use App\Http\Requests\SignUpRequest;
use App\Services\AccountService;
use App\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\RegistersUsers;
use Throwable;

/**
 * Class RegisterController
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
     * Handle a registration request for the application.
     *
     * @param SignUpRequest $request
     * @return User
     * @throws Throwable
     */
    public function register(SignUpRequest $request)
    {
        event(new Registered($user = $this->accountService->createByUsernameAndEmail(
            $request->input('username'),
            $request->input('email'),
            $request->input('password')
        )));

        /*
         * https://github.com/garethredfern/sanctum-api/blob/master/app/Http/Controllers/API/Auth/LoginController.php
         */
        $this->guard()->login($user);

        return $this->registered($request, $user);
    }

    /**
     * The user has been registered.
     *
     * @param SignUpRequest $request
     * @param User $user
     * @return User
     */
    protected function registered(SignUpRequest $request, User $user)
    {
        //
        return $user;
    }
}
