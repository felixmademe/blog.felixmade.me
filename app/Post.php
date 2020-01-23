<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'text', 'points', 'views', 'shares', 'user_id'
    ];

    public function user()
    {
        return $this->belongsTo( 'App\User' );
    }

    public function tags()
    {
        return $this->hasMany( 'App\Tag' );
    }

    public function categories()
    {
        return $this->hasMany( 'categories' );
    }
}
