<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="{{ Config::get('settings.description') }}">

<link rel="icon" href="{{ Config::get('settings.favicon') }}" type="image/x-icon">
<meta property="fb:app_id" content="{{ Config::get('settings.facebook_app_id') }}"/>
<link rel="canonical" href="{{ url('/') }}"/>
<meta name="description"
      content="{{ $page->meta_description }}">
<meta name="keywords"
      content="{{ $page->meta_keywords }}">
<meta name="twitter:card"
      content="{{ $page->description }}">
<meta name="twitter:site" content="{{ $page->meta_title }}">
<meta name="twitter:title" content="{{ $page->meta_title }}">
<meta name="twitter:description"
      content="{{ $page->meta_description }}">
<meta name="csrf-token" content="{{ csrf_token() }}">

<meta property="og:locale" content="{{ app()->getLocale() }}"/>
<meta name="og:title" content="{{ $page->meta_title }}">
<meta name="og:description"
      content="{{ $page->meta_description }}">
{{--<meta name="og:site_name" content="{{ app()->name }}">--}}
<meta property="og:type" content="website"/>
<meta property="og:image" content="{{ $page->thumbnail }}">
<meta name="csrf-token" content="{{ csrf_token() }}">
