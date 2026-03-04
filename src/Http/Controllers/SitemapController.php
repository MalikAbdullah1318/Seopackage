<?php

namespace Abdullah\LaravelSeo\Http\Controllers;

use Abdullah\LaravelSeo\Services\SitemapGenerator;

class SitemapController
{
    public function index(SitemapGenerator $generator)
    {
        return response(
            $generator->generate(),
            200
        )->header('Content-Type', 'application/xml');
    }
}