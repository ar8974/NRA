<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\NraEpisodeController;
use App\Http\Controllers\Admin\NraSubController;
use App\Http\Controllers\Admin\NraGenreController;
use App\Http\Controllers\Admin\NraProdhouseController;
use App\Http\Controllers\Admin\NraProducerController;
use App\Http\Controllers\Admin\NraWebseriesController;
use App\Http\Controllers\Admin\NraSeriesGenreController;
use App\Http\Controllers\Admin\NraViewerController;
use App\Http\Controllers\Admin\NraScheduleController;
use App\Http\Controllers\Admin\NraReleaseCountryController;
use App\Http\Controllers\Admin\NraContractController;
use App\Http\Controllers\Admin\NraCountryController;
use App\Http\Controllers\Admin\NraFeedbackController;

use App\Http\Controllers\User\ShowController;
use App\Http\Controllers\User\CategoryController;

Route::get('/', function () {
    return view('home');
});


Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('episodes', NraEpisodeController::class);
    Route::resource('subs', NraSubController::class);
    Route::resource('genres', NraGenreController::class);
    Route::resource('producers', NraProducerController::class);
    Route::resource('prodhouses', NraProdhouseController::class);
    Route::resource('webseries', NraWebseriesController::class);
    Route::resource('contracts', NraContractController::class);
    Route::resource('viewers', NraViewerController::class);
    Route::resource('schedules', NraScheduleController::class);
    Route::resource('seriesgenres', NraSeriesGenreController::class);
    Route::resource('releasecountries', NraReleaseCountryController::class);
    // Route::resource('dubs', NraDubController::class);
    Route::resource('countries', NraCountryController::class);
    Route::resource('feedback', NraFeedbackController::class);
});


Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');
});



Route::prefix('user')->name('user.')->group(function () {
    Route::get('shows', [App\Http\Controllers\User\ShowController::class, 'index'])->name('shows.index');
    Route::get('shows/{show}', [App\Http\Controllers\User\ShowController::class, 'show'])->name('shows.show');
    Route::get('episodes/{episode}', [App\Http\Controllers\User\EpisodeController::class, 'show'])->name('episodes.show');
});


Route::prefix('user')->name('user.')->group(function () {

    Route::get('/', [ShowController::class, 'index'])->name('home');

    Route::get('shows', [ShowController::class, 'index'])->name('shows.index');
    Route::get('shows/{id}', [ShowController::class, 'show'])->name('shows.show');

    Route::get('categories', [CategoryController::class, 'index'])->name('categories');
    Route::get('categories/{id}', [CategoryController::class, 'show'])->name('categories.show');
});

Route::get('/user/shows/{show}', [ShowController::class, 'show'])->name('user.shows.show');


Route::prefix('user')->name('user.')->group(function() {
    Route::get('shows', [\App\Http\Controllers\User\ShowController::class, 'index'])->name('shows.index');
    Route::get('shows/{series_id}', [\App\Http\Controllers\User\ShowController::class, 'show'])->name('shows.show');
});


Route::prefix('user')->name('user.')->group(function() {
    Route::get('countries', [\App\Http\Controllers\User\CategoryController::class, 'index'])->name('countries');
    Route::get('countries/{country}', [\App\Http\Controllers\User\CategoryController::class, 'show'])->name('countries.show');
});
