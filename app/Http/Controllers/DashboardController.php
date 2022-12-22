<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Transaction;
use App\Models\UserWallet;
use Illuminate\Http\Request;
use App\Models\Notification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Tp_Transactioon;
use App\Notifications\SendVerificationCode;
use App\Notifications\DepositNotification;
use App\Notifications\WithdrawalNotification;
use App\Notifications\WitdrawalNotificationOTP;
use Illuminate\Support\Facades\Crypt;

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
        $trans = Transaction::where('user_id', Auth::user()->id)->orderBy('id', 'Desc')->paginate(10);
        $subscribe = User::where('subscribe', '1')->get();
        return view('dashboard.dashboard', compact('users', 'trans', 'subscribe'));
    }

    public function subscribe_now(Request $request)
    {
        $userwallet = UserWallet::where('user_id', Auth::user()->id)->first();


        if ($request->wallet_type == "main_wallet" and $request->amount > $userwallet->bal) {
            Alert::error('Error', 'You don\'t have sufficient Balance to subscribe. Please choose another wallet type or deposit to your wallet to subscribe');
            return back();
        }
        if ($request->wallet_type == "main_wallet" and $request->amount < $userwallet->bal) {
            $oldbal = $userwallet->bal;
            $userwallet->bal = $oldbal - $request->amount;
            $userwallet->update();
            $user = User::findOrFail(Auth::user()->id);
            $user->subscribe = '1';
            $user->affiliate_id = Str::random(4);
            $user->update();
            //$user = User::findOrFail(Auth::user()->id);
            $subscribe_amount = $request->amount;
            $array = User::all();
            $parent = $user->id;
            $this->getAncestors($array, $subscribe_amount, $parent);
            $trans = new Transaction();
            $trans->type = 'Subscription';
            $trans->user_id = Auth::user()->id;
            $trans->amount = $request->amount;
            $trans->method = 'Main Wallet';
            $trans->status = 1;
            $trans->save();
            $notice = new Notification();
            $notice->user_id = Auth::user()->id;
            $notice->title = 'You just subscribe';
            $notice->admin_title = 'Someone just subscribed';
            $notice->description = 'You have successfully subscribe to our 100k Crypo Investing';
            $notice->save();
            Alert::success('Success', "You have successfully subscribe to our platform");
            return back();
        }
        //dd($request->wallet_type, $request->amount, $userwallet->ref_bonus);
        // if ($request->wallet_type == "ref_bonus" and $request->amount > $userwallet->ref_bonus) {
        //     Alert::error('Error', 'You don\'t have sufficient Bonus Balance to subscribe. Please choose main wallet type to subscribe');
        //     return back();
        // }
        // if ($request->wallet_type == "ref_bonus" and $request->amount < $userwallet->ref_bonus) {
        //     $oldbal = $userwallet->ref_bonus;
        //     $userwallet->ref_bonus = $oldbal - $request->amount;
        //     $userwallet->update();
        //     $user = User::findOrFail(Auth::user()->id);
        //     $user->subscribe = '1';
        //     $user->update();
        //     $trans = new Transaction();
        //     $trans->type = 'Subscription';
        //     $trans->user_id = Auth::user()->id;
        //     $trans->method = 'Bonus Balance';
        //     $trans->amount = $request->amount;
        //     $trans->status = 1;
        //     $trans->save();
        //     $notice = new Notification();
        //     $notice->user_id = Auth::user()->id;
        //     $notice->title = 'You just subscribe';
        //     $notice->admin_title = 'Someone just subscribed';
        //     $notice->description = 'You have successfully subscribe to our 100k Crypo Investing';
        //     $notice->save();
        //     Alert::success('Success', "You have successfully subscribe to our platform");
        //     return back();
        // }
    }

    function getAncestors($array, $deposit_amount, $parent = 0, $level = 1)
    {

        $referedMembers = '';
        $parent = User::where('id', $parent)->first();
        foreach ($array as $entry) {
            //dd($entry->id);
            if ($entry->id == $parent->reffered_by) {

                //get settings
                //$settings = Settings::where('id', '=', '1')->first();
                //dd($entry);
                if ($level == 1) {
                    $earnings = 30 * $deposit_amount / 100;
                    //add earnings to ancestor balance
                    $user_wallet = UserWallet::where('user_id', $entry->id)->first();
                    UserWallet::where('user_id', $entry->id)
                        ->update([
                            'bal' => $user_wallet->bal + $earnings,
                            'ref_bonus' => $user_wallet->ref_bonus + $earnings,
                        ]);

                    //create history
                    Tp_Transactioon::create([
                        'user_id' => $entry->id,
                        'plan' => "Credit",
                        'amount' => $earnings,
                        'type' => "Ref_bonus",
                    ]);

                } elseif ($level == 2) {
                    $earnings = 10 * $deposit_amount / 100;
                    //add earnings to ancestor balance
                    $user_wallet = UserWallet::where('user_id', $entry->id)->first();
                    UserWallet::where('user_id', $entry->id)
                        ->update([
                            'bal' => $user_wallet->bal + $earnings,
                            'ref_bonus' => $user_wallet->ref_bonus + $earnings,
                        ]);

                    //create history
                    Tp_Transactioon::create([
                        'user_id' => $entry->id,
                        'plan' => "Credit",
                        'amount' => $earnings,
                        'type' => "Ref_bonus",
                    ]);

                } elseif ($level == 3) {
                    $earnings = 5 * $deposit_amount / 100;
                    //add earnings to ancestor balance
                    $user_wallet = UserWallet::where('user_id', $entry->id)->first();
                    UserWallet::where('user_id', $entry->id)
                        ->update([
                            'bal' => $user_wallet->bal + $earnings,
                            'ref_bonus' => $user_wallet->ref_bonus + $earnings,
                        ]);

                    //create history
                    Tp_Transactioon::create([
                        'user_id' => $entry->id,
                        'plan' => "Credit",
                        'amount' => $earnings,
                        'type' => "Ref_bonus",
                    ]);

                } elseif ($level == 4) {
                    //dd('here4');
                    $earnings = 5 * $deposit_amount / 100;
                    //add earnings to ancestor balance
                    $user_wallet = UserWallet::where('user_id', $entry->id)->first();
                    UserWallet::where('user_id', $entry->id)
                        ->update([
                            'bal' => $user_wallet->bal + $earnings,
                            'ref_bonus' => $user_wallet->ref_bonus + $earnings,
                        ]);

                    //create history
                    Tp_Transactioon::create([
                        'user_id' => $entry->id,
                        'plan' => "Credit",
                        'amount' => $earnings,
                        'type' => "Ref_bonus",
                    ]);

                }

                if ($level == 5) {
                    break;
                }

                //$referedMembers .= '- ' . $entry->name . '- Level: '. $level. '- Commission: '.$earnings.'<br/>';
                $referedMembers .= $this->getAncestors($array, $deposit_amount, $entry->id, $level + 1);

            }
        }
        return $referedMembers;
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
        $trans = Transaction::where('user_id', Auth::user()->id)->orderBy('id', 'Desc')->orderBy('id', 'Desc')->paginate(7);
        return view('dashboard.wallet', compact('trans'));
    }
    public function deposit()
    {
        $ticker = "trc20/usdt";
        $query = array(
            "apikey" => "rOWmQBizA3GZGD3djgVLHwX6aUfPsawroA9JhSCUWb4asbD3DkfcLn0TOIz5eWoC",
            "callback" => "http://localhost:8002/dashboard/deposit",
            "address" => "TDkhX7qGoGvz7VQ2wgYrG6qmKgciYBzEEQ",
            "pending" => "1",
            "confirmations" => "2",
            "email" => "morshudlhgmo@gmail.com",
            "post" => "0",
            "multi_token" => "0",
            "multi_chain" => "0",
            "convert" => "1"
        );

        $curl = curl_init();

        curl_setopt_array($curl, [
        CURLOPT_URL => "https://api.blockbee.io/" . $ticker . "/create/?" . http_build_query($query),
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_CUSTOMREQUEST => "GET",
        ]);

        $response = curl_exec($curl);
        $error = curl_error($curl);

        curl_close($curl);

        if ($error) {
            dd("cURL Error #:" . $error);
        } else {
            $response;
        }
        // $ticker = "trc20/usdt";
        // $query = array(
        //     "apikey" => "rOWmQBizA3GZGD3djgVLHwX6aUfPsawroA9JhSCUWb4asbD3DkfcLn0TOIz5eWoC",
        //     "address" => "TDkhX7qGoGvz7VQ2wgYrG6qmKgciYBzEEQ",
        //     "value" => "100",
        //     "size" => "200"
        // );

        // $curl = curl_init();

        // curl_setopt_array($curl, [
        // CURLOPT_URL => "https://api.blockbee.io/" . $ticker . "/qrcode/?" . http_build_query($query),
        // CURLOPT_RETURNTRANSFER => true,
        // CURLOPT_CUSTOMREQUEST => "GET",
        // ]);

        // $response = curl_exec($curl);
        // $error = curl_error($curl);

        // curl_close($curl);

        // if ($error) {
        //     dd("cURL Error #:" . $error);
        // } else {
        //     $response;
        // }
        $deposit = Transaction::where('user_id', Auth::user()->id)->where('type', "Deposit")->orderBy('id', "Desc")->paginate(5);
        return view('dashboard.deposit', compact('deposit', 'response'));
    }

    public function deposit_post(Request $request)
    {

        $user = User::findOrFail(Auth::user()->id);
        //$wall = UserWallet::where('user_id', $user->id)->first();
        //$oldbal = $wall->bal;
        //$wall->bal = $oldbal + $request->amount;
        $dep = new Transaction();
        $dep->user_id = $user->id;
        $dep->type = "Deposit";
        $dep->amount = $request->amount;
        $dep->address = $request->address;
        $dep->trans_hash = $request->trans_hash;
        $dep->status = 2;
        //$wall->update();
        $dep->save();
        $notice = new Notification();
        $notice->user_id = Auth::user()->id;
        $notice->title = 'You deposited';
        $notice->admin_title = 'Someone just deposited';
        $notice->description = 'You have successfully make a deposit to your wallet';
        $notice->save();
        $user->notify(new DepositNotification($dep, $user));
        Alert::success('Success', "You have successfully deposit to your wallet, please wait for admin to verify");
        return back();
    }

    public function withdraw()
    {
        $with = Transaction::where('user_id', Auth::user()->id)->where('type', "Withdraw")->orderBy('id', 'Desc')->paginate(5);
        return view('dashboard.withdraw', compact('with'));
    }

    public function withdraw_post(Request $request)
    {
        $user = User::where('id', Auth::user()->id)->first();
        if (!Hash::check($request->password, $user->password)) {
            Alert::error('Error', 'Your password is incorrect');
            return back();
        }
        $userwallet = UserWallet::where('user_id', Auth::user()->id)->first();
        if ($request->wallet_type == "main_wallet" and $request->amount > $userwallet->bal) {
            Alert::error('Error', 'You don\'t have sufficient Balance in your wallet to withdraw!');
            return back();
        }
        if (is_null($request->code) and $request->wallet_type == "main_wallet" and $request->amount < $userwallet->bal) {
            $code = mt_rand(100000, 999999);
            $user->update([
                'code' => $code
            ]);
            $user->notify(new WitdrawalNotificationOTP($user));
            //Alert::success('Success', 'We have sent a otp to your email, please check!');
            return redirect()->route('user.withdraw')->with([
                'type' => 'success',
                'token' => Crypt::encrypt($user->email),
                'message' => 'Withdraw is pending, We have sent a otp to your email, please check to verify you withdrawal!',
                'amount' => $request->amount,
                'address' => $request->address,
                'password' => $request->password,
            ]);
        }
        if ($user->code == $request->code and $request->wallet_type == "main_wallet" and $request->amount < $userwallet->bal) {

            $userfinder = Crypt::decrypt($request->token);
            //dd($userfinder);
            $user = User::where('email', $userfinder)->first();

            $this->validate($request, [
                'code' => ['required', 'numeric']
            ]);
            $user->code = null;
            $user->update();

            $oldbal = $userwallet->bal;
            $userwallet->bal = $oldbal - $request->amount;
            $userwallet->update();
            $trans = new Transaction();
            $trans->type = 'Withdraw';
            $trans->user_id = Auth::user()->id;
            $trans->amount = $request->amount;
            $trans->address = $request->address;
            $trans->method = 'Main Wallet';
            $trans->status = 2;
            $trans->save();
            $notice = new Notification();
            $notice->user_id = Auth::user()->id;
            $notice->title = 'You just withdraw';
            $notice->admin_title = 'Someone just withdraw';
            $notice->description = 'You have successfully withdraw to your address!';
            $notice->save();
            $user->notify(new WithdrawalNotification($trans, $user));
            Alert::success('Success', "You have successfully withdraw, please wait for admin approval!");
            return back();
        }
        // if ($request->wallet_type == "ref_bonus" and $request->amount > $userwallet->ref_bonus) {
        //     Alert::error('Error', 'You don\'t have sufficient Bonus Balance to withdraw. Please choose main wallet type!');
        //     return back();
        // }
        // if ($request->wallet_type == "ref_bonus" and $request->amount < $userwallet->ref_bonus) {
        //     $oldbal = $userwallet->ref_bonus;
        //     $userwallet->ref_bonus = $oldbal - $request->amount;
        //     $userwallet->update();
        //     $trans = new Transaction();
        //     $trans->type = 'Subscription';
        //     $trans->user_id = Auth::user()->id;
        //     $trans->method = 'Bonus Balance';
        //     $trans->address = $request->address;
        //     $trans->amount = $request->amount;
        //     $trans->status = 1;
        //     $trans->save();
        //     $notice = new Notification();
        //     $notice->user_id = Auth::user()->id;
        //     $notice->title = 'You just withdraw';
        //     $notice->admin_title = 'Someone just withdraw';
        //     $notice->description = 'You have successfully withdraw to your address';
        //     $notice->save();
        //     Alert::success('Success', "You have successfully withdraw");
        //     return back();
        // }
    }

    public function subscribe()
    {
        $subscribe = User::findOrFail(Auth::user()->id);
        $sub = Transaction::where('user_id', Auth::user()->id)->where('type', "Subscription")->paginate(5);
        if ($subscribe->subscribe == '1') {
            Alert::success('Success', "You are already a 100k Crypto Investing Subscriber");
            return view('dashboard.subscribe', compact('sub'));
        } else {
            return view('dashboard.subscribe', compact('sub'));
        }
    }

    public function profile()
    {
        return view('dashboard.profile');
    }

    public function affiliate()
    {
        return view('dashboard.affiliate');
    }

    public function read_notice($id)
    {
        $notice = Notification::findOrFail($id);
        $notice->status = 'read';
        $notice->update();
        return back();
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
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed',
        ]);


        #Match The Old Password
        if (!Hash::check($request->old_password, auth()->user()->password)) {
            return back()->with("error", "Old Password Doesn't match!");
        }


        #Update the new Password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        return back()->with("status", "Password changed successfully!");
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

    public function getdownlines($array, $parent = 0, $level = 1)
    {
        $referedMembers = '';
        foreach ($array as $entry) {
            if ($entry->reffered_by == $parent) {

                if ($level == 1) {
                    $levelQuote = "Direct Referral";
                } else {
                    $levelQuote = "Indirect Referral";
                }

                $referedMembers .= "
              <tr>
              <td> $entry->name </td>
              <td> $levelQuote </td>" .
                    '<td><a href="javascript: void(0);" class="badge badge-soft-primary font-size-11 m-1">' . "Level " . $level . "</a></td>" .
                    '<td>' . $this->getUserParent($entry->id) . '</td>' .
                    '<td>' . $this->getUserStatus($entry->id) . '</td>
              <td>' . $this->getUserRegDate($entry->id) . '</td>
              </tr>';

                $referedMembers .= $this->getdownlines($array, $entry->id, $level + 1);
            }

            if ($level == 5) {
                break;
            }
        }
        return $referedMembers;
    }

    public function getdownCount($array, $parent = 0, $level = 1)
    {
        //$referedMembers = $array->reffered_by == $parent;
        $referedMembers = User::where('reffered_by', $parent)->get();

        return $referedMembers->count();
    }

    //Get user Parent
    function getUserParent($id)
    {
        $user = User::where('id', $id)->first();
        $parent = User::where('id', $user->reffered_by)->first();
        if ($parent) {
            return "$parent->name $parent->l_name";
        } else {
            return "null";
        }
    }

    function getUserStatus($id)
    {
        $user = User::where('id', $id)->first();

        return $user->status;
    }

    function getUserRegDate($id)
    {
        $user = User::where('id', $id)->first();

        return $user->created_at;
    }
}
