<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'ip', 'title', 'text', 'points', 'post_id'
    ];

    public function posts()
    {
        return $this->hasMany( 'App\Post' );
    }

    public function tags()
    {
        return $this->hasManyThrough( 'App\Tag', 'App\Post' );
    }
}
