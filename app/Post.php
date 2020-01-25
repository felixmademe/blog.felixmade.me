<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Post extends Model
{
    use HasSlug;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'text', 'points',  'state', 'views', 'shares', 'user_id'
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


    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug')
            ->usingSeparator('-')
            ->slugsShouldBeNoLongerThan(50);
    }

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
