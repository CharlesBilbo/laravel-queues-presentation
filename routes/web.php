<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Queue;
use Illuminate\Support\Facades\Bus;
use \App\Jobs\ExampleJob;

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

Route::get('/queue', function () {
    return Queue::push(fn () => print('hello world'));
});

Route::get('/dequeue', function () { 
    $job = Queue::pop();

    return $job->fire();
});

Route::get('dispatch', function () { 
    // Bus::disptach(new ExampleJob);
    // dispatch(new ExampleJob);
    // ExampleJob::dispatch();
});


