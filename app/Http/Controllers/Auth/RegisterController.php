<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use App\Models\Pais;
use App\Models\Monedero;

use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Cookie;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showRegistrationForm()
    {   $paices = Pais::all();
        return view("auth.register", compact("paices"));
    }


    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'username' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'pais' => ['required', 'numeric', 'exists:pais,id'],
            'politicas' => ['accepted'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */

    public function getReferredBy()
    {
        $referralCode = Cookie::get('referral');

        if ($referralCode)
            return User::where('referral_code', $referralCode)->value('id');

        return null;
    }

    protected function create(array $data)
    {        
            $user =  User::create([
                // 'name' => $data['username'],
                'username' => $data['username'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'pais_id' => $data['pais'],
                'referral_code' => User::getUniqueReferralCode(),
                'referred_by' => $this->getReferredBy(),
                
            ]);
    
            $monedero = New Monedero;
            $monedero->saldo = 0;
            $monedero->usuario_id = $user->id;
    
            $monedero->save();
    
            return $user;
    
    }
}
