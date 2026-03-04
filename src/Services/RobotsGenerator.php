<?php

namespace Abdullah\LaravelSeo\Services;

class RobotsGenerator
{
    public function generate()
    {
        $content = "User-agent: *\n";
        $content .= "Disallow:\n\n";
        $content .= "Sitemap: " . url('/sitemap.xml');

        return $content;
    }
}