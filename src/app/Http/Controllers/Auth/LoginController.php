<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\SignInRequest;
use App\Providers\RouteServiceProvider;
use App\Services\AccountService;
use App\User;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\StatefulGuard;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use JetBrains\PhpStorm\ArrayShape;

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

    use AuthenticatesUsers {
        login as protected abstractLogin;
    }

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
     * @return JsonResponse|RedirectResponse|Response
     * @throws ValidationException
     */
    public function login(SignInRequest $request): Response|JsonResponse|RedirectResponse
    {
        return $this->abstractLogin($request);
    }

    /**
     * @param SignInRequest $request
     */
    protected function validateLogin(SignInRequest $request)
    {
        // do nothing
    }

    /**
     * @param SignInRequest $request
     * @return bool
     */
    protected function attemptLogin(SignInRequest $request): bool
    {
        $user = $this->accountService->loginByUsername(
            $request->input('username'),
            $request->input('password')
        );

        if (!$user) {
            return false;
        }

        $this->guard()->login($user);

        return true;
    }

    /**
     * @return Guard|StatefulGuard
     */
    protected function guard(): Guard|StatefulGuard
    {
        return Auth::guard();
    }

    /**
     * @return string
     */
    public function username(): string
    {
        return 'username';
    }

    /**
     * Send the response after the user was authenticated.
     *
     * @param  SignInRequest $request
     * @return Response|array
     */
    protected function sendLoginResponse(SignInRequest $request): Response|array
    {
        $this->clearLoginAttempts($request);

        if ($response = $this->authenticated($request, $this->guard()->user())) {
            return $response;
        }

        return new Response('', 204);
    }

    /**
     * @param SignInRequest $request
     * @param Authenticatable|User $user
     * @return array
     */
    #[ArrayShape(['token' => "string"])] protected function authenticated(SignInRequest $request, Authenticatable|User $user): array
    {
        return [
            'token' => $this->accountService->publishToken($user, $request->header('Request-Id'))
        ];
    }
}
