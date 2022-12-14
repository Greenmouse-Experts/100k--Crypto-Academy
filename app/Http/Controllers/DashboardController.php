<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Transaction;
use App\Models\UserWallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

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
        $users = User::all();
        $trans = Transaction::where('user_id', Auth::user()->id)->orderBy('id', 'Desc')->paginate(7);
        $subscribe = User::where('subscribe', '1')->get();
        return view('dashboard.dashboard', compact('users', 'trans', 'subscribe'));
    }

    public function subscribe_now(Request $request)
    {
        $userwallet = UserWallet::where('user_id', Auth::user()->id)->first();
        if ($request->wallet_type == "main_wallet" and $request->amount > $userwallet->bal) {
            Alert::error('Error', 'You don\'t have sufficient Balance to subscribe. Please choose another wallet type or you deposit to yor wallet too subscribe');
            return back();
        } else {
            $oldbal = $userwallet->bal;
            $userwallet->bal = $oldbal - $request->amount;
            $userwallet->update();
            $user = User::findOrFail(Auth::user()->id);
            $user->subscribe = '1';
            $user->update();
            $trans = new Transaction();
            $trans->type = 'Subscription';
            $trans->user_id = Auth::user()->id;
            $trans->amount = $request->amount;
            $trans->status = 1;
            $trans->save();
            Alert::success('Success', "You have successfully subscribe to our platform");
            return back();
        }
        if ($request->wallet_type == "ref_bonus" and $request->amount > $userwallet->ref_bonus) {
            Alert::error('Error', 'You don\'t have sufficient Bonus Balance to subscribe. Please choose another wallet type or you deposit to yor wallet too subscribe');
            return back();
        } else {
            $oldbal = $userwallet->ref_bonus;
            $userwallet->ref_bonus = $oldbal - $request->amount;
            $userwallet->update();
            $user = User::findOrFail(Auth::user()->id);
            $user->subscribe = '1';
            $user->update();
            $trans = new Transaction();
            $trans->type = 'Subscription';
            $trans->user_id = Auth::user()->id;
            $trans->amount = $request->amount;
            $trans->status = 1;
            $trans->save();
            Alert::success('Success', "You have successfully subscribe to our platform");
            return back();
        }
    }
    public function guide()
    {
        return view('dashboard.guide');
    }
    public function signal()
    {
        return view('dashboard.signal');
    }
    public function wallet()
    {
        return view('dashboard.wallet');
    }
    public function deposit()
    {
        $deposit = Transaction::where('user_id', Auth::user()->id)->where('type', "Deposit")->paginate(5);
        return view('dashboard.deposit', compact('deposit'));
    }

    public function withdraw()
    {
        $with = Transaction::where('user_id', Auth::user()->id)->where('type', "Withdraw")->paginate(5);
        return view('dashboard.withdraw', compact('with'));
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
