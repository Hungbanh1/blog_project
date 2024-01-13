<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Authenticatable
{
    //
    use Notifiable;
    use SoftDeletes;
    protected $guard = "client";
    protected $table = "clients";
    protected  $fillable = ['name', 'password', 'email', 'login_at', 'title'];
}
