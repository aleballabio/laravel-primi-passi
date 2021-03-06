<?php

use Illuminate\Routing\Route as RoutingRoute;
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
    $parama = [
        'nome' =>  [
            'prodotti' => 'Hello',
            'caselle' => 'World',
            'prodotto' => 'World',
            'caselle' => 'Salone',
        ],
    ];
    return view('home', $parama);
})->name('home');

Route::get('prodotti', function () {
    return view('prodotti');
})->name('prodotti');
