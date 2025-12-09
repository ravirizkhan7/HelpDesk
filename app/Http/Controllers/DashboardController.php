<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return match($user->level->name ?? null) {
            'admin' => view('admin.app'),
            'user'  => view('user.app'),
            default => abort(403),
        };
    }


}
