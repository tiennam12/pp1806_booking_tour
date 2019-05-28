<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    protected $fillable = [
        'category_id', 
        'price', 
        'avg_rating', 
        'image', 
        'quantity', 
        'tour_name', 
        'description', 
        'view', 
        'discount',
        'start',
    ];
}