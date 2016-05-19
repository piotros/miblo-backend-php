<?php

namespace App\Http\Controllers;

use Auth;

class CurrentUserController extends Controller
{
    public function getCurrentUser()
    {
        if (Auth::check()) {
            return Auth::user();
        } else {
            abort(401);
        }
    }
}
