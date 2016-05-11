<?php

namespace App\Http\Controllers;

use Auth;

class CurrentUserController extends Controller
{
    public function getCurrentUser()
    {
        return Auth::user();
    }
}
