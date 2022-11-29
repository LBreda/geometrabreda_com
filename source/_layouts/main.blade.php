<!DOCTYPE html>

<!--
THEME: Constra - Construction Html5 Template
VERSION: 1.0.0
AUTHOR: Themefisher
HOMEPAGE: https://themefisher.com/products/constra-construction-template/
DEMO: https://demo.themefisher.com/constra/
GITHUB: https://github.com/themefisher/Constra-Bootstrap-Construction-Template
WEBSITE: https://themefisher.com
TWITTER: https://twitter.com/themefisher
FACEBOOK: https://www.facebook.com/themefisher
-->

<html lang="{{ $page->language ?? 'it' }}">
<head>
    <!-- Basic Page Needs ================================================= -->
    <meta charset="utf-8">
    <title>{{ $page->title }}</title>
    <link rel="canonical" href="{{ $page->getUrl() }}">

    <!-- Mobile Specific Metas ============================================ -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="{{ $page->description }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">

    <meta name="author" content="Lorenzo Breda https://lbreda.com">
    <meta name="generator" content="Jigsaw">
    <meta name="theme-name" content="constra">

    <!-- Styles and scripts =============================================== -->
    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>
</head>
<body>
<div class="body-inner">
    @include('_layouts.parts.top_bar')
    @include('_layouts.parts.navigation')

    @yield('body')

    @include('_layouts.parts.footer')
</div>


</body>
</html>
