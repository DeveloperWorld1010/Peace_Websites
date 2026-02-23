<?php

use App\Http\Controllers\ContactController;
use App\Livewire\About;
use App\Livewire\Blogs;
use App\Livewire\ContactUs;
use App\Livewire\Home;
use App\Livewire\MissionVission;
use App\Livewire\Team;
use App\Livewire\WhyItMatters;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;
use Livewire\Volt\Volt;

Route::get('/', Home::class)->name('home');
Route::get('/about-us', About::class)->name('about');
Route::get('/team', Team::class)->name('team');
Route::get('/mission-vission', MissionVission::class)->name('mission-vission');
Route::get('/why-it-matters', WhyItMatters::class)->name('why-it-matters');
Route::get('/blogs', Blogs::class)->name('blogs');
Route::get('/contact-us', ContactUs::class)->name('contact-us');
Route::post('/contact-us', [ContactController::class, 'submit'])->name('contact.submit');
