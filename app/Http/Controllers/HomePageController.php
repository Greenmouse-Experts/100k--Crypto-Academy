<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Djunehor\Sms\BetaSms;

class HomePageController extends Controller
{
    //
    public function index()
    {
        return view('frontend.index');
    }
    public function about()
    {
        return view('frontend.about');
    }
    public function courses()
    {
        return view('frontend.courses');
    }
    public function faq()
    {
        return view('frontend.faq');
    }
    public function contact()
    {
        return view('frontend.contact');
    }

    public function blog()
    {
        return view('frontend.blog');
    }

    public function terms()
    {
        return view('frontend.terms');
    }
    public function policy()
    {
        return view('frontend.policy');
    }
    //
    public function sign()
    {
        return view('auth.sign');
    }
    public function signUp()
    {
        return view('auth.signUp');
    }
    public function forgot()
    {
        return view('auth.forgot');
    }

    
}