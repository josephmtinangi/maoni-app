<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $fillable = [
    	'feedback_type_id',
    	'category_id',
    	'subject',
    	'details',
    	'suggestions',
    	'attachment',
    	'initial',
    	'first_name',
    	'last_name',
    	'phone',
    	'email',
    	'region_id',
    ];
}
