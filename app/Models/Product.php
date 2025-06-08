<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\app\Models\Traits\CrudTrait;

class Product extends Model
{
    use CrudTrait; // ✅ Needed for Backpack

    protected $fillable = ['name', 'price', 'description', 'category', 'image', 'color', 'size'];

    // protected $casts = [
    //     'image' => 'string', // Optional if it's already being saved as a string
    // ];
}
