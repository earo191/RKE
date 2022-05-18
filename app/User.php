<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'apellido', 'username', 'cedula', 'pais_id', 'referred_by' ,'referral_code'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    /* RELACIONES */
		// Relación pagomovil (1:n)
			public function rePagomovil(){
				return $this->hasMany('App\Models\PagoMovil','pagomovil_id');
			}
		// /Relación pagomovil (1:n)

        public function referredBy()
        {
            return $this->belongsTo(User::class, 'referred_by');
        }

        public function referrals()
        {
            return $this->hasMany(User::class, 'referred_by');
        }
	/* /RELACIONES */
        
    public static function getUniqueReferralCode()
    {
        do {
            $code = Str::random(7);    
        } while (User::where('referral_code', $code)->exists());

        return $code;
    }
    
    


}
