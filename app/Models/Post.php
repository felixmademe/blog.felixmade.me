<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Post extends Model
{
    use HasSlug;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'text', 'points',  'state', 'views', 'shares', 'user_id', 'published_at'
    ];

    public function user()
    {
        return $this->belongsTo( 'App\Models\User' );
    }

    public function tags()
    {
        return $this->hasMany( 'App\Models\Tag' );
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
            ->generateSlugsFrom( [ 'title', 'id' ] )
            ->saveSlugsTo('slug')
            ->usingSeparator('-')
            ->slugsShouldBeNoLongerThan(50)
            ->doNotGenerateSlugsOnUpdate();
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
