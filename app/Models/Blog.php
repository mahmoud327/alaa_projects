<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{



    protected $appends = [
        'image_path',
    ];


    protected $table = "blogs";
    protected $fillable = ['user_id', 'image', 'title', 'title2', 'description'];

    /*
     * ----------------------------------------------------------------- *
     * --------------------------- Relations --------------------------- *
     * ----------------------------------------------------------------- *
     */

    protected $casts = [
        'title2' => 'array',
        'description' => 'array'
    ];
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
    public function category()
    {
        return $this->belongsTo('App\Models\Category', 'blog_category_id');
    }

    public function blog_views()
    {
        return $this->hasmany('App\Models\BlogView', 'blog_id');
    }




    /*
     * ----------------------------------------------------------------- *
     * --------------------------- Accessors --------------------------- *
     * ----------------------------------------------------------------- *
     */


    public function getImagePathAttribute()
    {
        return $this->image ? asset('uploads/blogs/' . $this->image) : asset('uploads/default.jpeg');
    }
}
