<?php

namespace Abdullah\LaravelSeo\Services;

class SitemapGenerator
{
    public function generate()
    {
        $models = config('seo.sitemap_models', []);
        $urls = [];

        foreach ($models as $model) {
            if (!class_exists($model)) {
                continue;
            }

            $items = $model::all();

            foreach ($items as $item) {
                $urls[] = [
                    'loc' => url($item->slug ?? ''),
                    'lastmod' => optional($item->updated_at)->toAtomString(),
                ];
            }
        }

        return view('laravel-seo::sitemap', compact('urls'))->render();
    }
}