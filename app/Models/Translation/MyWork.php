<?php

namespace App\Models\Translation;

use Illuminate\Database\Eloquent\Model;

class MyWork extends Model {

    protected $table = "my_work_translations";

    protected $fillable = ['name','desc','locale','my_work_id'];

    protected $guarded = ['my_work_id'];

    public $timestamps = false;

}
