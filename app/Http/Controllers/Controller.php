<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function ref(Request $request, $id)
    {
        if (isset($id)) {
            $request->session()->flush();
            if (count(User::where('affiliate_id', $id)->get()) == 1) {
                $request->session()->put('ref_by', $id);
            }
            return redirect()->route('signUp');
        }
    }
}
