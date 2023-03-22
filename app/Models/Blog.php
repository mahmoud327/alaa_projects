<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{

    use \Astrotomic\Translatable\Translatable;

    protected $with = [
        'translations',
    ];

    protected $appends = [
        'image_path',
    ];


    protected $translationForeignKey = "blog_id";
    public $translatedAttributes = ['title', 'desc','title1','desc1'];
    public $translationModel = 'App\Models\Translation\Blog';
    protected $table = "blogs";
    protected $fillable = ['user_id', 'image'];

    /*
     * ----------------------------------------------------------------- *
     * --------------------------- Relations --------------------------- *
     * ----------------------------------------------------------------- *
     */

    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
    public function category()
    {
        return $this->belongsTo('App\Models\Category', 'blog_category_id');
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
