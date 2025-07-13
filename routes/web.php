<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactformController;
Route::get('/', function () {
    return view('Template_to_blade_conversion.home');
})->name('home');

Route::get('resume',function(){
    return view('Template_to_blade_conversion.resume');
})->name('resume');

Route::get('projects',function(){
    return view('Template_to_blade_conversion.projects');
})->name('projects');


Route::get('contact',function(){
    return view('Template_to_blade_conversion.contact');
})->name('contact');


Route::get('contactform', [ContactformController::class, 'showForm'])->name('contact.form');
Route::post('contactform', [ContactformController::class, 'submitForm'])->name('contact.submit');
Route::get('contact/confirmation', [ContactformController::class, 'confirm'])->name('contact.confirm');
