<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MyWorkCategory extends Model
{
    use \Astrotomic\Translatable\Translatable;


    protected $table = 'my_work_categories';
    protected $fillable =['status'];

    public $timestamps = true;
    protected $translationForeignKey = "my_work_category_id";
    public $translatedAttributes = ['title'];
    public $translationModel = 'App\Models\Translation\MyWorkCategory';





}

