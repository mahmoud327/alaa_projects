<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{

    use \Astrotomic\Translatable\Translatable;

    protected $with = [
        'translations',
    ];

    protected $appends = [
        'image_path',
    ];


    protected $translationForeignKey = "product_id";
    public $translatedAttributes = ['name', 'desc'];
    public $translationModel = 'App\Models\Translation\Product';
    protected $table = "products";
    protected $fillable = ['type', 'image', 'link','link_app_stroe','link_geogle_play','type_link'];







    /*
     * ----------------------------------------------------------------- *
     * --------------------------- Accessors --------------------------- *
     * ----------------------------------------------------------------- *
     */


    public function getImagePathAttribute()
    {
        return $this->image ? asset('uploads/products/' . $this->image) : asset('uploads/default.jpeg');
    }


    /*
     * ----------------------------------------------------------------- *
     * --------------------------- relations --------------------------- *
     * ----------------------------------------------------------------- *
     */


    public function images()
    {
        return $this->hasmany('App\Models\ProductImage','product_id');
    }
}
