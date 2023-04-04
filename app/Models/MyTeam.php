<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MyTeam extends Model
{





    protected $table = "my_teams";
    protected $fillable = ['name', 'image','job_title'];
    public function getImagePathAttribute()
    {
        return $this->image ? asset('uploads/my-teams/' . $this->image) : asset('uploads/default.jpeg');
    }

}
