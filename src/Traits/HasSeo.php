<?php

namespace Abdullah\LaravelSeo\Traits;

use Abdullah\LaravelSeo\Models\Seo;

trait HasSeo
{
    public function seo()
    {
        return $this->morphOne(Seo::class, 'seoable');
    }

    public function setSeo(array $data)
    {
        return $this->seo()->updateOrCreate([], $data);
    }
}