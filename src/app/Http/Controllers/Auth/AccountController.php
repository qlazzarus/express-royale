<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    /**
     * @return array
     */
    public function me(Request $request)
    {
        return $request->user()->load('channels');
    }
}
