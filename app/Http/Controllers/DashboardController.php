<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

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

    public function affiliate()
    {
        return view('dashboard.affiliate');
    }

    public function profile_update(Request $request)
    {
        //Validate Request
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
        ]);

        //Profile
        $profile = User::find(Auth::user()->id);

        if ($profile->email == $request->email) {
            $profile->update([
                'name' => $request->name,
            ]);

            return back()->with([
                'type' => 'success',
                'message' => 'Profile Updated Successfully!'
            ]);
        }

        $this->validate($request, [
            'email' => ['string', 'email', 'max:255', 'unique:users'],
        ]);

        $profile->update([
            'name' => $request->name,
            'email' => $request->email
        ]);

        return back()->with([
            'type' => 'success',
            'message' => 'Profile Updated Successfully!'
        ]);
    }

    public function password_update(Request $request)
    {
        $this->validate($request, [
            'new_password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $user = User::findorfail(Auth::user()->id);

        $user->password = Hash::make($request->new_password);
        $user->save();

        return back()->with([
            'type' => 'success',
            'message' => 'Password Updated Successfully!'
        ]);
    }

    public function profile_upload_picture(Request $request)
    {
        $this->validate($request, [
            'photo' => 'required|mimes:jpeg,png,jpg',
        ]);

        //Profile
        $profile = User::find(Auth::user()->id);

        $filename = request()->photo->getClientOriginalName();

        if ($profile->photo) {
            Storage::delete(str_replace("storage", "public", $profile->photo));
        }

        request()->photo->storeAs('users_photo', $filename, 'public');

        $profile->update([
            'photo' => '/storage/users_photo/' . $filename,
        ]);

        return back()->with([
            'type' => 'success',
            'message' => 'Profile Updated Successfully!'
        ]);
    }
}
