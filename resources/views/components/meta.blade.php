@php
$seo = $model->seo ?? null;

$title = $seo->meta_title ?? ($model->title ?? config('app.name'));
$description = $seo->meta_description ?? '';
$image = $seo->og_image ?? null;
@endphp

<title>{{ $title }}</title>
<meta name="description" content="{{ $description }}">
<meta name="keywords" content="{{ $seo->meta_keywords ?? '' }}">
<meta name="robots" content="{{ $seo->robots ?? config('seo.default_robots') }}">

<link rel="canonical" href="{{ $seo->canonical_url ?? url()->current() }}">

<meta property="og:title" content="{{ $seo->og_title ?? $title }}">
<meta property="og:description" content="{{ $seo->og_description ?? $description }}">
<meta property="og:image" content="{{ $image ? asset($image) : '' }}">
<meta property="og:type" content="{{ $seo->og_type ?? 'website' }}">

<meta name="twitter:card" content="{{ $seo->twitter_card ?? 'summary_large_image' }}">
<meta name="twitter:title" content="{{ $seo->twitter_title ?? $title }}">
<meta name="twitter:description" content="{{ $seo->twitter_description ?? $description }}">
<meta name="twitter:image" content="{{ $image ? asset($image) : '' }}">

@if(!empty($seo->schema_markup))
<script type="application/ld+json">
{!! $seo->schema_markup !!}
</script>
@endif