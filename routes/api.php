<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use Illuminate\Support\Facades\Http;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/v1/posts', function () {
    $json = Post::all()->toJson();
    $data = json_decode($json, true, JSON_UNESCAPED_SLASHES);
    return response()->json($data);
});

Route::get('/posts', function () {
    return view('fetchapi', [
        'title' => 'Fetching API',
    ]);
});
