<?php

use App\Livewire\About;
use App\Livewire\Contact;
use App\Livewire\Counter;
use App\Livewire\Home;
use App\Livewire\Users;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class);
Route::get('/about', About::class);
Route::get('/contact', Contact::class);

Route::get('/counter', Counter::class);
Route::get('/users', Users::class);
