<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Author extends Model
{
    //
    use SoftDeletes;

    protected $fillable = ['name', 'email', 'phone', 'user_id'];
    protected $table = 'authors';

    protected $dates = ['deleted_at'];

    public function post()
    {
        return $this->belongsTo(Post::class, 'author', 'id');
    }
}
