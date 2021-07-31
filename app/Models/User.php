<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use HasFactory, 
        Notifiable,
        SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'provider_name',
        'provider_id',
        'photo_profile'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'provider_id'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];



    /**
     * The id of admin role
     * 
     * @var integer
     */
    public const ADMIN = 1 ;


    public const STATUS = [
        'active' => 'allow',
        'deactive' => 'abort',
        'blocked' => 'abort'
    ];

    public function getLoginMessageAttribute(){

        $message = "Selamat datang {$this->name}";

        if($this->role == self::ADMIN){
            $message .= ", Anda login sebagai admin";
        }

        return $message;
    }


    public function getIsAdminAttribute(){
        return in_array(self::ADMIN, $this->roles()->get()->pluck('id')->toArray());
    }

    public function roles(){
        return $this->belongsToMany(Role::class);
    }

    public function setPasswordAttribute($password){
        return $this->attributes['password'] = bcrypt($password);
    }


}

