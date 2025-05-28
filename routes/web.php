<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/notifications', function () {
    return view('notifications');
});


Route::get('/orders', function () {
    return view('orders');
});

Route::get('/deliveries', function () {
    return view('deliveries');
});

Route::get('/stats', function () {
    return view('stats');
});

Route::get('/trash', function () {
    return view('trash');
});

Route::get('/order', function () {
    return view('order');
});
Route::get('/delivery', function () {
    return view('delivery');
});

Route::get('/stats/sales', function () {
    return view('stats_sales');
});
Route::get('/stats/leadtime', function () {
    return view('stats_leadtime');
});