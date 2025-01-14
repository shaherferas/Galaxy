<?php

use App\Http\Controllers\PropertyController;
use App\Livewire\AboutUs;
use App\Livewire\Blog;
use App\Livewire\ContactUs;
use App\Livewire\ListProp;
use App\Livewire\PostDetails;
use App\Livewire\Properties;
use App\Livewire\TagPosts;
use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[PropertyController::class, 'index'])->name('home');
Route::get('/properties', [PropertyController::class, 'search'])->name('properties');
Route::get('/properties/{id}', [PropertyController::class, 'getById'])->name('properties.get');
Route::get('/properties/estate/{estate}', [PropertyController::class, 'getByState'])->name('properties.getbyestate');
Route::get('/properties/type/{type}', [PropertyController::class, 'getByType'])->name('properties.getByType');

Route::get('/contact-us', ContactUs::class)->name('contact');
Route::get('/list_prop', ListProp::class)->name('list_prop');
Route::get('/about-us', AboutUs::class)->name('about');
Route::get('/posts', Blog::class)->name('posts');
Route::get('/blog/{id}', PostDetails::class)->name('post.details');
Route::get('/tags/{tagName}', TagPosts::class)->name('tags.posts');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
