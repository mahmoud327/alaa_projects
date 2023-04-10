<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserRequestService extends Model
{





    protected $table = "user_request_service";
    protected $fillable = ['name', 'email', 'message', 'type_services', 'phone', 'country'];




    protected $casts = [
        'categories_ids' => 'array',
        'type_services' => 'array',
    ];
    
}
