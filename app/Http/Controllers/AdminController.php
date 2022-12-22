<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Notification;
use App\Models\Transaction;
use App\Models\User;
use App\Models\UserWallet;
use App\Notifications\DeclineDepositNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Notifications\ApproveDepositNotification;
use App\Notifications\ApproveWithdrawalNotification;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{

    public function welcome()
    {
        $users = User::all();
        $subscriber = User::where('subscribe', '1')->get();
        $unSubscriber = User::where('subscribe', '0')->get();
        $trans = Transaction::orderBy('id', 'Desc')->paginate(10);
        return view('admin.welcome', compact('users', 'subscriber', 'trans', 'unSubscriber'));
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
        $users = User::orderBy('id', 'Desc')->where('subscribe', '1')->paginate(10);
        return view('admin.subscribers', compact('users'));
    }

    public function profile()
    {
        return view('admin.profile');
    }

    public function affiliate()
    {
        return view('admin.affiliate');
    }

    public function viewdetails()
    {
        return view('admin.view-details');
    }

    public function signal()
    {
        return view('admin.signal');
    }

    public function role()
    {
        $users = Admin::where('type', '!=', 'super admin')->paginate(10);
        return view('admin.role', compact('users'));
    }

    public function create_admin(Request $request)
    {
        $a = new Admin();
        $a->name = $request->name;
        $a->email = $request->email;
        $a->password = Hash::make('admin1234');
        $a->type = 'sub admin';
        $a->save();
        Alert::success('Success', 'Sub Admin created successfully with default password: admin1234');
        return back();
    }
    public function unsubscribers()
    {
        $users = User::orderBy('id', 'Desc')->where('subscribe', '0')->paginate(10);
        return view('admin.unsubscribers', compact('users'));
    }

    public function search_subscriber(Request $request)
    {
        $search = User::where('email', $request->email)->where('subscribe', '1')->first();
        if (is_null($search)) {
            $result = 'no';
        } else {
            $result = 'yes';
        }
        //dd($result);
        return redirect()->route('admin.welcome')->with([
            'search' => $result,
        ]);
    }

    public function approve_deposit($id)
    {
        $trans = Transaction::findOrFail($id);
        $trans->status = 1;
        $wall = UserWallet::where('user_id', $trans->user_id)->first();
        $oldbal = $wall->bal;
        $wall->bal = $oldbal + $trans->amount;
        $wall->update();
        $trans->update();
        $user = User::where('id', $trans->user_id)->first();
        $user->notify(new ApproveDepositNotification($trans, $user));
        Alert::success('Success', 'Deposit transaction approved successfully');
        return back();
    }

    public function decline_deposit($id)
    {
        $trans = Transaction::findOrFail($id);
        $trans->status = 3;
        $trans->update();
        $user = User::where('id', $trans->user_id)->first();
        $user->notify(new DeclineDepositNotification($trans, $user));
        Alert::success('Success', 'Deposit transaction Declined successfully');
        return back();
    }

    public function approve_withdraw(Request $request, $id)
    {
        $trans = Transaction::findOrFail($id);
        $trans->trans_hash = $request->trans_hash;
        $trans->status = 1;
        $trans->update();
        $user = User::where('id', $trans->user_id)->first();
        $user->notify(new ApproveWithdrawalNotification($trans, $user));
        Alert::success('Success', 'Withdrawal transaction approved successfully');
        return back();
    }

    public function decline_withdraw($id)
    {
        $trans = Transaction::findOrFail($id);
        $trans->status = 3;
        $wall = UserWallet::where('user_id', $trans->user_id)->first();
        $oldbal = $wall->bal;
        $wall->bal = $oldbal + $trans->amount;
        $wall->update();
        $trans->update();
        Alert::success('Success', 'Withdrawal transaction declined successfully');
        return back();
    }
    public function transaction()
    {
        $trans = Transaction::orderBy('id', 'Desc')->get();
        $tcredit = Transaction::where('type', 'Deposit')->sum('amount');
        $tdebit = Transaction::where('type', 'Withdraw')->sum('amount');
        return view('admin.transaction', compact('trans', 'tcredit', 'tdebit'));
    }

    public function transaction_details($id)
    {
        $trans = Transaction::findOrFail($id);
        return view('admin.transaction-details', compact('trans'));
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
        //dd($user);
        // if ($user && !Hash::check($request->password, $user->password)) {
        //     return back()->with('failure_report', 'Incorrect Password!');
        // }

        // if (!$user || !Hash::check($request->email, $user->email)) {
        //     return back()->with('failure_report', 'Email does\'nt exist');
        // }

        //authentication attempt
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
            if ($user->is_admin == 1) {
                return redirect()->route('admin.welcome');
            }

            return back()->with('failure_report', 'You are not an Administrator');

        } else {
            return back()->with('failure_report', 'User authentication failed.');
        }
    }

    public function profile_update(Request $request)
    {
        //Validate Request
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
        ]);

        //Profile
        $profile = Admin::find(Auth::guard('admin')->user()->id);

        $this->validate($request, [
            'email' => ['string', 'email', 'max:255', 'unique:users'],
        ]);

        $profile->update([
            'name' => $request->name,
            'email' => $request->email
        ]);

        Alert::success('Success', 'Profile Updated Successfully!');
        return back();
    }

    public function password_update(Request $request)
    {
        $this->validate($request, [
            'old_password' => 'required',
            'new_password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        #Match The Old Password
        if (!Hash::check($request->old_password, Auth::guard('admin')->user()->password)) {
            Alert::error('Error', 'Old Password Doesn\'t match!');
            return back();
        }

        #Update the new Password
        Admin::whereId(Auth::guard('admin')->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        Alert::success('Success', 'Password Updated Successfully!');
        return back();
    }

    public function read_notice($id)
    {
        $notice = Notification::findOrFail($id);
        $notice->admin_status = 'read';
        $notice->update();
        return back();
    }

    public function logout()
    {
        Session::flush();

        Auth::guard('admin')->logout();

        return redirect('/admin/login');
    }
}
