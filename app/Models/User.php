<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    const STATUS_DELETED = 0;
    const STATUS_INACTIVE = 9;
    const STATUS_ACTIVE = 10;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'verify_token', 'status',
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

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'user_roles');
    }

    public function isAdministrator()
    {
        return $this->roles()->where('name', 'admin')->exists();
    }

    public function isUser()
    {
        $user = $this->roles()->where('name', 'user')->exists();
        if ($user) return "user";
        return false;
    }

    public function isVisitor()
    {
        $user = $this->roles()->where('name', '')->exists();
        if ($user) return "user";
        return false;
    }

    public function isDisabled()
    {
        $disabled = $this->roles()->where('name', 'disabled')->exists();
        if ($disabled) return "disabled";
        return false;
    }


}
