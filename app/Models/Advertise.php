<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advertise extends Model
{
    protected $fillable = [
        'title', 'price', 'isNegotiable', 'description', 'user_id', 'category_id', 'state_id'
    ];
    use HasFactory;
}
