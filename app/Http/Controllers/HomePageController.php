<?php

namespace App\Http\Controllers;

use App\Mail\SendCodeResetPassword;
use App\Models\ResetCodePassword;
use App\Models\User;
use App\Models\UserWallet;
use App\Notifications\SendVerificationCode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Djunehor\Sms\BetaSms;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

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

    public function affiliate()
    {
        return view('frontend.affiliate');
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

    public function register(Request $request)
    {
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:100', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        if (session('ref_by')) {
            $ref_by = session('ref_by');
            $user = User::where('affiliate_id', $ref_by)->first();
            $ref_by_id = $user->id;
        } else {
            if (!empty($input['ref_by'])) {
                $sponsor = User::where('affiliate_id', $request->ref_by)->first();
                $ref_by_id = $sponsor->id;
            } else {
                $ref_by_id = NULL;
            }
        }

        $user = User::create([
            'name' => ucfirst($request->name),
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'reffered_by' => $ref_by_id
        ]);

        $wal = new UserWallet();
        $wal->user_id = $user->id;
        $wal->save();


        $code = mt_rand(100000, 999999);

        $user->update([
            'code' => $code
        ]);

        // Send email to user
        $user->notify(new SendVerificationCode($user));

        return redirect()->route('verify.account', Crypt::encrypt($user->email))->with([
            'type' => 'success',
            'message' => 'Registration Successful, Please verify your account!'
        ]);
    }

    public function verify_account($email)
    {
        $userFinder = Crypt::decrypt($email);

        $user = User::where('email', $userFinder)->first();

        return view('auth.verify_account', [
            'user' => $user
        ]);
    }

    public function email_verify_resend($email)
    {
        $email = Crypt::decrypt($email);

        $user = User::where('email', $email)->first();

        $code = mt_rand(100000, 999999);

        $user->update([
            'code' => $code
        ]);

        // Send email to user
        $user->notify(new SendVerificationCode($user));

        return back()->with([
            'type' => 'success',
            'message' => 'A fresh verification code has been sent to your email address.'
        ]);
    }

    public function registerConfirm($token, Request $request)
    {
        $userfinder = Crypt::decrypt($token);

        $user = User::find($userfinder);

        $this->validate($request, [
            'code' => ['required', 'numeric']
        ]);

        if ($user->code == $request->code) {
            $user->email_verified_at = now();
            $user->code = null;
            $user->save();

            return redirect()->route('signIn')->with([
                'type' => 'success',
                'message' => 'Account Verified, proceed to login!'
            ]);
        }

        return back()->with([
            'type' => 'danger',
            'message' => 'Incorrect Code'
        ]);
    }

    public function user_login(Request $request)
    {
        $this->validate($request, [
            'email' => ['required', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8'],
            // 'g-recaptcha-response' => 'required|captcha',

        ]);

        $input = $request->only(['email', 'password']);

        $user = User::query()->where('email', $request->email)->first();

        if ($user && !Hash::check($request->password, $user->password)) {
            return back()->with([
                'type' => 'danger',
                'message' => 'Incorrect Password!'
            ]);
        }

        if (!$user || !Hash::check($request->password, $user->password)) {
            return back()->with([
                'type' => 'danger',
                'message' => "Email doesn't exist"
            ]);
        }

        // authentication attempt
        if (auth()->attempt($input)) {

            if (!$user->email_verified_at) {
                // Send email to user
                $user->notify(new SendVerificationCode($user));

                return redirect()->route('verify.account', Crypt::encrypt($user->email))->with([
                    'type' => 'success',
                    'message' => 'Registration Successful, Please verify your account!'
                ]);
            }



            if ($user->status == 'inactive') {

                Auth::logout();

                return back()->with([
                    'type' => 'danger',
                    'message' => 'You account has been blocked.'
                ]);
            }

            return redirect()->route('user.dashboard');


        } else {
            return back()->with([
                'type' => 'danger',
                'message' => 'User authentication failed.'
            ]);
        }
    }

    public function forget()
    {
        return view('auth.forget');
    }

    public function forget_password(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|exists:users',
        ]);

        $user = User::where('email', $request->email)->first();

        // Delete all old code that user send before.
        ResetCodePassword::where('email', $request->email)->delete();

        // Generate random code
        $code = mt_rand(100000, 999999);

        // Create a new code
        $codeData = ResetCodePassword::create([
            'email' => $request->email,
            'code' => $code
        ]);

        // Send email to user
        Mail::to($request->email)->send(new SendCodeResetPassword($codeData->code));

        return redirect()->route('user.reset.password', Crypt::encrypt($user->email))->with([
            'type' => 'success',
            'message' => 'We have emailed your password reset code!'
        ]);
    }

    public function password_reset_email($email)
    {
        $email = Crypt::decrypt($email);

        return view('auth.reset_password', [
            'email' => $email
        ]);
    }

    public function reset_password(Request $request)
    {
        $request->validate([
            'code' => 'required|string|exists:reset_code_passwords',
            'password' => 'required|string|min:6|confirmed',
        ]);

        if (ResetCodePassword::where('code', '=', $request->code)->exists()) {
            // find the code
            $passwordReset = ResetCodePassword::firstWhere('code', $request->code);

            // check if it does not expired: the time is one hour
            if ($passwordReset->created_at > now()->addHour()) {
                $passwordReset->delete();

                return back()->with([
                    'type' => 'danger',
                    'message' => 'Password reset code expired'
                ]);
            }

            // find user's email
            $user = User::firstWhere('email', $passwordReset->email);

            // update user password
            $user->update([
                'password' => Hash::make($request->password)
            ]);

            // delete current code
            $passwordReset->delete();

            return redirect()->route('signIn')->with([
                'type' => 'success',
                'message' => 'Password has been successfully reset, Please login'
            ]);
        } else {
            return back()->with([
                'type' => 'danger',
                'message' => "Code doesn't exist in our database"
            ]);
        }
    }

    public function admin_login()
    {
        return view('auth.admin_login', ['url' => route('admin.login-view'), 'title' => 'Admin']);
    }

    public function post_admin_login(Request $request)
    {
        $this->validate($request, [
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8'],
        ]);

        $input = $request->only(['email', 'password']);

        $user = User::query()->where('email', $request->email)->first();

        if ($user && !Hash::check($request->password, $user->password)) {
            return back()->with('failure_report', 'Incorrect Password!');
        }

        if (!$user || !Hash::check($request->password, $user->password)) {
            return back()->with('failure_report', 'Email does\'nt exist');
        }

        // authentication attempt
        if (\Auth::guard('admin')->attempt($input, $request->get('remember'))) {
            if ($user->user_type == 'Administrator') {
                return redirect()->route('admin.welcome');
            }

            return back()->with('failure_report', 'You are not an Administrator');

        } else {
            return back()->with('failure_report', 'User authentication failed.');
        }
    }

    public function logout()
    {
        Session::flush();

        Auth::logout();

        return redirect('/');
    }

}
