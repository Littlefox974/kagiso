<?php

use Illuminate\Http\Request;
use App\Models\Hike;
use PhpParser\Node\Stmt\ElseIf_;

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
//Route qui redirige vers toute les randonnées
Route::get('/hike', function (Request $request) {
    return Hike::get();
});
//Route qui redirige soit vers une randonnée soit vers la dernière 
Route::get('/hike/{n}', function ($n) {
    if ($n === "last") return Hike::get()->sortByDesc('created_at')->first();
    if (intval($n)) return Hike::get()->where('id', intval($n));
    return null;
});
