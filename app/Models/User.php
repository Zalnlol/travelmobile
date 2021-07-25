<?php

namespace App\Models;

use App\Mail\NewUserWelcomeMail;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $table = 'tb_user';
    public $primaryKey = 'user_id';

    protected $fillable = [
        'user_id',
        'name',
        'email',
        'password',
        'facebook_id',
        'google_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // protected $appends = [
    //     'avatar_image',
    // ];

    public function profile(){
        return $this->hasOne(Profile::class);
    }

    public function getId()
    {
        if (Auth::check()) {
            // The user is logged in...
        }
        $id = Auth::id();
        return $this->id;
    }

    




    //Function gửi mail trap, lỗi nên tạm tắt
    // protected static function boot(){
    //     parent::boot();

    //     static::create(function($user){
    //         $user->profile()->create(['name'=> $user->name, 'email'=> $user->email]);
    //         Mail::to($user->email)->send(new NewUserWelcomeMail());
    //     });
    // }
}
