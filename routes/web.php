<?php

use App\Models\Listing;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;
use GuzzleHttp\Middleware;

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

// Run server php artisan serve --port=8080


// All Listings
Route::get('/', [ListingController::class, 'index']);

// Show Create Form
Route::get('/listings/create', [ListingController::class, 'create']);

// Store Listing Data
Route::post('/listings', [ListingController::class, 'store']);

// Show Edit Form
Route::get('listings/{listing}/edit', [ListingController::class, 'edit']);

// Update Listing
Route::put('listings/{listing}', [ListingController::class, 'update']);

// Delete Listing
Route::delete('listings/{listing}', [ListingController::class, 'destroy']);

// Manage Listings
Route::get('/listings/manage', [ListingController::class, 'manage'])->middleware('auth');

// Single Listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);

// Show Register/Create Form
Route::get('/register', [UserController::class, 'create']);

// Create New User
Route::post('/users', [UserController::class, 'store']);

// Log User Out
Route::post('/logout', [UserController::class, 'logout']);

// Show Log In
Route::get('/login', [UserController::class, 'login']);

// Login user
Route::post('/users/authenticate', [UserController::class, 'authenticate']);
