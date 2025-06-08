<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Log;
use App\Models\Contact;
use App\Http\Controllers\Api\ProductController;

Log::info('✅ api.php loaded');

Route::post('/contact', function (Request $request) {
    Log::info('✅ /api/contact hit');

    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'subject' => 'required|string|max:255',
        'message' => 'required|string',
    ]);

    $contact = Contact::create($validated);

    return response()->json([
        'message' => 'Contact form submitted successfully.',
        'data' => $contact,
    ], 201);
});

Route::apiResource('products', ProductController::class);
