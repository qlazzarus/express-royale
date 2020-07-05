<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\SignInRequest;
use App\Providers\RouteServiceProvider;
use App\Services\AccountService;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    protected AccountService $accountService;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected string $redirectTo = RouteServiceProvider::HOME;

    /**
     * LoginController constructor.
     * @param AccountService $accountService
     */
    public function __construct(AccountService $accountService)
    {
        $this->middleware('guest')->except('logout');
        $this->accountService = $accountService;
    }

    /**
     * @param SignInRequest $request
     */
    protected function validateLogin(SignInRequest $request)
    {
        // do nothing
    }

    protected function attemptLogin(SignInRequest $request)
    {
        $user = $this->accountService->loginByUsername(
            $request->input('username'),
            $request->input('password')
        );

        return true;
    }
}
