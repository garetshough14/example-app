<?php

use App\Http\Controllers\ListingController;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Common Resource Routes:
// index - Show all listings
// show -Show single listing
// create - Show form to create new listing
// store - store new listing
// edit - Show form to end listing
// Update - update listing
// destroy - Delete listing


// All Listings
Route::get('/', [ListingController::class, 'index']);

// Single Listing
route::get('/listings/{listing}', [ListingController::class, 'show']);