<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admins-page.dashboard');
});

Route::get('/admin', function () {
    return view('admins-page.dashboard');
});

Route::get('/daftar-akun', function () {
    return view('admins-page.relawan.daftar-akun');
});

Route::get('/daftar-relawan', function () {
    return view('admins-page.relawan.daftar-relawan');
});

Route::get('/admin-surat', function () {
    return view('admins-page.persuratan.surat');
});

Route::get('/admin-kegiatan', function () {
    return view('admins-page.kegiatan.kegiatan');
});

Route::get('/admin-kegiatan/detail', function () {
    return view('admins-page.kegiatan.detail-kegiatan');
});
