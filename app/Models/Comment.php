<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'ip', 'title', 'text', 'points', 'post_id'
    ];

    public function post()
    {
        return $this->belongsTo( 'App\Models\Post' );
    }
}
