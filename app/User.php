<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{

    use Notifiable;
    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
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
    function roles()
    {
        //user - role_users - roles 
        //qua bang trung gian role_users 
        return $this->belongsToMany(Role::class, 'role_users', 'user_id');
    }
    function checkPermissionAccess($permissionCheck)
    {
        // return true;
        $roles = auth()->user()->roles;
        // dd($roles);
        foreach ($roles as $role) {
            $list_roles = $role->list_roles;
            if ($list_roles->contains('key_code', $permissionCheck)) {
                return true;
            }
        }
        return false;
        // dd($role);
        //b1 lay dc tat ca cac quyen user dang login trong he thong
        //b2 ss gia tri dua vao cac router hien tai xem co ton tai trong cac quyen ma minh lay dc hay kh



    }
}
