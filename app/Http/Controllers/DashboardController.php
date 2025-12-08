<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function duser()
    {
        if(!Auth::user()){
            return redirect('login');
        }
        return view('user.app');
    }
}
