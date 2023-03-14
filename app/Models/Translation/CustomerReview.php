<?php

namespace App\Models\Translation;

use Illuminate\Database\Eloquent\Model;

class CustomerReview extends Model {

    protected $table = "customer_review_translations";

    protected $fillable = ['desc','locale','customer_review_id'];

    protected $guarded = ['customer_review_id'];

    public $timestamps = false;

}
