<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function welcome()
    {
        return view('admin.welcome');
    }

    public function members()
    {
        return view('admin.members');
    }
    
    public function trainings()
    {
        return view('admin.trainings');
    }

    public function subscribers()
    {
        return view('admin.subscribers');
    }
    
}