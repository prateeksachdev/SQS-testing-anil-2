<?php

use App\Http\Controllers\SqsController;
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
    return view('welcome');
});


Route::get('sqs', [SqsController::class, 'scanCode']);

Route::get('batch', [SqsController::class, 'batch']);

Route::get('sqs-batch', [SqsController::class, 'scanCodeBatch']);

Route::prefix('jobs')->group(function () {
    Route::queueMonitor();
});