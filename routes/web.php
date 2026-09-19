<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/inflables', function () {
    return view('inflables');
});

Route::get('/snacks', function () {
    return view('snacks');
});

Route::get('/carpas', function () {
    return view('carpas');
});

Route::get('/mesas', function () {
    return view('mesas');
});

Route::get('/sillas', function () {
    return view('sillas');
});

Route::get('/decoracion', function () {
    return view('decoracion');
});

Route::get('/periqueras', function () {
    return view('periqueras');
});

Route::get('/espejos', function () {
    return view('espejos');
});

Route::get('/letrasIluminadas', function () {
    return view('letrasIluminadas');
});

Route::get('/barraDeBebidas', function () {
    return view('barraDeBebidas');
});

Route::get('/servicioDeAlimentos', function () {
    return view('servicioDeAlimentos');
});

Route::get('/salasLounge', function () {
    return view('salasLounge');
});

Route::get('/vajilla', function () {
    return view('vajilla');
});

Route::get('/pistaBaile', function () {
    return view('pistaBaile');
});

Route::get('/masDe40', function () {
    return view('masDe40');
});

Route::get('/puestosDeFeria', function () {
    return view('puestosDeFeria');
});

Route::get('/batucadasYactivaciones', function () {
    return view('batucadasYactivaciones');
});

Route::get('/depositoCervezasYrefresco', function () {
    return view('depositoCervezasYrefresco');
});

Route::get('/sonido', function () {
    return view('sonido');
});

Route::get('/maquinaEspuma', function () {
    return view('maquinaEspuma');
});