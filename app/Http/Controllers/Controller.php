<?php

namespace App\Http\Controllers;

abstract class Controller
{
    protected $casts = [
    'image' => 'string',
];
}


