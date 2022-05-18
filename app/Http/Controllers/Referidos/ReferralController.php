<?php

namespace App\Http\Controllers\Referidos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\User;
use Illuminate\Support\Facades\Auth;
class ReferralController extends Controller
{
    //
    public function index(Request $request, $referralCode){
        
        $referralLink = $request->root().'/r/'.$referralCode;
        $referidos = User::where("referred_by", "=", auth()->user()->id)->get();
        // return $referidos;
        return view('modulos/user/referidos/index')->with([
            'referralLink' => $request->root().'/r/'.$referralCode,
            'referidos'=> $referidos
        ]);
    }


    public function link(Request $request, $referralCode)
    {   
        if (!$request->hasCookie('referral')) {
            $cookie = cookie('referral', $referralCode, 60 * 24 * 7);

            return redirect('/')->withCookie($cookie);
        }

        return redirect('/');
    }

}
