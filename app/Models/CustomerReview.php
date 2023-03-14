<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomerReview extends Model
{

    use \Astrotomic\Translatable\Translatable;

    protected $with = [
        'translations',
    ];

    protected $appends = [
        'image_path',
    ];


    protected $translationForeignKey = "customer_review_id";
    public $translatedAttributes = ['desc'];
    public $translationModel = 'App\Models\Translation\CustomerReview';
    protected $table = "customer_reviews";
    protected $fillable = ['user_name', 'job', 'image'];

    /*
     * ----------------------------------------------------------------- *
     * --------------------------- Relations --------------------------- *
     * ----------------------------------------------------------------- *
     */





    /*
     * ----------------------------------------------------------------- *
     * --------------------------- Accessors --------------------------- *
     * ----------------------------------------------------------------- *
     */


    public function getImagePathAttribute()
    {
        return $this->image ? asset('uploads/customer_reviews/' . $this->image) : asset('uploads/default.jpeg');
    }
}
