<?php

namespace Abdullah\LaravelSeo\Models;

use Illuminate\Database\Eloquent\Model;

class Seo extends Model
{
    protected $fillable = [
        'meta_title',
        'meta_description',
        'meta_keywords',
        'canonical_url',
        'og_title',
        'og_description',
        'og_image',
        'og_type',
        'twitter_title',
        'twitter_description',
        'twitter_image',
        'twitter_card',
        'robots',
        'schema_markup',
    ];

    public function seoable()
    {
        return $this->morphTo();
    }
}