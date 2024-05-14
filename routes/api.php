<?php

use Illuminate\Support\Facades\Route;

/**
 * @OA\Get(
 *     path="/api/test",
 *     @OA\Response(response="200", description="API is working")
 * )
 */
Route::get('/test', function () {
    return response()->json(['message' => 'API is working']);
});

Route::get('/random-number', function () {
    return response()->json([
        'random_number' => mt_rand(1, 1000) // สร้างตัวเลขสุ่มระหว่าง 1 ถึง 1000
    ]);
});
