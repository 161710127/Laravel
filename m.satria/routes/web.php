<?php

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/kontak', function () {
//    return view('kontak');
//});

//Route::get('/about', function () {
//    return '<h1>Halo<h1>'
//    .'Selamat datang di webapp saya<br>'
//   .'Laravel, emang keren.';

//});
//Route::get('/about/1', function () {
//    return '<h1>Hai Ketemu lagi di yang kedua kalinya<h1>'
//   .'ini yang kedua<br>'
//    .'Laravel, memang beda.';

//});
//Route::get('/about/2', function () {
//    return '<h1>Eh kamu lagi ini yang kedua<h1>'
//    .'Ini yang kedua kalinya bertemu<br>'
//    .'Laravel, Banyak Jenisnya.';

//});
//Route::get('/about/3', function () {
//    return '<h1>Ke tiga kalinya<h1>'
//    .'Salam kenal<br>'
//    .'Laravel, emang hebat.';

//});
//Route::get('/about/4', function () {
//    return '<h1>ke empat<h1>'
//    .'Senang berkenelan denganmu <br>'
//    .'Laravel, emang wow.';
//
//});

//Route::get('/about/5', function () {
//    return '<h1>ke 5<h1>'
//    .'bye<br>'
//    .'Laravel, emang ok.';
//});

Route::get('/kantin/{a}', function ($a) {
    return 'Saya pesan <br>'
    .'makanan '.$a;
});

Route::get('/kantin/{a}/{b}', function ($a,$b) {
    return 'Saya pesan <br>'
    .'makanan '.$a.'<br>'
    .'minuman '.$b;
});

Route::get('/kantin/{a}/{b}/{c}', function ($a,$b,$c) {
    return 'Saya pesan <br>'
    .'makanan '.$a.'<br>'
    .'minuman '.$b.'<br>'
    .'cemilan '.$c;
});

Route::get('/user/{name?}', function ($name = ' Who are you ?') {
    return 'Nama saya '.$name;
});

