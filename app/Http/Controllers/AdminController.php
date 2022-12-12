<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{

    public function welcome()
    {
        return view('admin.welcome');
    }

    public function members()
    {
        $users = User::orderBy('id', 'Desc')->paginate(10);
        return view('admin.members', compact('users'));
    }

    public function trainings()
    {
        return view('admin.trainings');
    }

    public function subscribers()
    {
        return view('admin.subscribers');
    }

    public function profile()
    {
        return view('admin.profile');
    }

    public function affiliate()
    {
        return view('admin.affiliate');
    }

    public function transaction()
    {
        return view('admin.transaction');
    }

    public function viewmembers($id)
    {
        $user = User::findOrFail($id);
        return view('admin.viewmembers', compact('user'));
    }

    public function change_type(Request $request, $id)
    {
        $user = User::where('id', $id)->first();
        $user->status = $request->status;
        $user->update();
        Alert::success('Success', 'User Status Changed Successfully');
        return back();
    }

    public function admin_login()
    {
        return view('auth.admin_login', ['url' => route('admin.login-view'), 'title' => 'Admin']);
    }
    public function adminLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended('/admin');
        }
        return back()->withInput($request->only('email', 'remember'));
    }

    public function post_admin_login(Request $request)
    {
        $this->validate($request, [
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8'],
        ]);

        $input = $request->only(['email', 'password']);

        $user = Admin::query()->where('email', $request->email)->first();
        // dd($user);
        // if ($user && !Hash::check($request->password, $user->password)) {
        //     return back()->with('failure_report', 'Incorrect Password!');
        // }

        // if (!$user || !Hash::check($request->email, $user->email)) {
        //     return back()->with('failure_report', 'Email does\'nt exist');
        // }

        // authentication attempt
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
            if ($user->is_admin == 1) {
                return redirect()->route('admin.welcome');
            }

            return back()->with('failure_report', 'You are not an Administrator');

        } else {
            return back()->with('failure_report', 'User authentication failed.');
        }
    }

}