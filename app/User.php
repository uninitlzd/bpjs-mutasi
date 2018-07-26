<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'avatar', 'bio', 'role', 'nik'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /*
    |------------------------------------------------------------------------------------
    | Validations
    |------------------------------------------------------------------------------------
    */
    public static function rules($update = false, $id = null)
    {
        $commun = [
            'email'    => "required|email|unique:users,email,$id",
            'avatar' => 'image',
        ];

        if ($update) {
            return $commun;
        }

        return array_merge($commun, [
            'email'    => 'required|email|max:255|unique:users',
        ]);
    }

    /*
    |------------------------------------------------------------------------------------
    | Attributes
    |------------------------------------------------------------------------------------
    */
    public function setPasswordAttribute($value='')
    {
        $this->attributes['password'] = bcrypt($value);
    }

    public function getAvatarAttribute($value)
    {
        if (!$value) {
            $url = url('https://png.icons8.com/ultraviolet/40/000000/administrator-male.png');
            return $url;
        }

        return config('variables.avatar.public').$value;
    }

    public function setAvatarAttribute($photo)
    {
        $this->attributes['avatar'] = move_file($photo, 'avatar');
    }

    public function isSuperAdmin()
    {
        return $this->attributes['role'] === 30;
    }

    /*
    |------------------------------------------------------------------------------------
    | Boot
    |------------------------------------------------------------------------------------
    */
    public static function boot()
    {
        parent::boot();
        static::updating(function($user)
        {
            $original = $user->getOriginal();

            if (\Hash::check('', $user->password)) {
                $user->attributes['password'] = $original['password'];
            }
        });
    }

    public function isSatker()
    {
        return $this->attributes['role'] == RoleCode::SATKER_ADMIN;
    }

    public function isAdmin()
    {

        return $this->attributes['role'] == RoleCode::BPJS_ADMIN;
    }

    public static function satker()
    {
        return self::where('role', RoleCode::SATKER_ADMIN)->latest();
    }

    public function passwordNotNull()
    {
        return $this->attributes['password'] != null;
    }
}
