<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MyWork extends Model
{

    use \Astrotomic\Translatable\Translatable;

    protected $with = [
        'translations',
    ];

    protected $appends = [
        'image_path',
    ];


    protected $translationForeignKey = "my_work_id";
    public $translatedAttributes = ['name', 'desc'];
    public $translationModel = 'App\Models\Translation\MyWork';
    protected $table = "my_works";
    protected $fillable = ['type', 'image', 'link'];





    /*
     * ----------------------------------------------------------------- *
     * --------------------------- Accessors --------------------------- *
     * ----------------------------------------------------------------- *
     */


    public function getImagePathAttribute()
    {
        return $this->image ? asset('uploads/my_works/' . $this->image) : asset('uploads/default.jpeg');
    }
}
