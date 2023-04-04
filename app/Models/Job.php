<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{





    protected $table = "jobs";
    protected $fillable = ['name', 'email','phone','message','cv','job'];

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


    public function getCvPathAttribute()
    {
        return $this->cv ? asset('uploads/jobs/' . $this->cv) : asset('uploads/default.jpeg');
    }
}
