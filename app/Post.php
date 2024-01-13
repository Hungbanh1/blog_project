<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    //
    use SoftDeletes;
    protected $fillable = [
        'id',
        'category',
        'author',
        'title_head',
        'thumb_head',
        'desc',
        'content',
    ];
    protected $table = 'posts';
    protected $dates = ['deleted_at'];
    public function author()
    {
        return $this->belongsTo(Author::class, 'author_id', 'id');
    }
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
    // public function author()
    // {

    //     return $this->hasMany(Author::class);
    //     // return $this->hasMany(Author::class, 'author', 'id');
    //     // return $this->belongsTo(Author::class, 'author', 'id');
    //     // return $this->belongsToMany(Author::class, 'id', 'author');
    // }
}
