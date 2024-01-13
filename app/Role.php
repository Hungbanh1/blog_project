<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    function list_roles()
    {
        return $this->belongsToMany(list_role::class, 'list_role_role', 'role_id');
    }

    function user()
    {
        return $this->hasMany('App\User', 'permission');
        //khóa ngoại permission
    }
}
