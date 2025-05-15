<?php

use App\Livewire\Pages\Index;
use App\Livewire\Section\NewsUpdate;
use App\Livewire\Section\NewsUpdateDetail;
use Illuminate\Support\Facades\Route;

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

// Route::get('/contoh', function () {
//     return view('welcome');
// });

Route::get('/', Index::class);
Route::get('/news-update', NewsUpdate::class)->name('news-update');
Route::get('/news-update/{id}', NewsUpdateDetail::class)->name('news-update-detail');