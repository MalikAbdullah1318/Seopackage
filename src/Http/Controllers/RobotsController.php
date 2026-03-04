<?php

namespace Abdullah\LaravelSeo\Http\Controllers;

use Abdullah\LaravelSeo\Services\RobotsGenerator;

class RobotsController
{
    public function index(RobotsGenerator $generator)
    {
        return response(
            $generator->generate(),
            200
        )->header('Content-Type', 'text/plain');
    }
}