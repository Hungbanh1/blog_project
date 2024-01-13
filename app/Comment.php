<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $table = 'comment';
    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id', 'id');
    }
}
