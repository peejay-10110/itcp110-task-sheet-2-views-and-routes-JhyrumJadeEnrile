<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// ─── Original 5 pages ────────────────────────────────────────────────────────

Route::get('/index', function () {
    return view('index');
});

Route::get('/Skills', function () {
    return view('Skills');
});

Route::get('/Grades', function () {
    return view('Grades');
});

Route::get('/Journal', function () {
    return view('Journal');
});

Route::get('/Gallery', function () {
    return view('Gallery');
});

Route::get('/CV', function () {
    return view('CV');
});

Route::get('/Schedule', function () {
    return view('Schedule');
});

Route::get('/Calendar', function () {
    return view('Calendar');
});

Route::get('/Projects', function () {
    return view('Projects');
});

Route::get('/Contact', function () {
    return view('Contact');
});

// ─── Contact form submission ───────────────────────────────────────────────
Route::post('/contact/send', function (Request $request) {
    
    return back()->with('success', 'Message sent successfully!');
});

// ─── Root redirect ────────────────────────────────────────────────────────────
Route::get('/', function () {
    return redirect('/index');
});