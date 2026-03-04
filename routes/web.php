<?php

use Illuminate\Support\Facades\Route;
use Abdullah\LaravelSeo\Http\Controllers\SitemapController;
use Abdullah\LaravelSeo\Http\Controllers\RobotsController;

Route::get('/sitemap.xml', [SitemapController::class, 'index']);
Route::get('/robots.txt', [RobotsController::class, 'index']);