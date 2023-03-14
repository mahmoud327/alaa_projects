<?php

namespace App\Models\Translation;

use Illuminate\Database\Eloquent\Model;

class MyWorkCategory extends Model {

    protected $table = "my_work_category_translations";

    protected $fillable = ['title','my_work_category_id','locale'];


    public $timestamps = true;

}
