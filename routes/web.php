<?php

use App\Models\Task;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $arr = Task :: getArray();

    // ddd(Task::split_array($arr));
    return view('task',['chunks' => Task ::split_array($arr) ]);
});
