<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WorkImage extends Model
{





    protected $table = "work_images";
    protected $fillable = ['work_id', 'url'];





    /*
     * ----------------------------------------------------------------- *
     * --------------------------- Accessors --------------------------- *
     * ----------------------------------------------------------------- *
     */


    public function getImagePathAttribute()
    {
        return $this->url ? asset('uploads/my_works/' . $this->url) : asset('uploads/default.jpeg');
    }
}
