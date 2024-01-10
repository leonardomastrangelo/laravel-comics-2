<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    use HasFactory;

    // protected $guarded = [];

    protected $fillable = ['title', 'thumb', 'description', 'price', 'type', 'sale_date', 'series'];
}
