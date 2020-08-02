<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    /**
     * @param Request $request
     * @return mixed
     */
    public function me(Request $request)
    {
        return $request->user()->load('channels');
    }
}
