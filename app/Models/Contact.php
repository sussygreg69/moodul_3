<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\app\Models\Traits\CrudTrait;

class Contact extends Model
{
    use CrudTrait;

    protected $fillable = ['name', 'email', 'subject', 'message'];
}

