<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('dashboard.dashboard');
    }
    public function training()
    {
        return view('dashboard.training');
    }
    public function wallet()
    {
        return view('dashboard.wallet');
    }
    public function deposit()
    {
        return view('dashboard.deposit');
    }
    
    public function withdraw()
    {
        return view('dashboard.withdraw');
    }

    public function subscribe()
    {
        return view('dashboard.subscribe');
    }

    public function profile()
    {
        return view('dashboard.profile');
    }
}