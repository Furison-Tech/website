<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="{{ $page->description }}">
        <title>{{ $page->title }}</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;800;900&family=Space+Mono:wght@700&family=Ubuntu:wght@300;400;500;700&display=swap"
              rel="stylesheet">

        <link rel="icon" type="image/x-icon" href="/assets/images/favicon.ico">
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
        <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>
    </head>
    <body class="w-screen overflow-x-hidden relative bg-0c1929">

        @include('_layouts.header')

        <main id="app" class="relative">
            @yield('body')
        </main>

        @if($page->getUrl() !== '/')
            <div class="absolute w-screen bottom-0" style="z-index: 1;">
                @include('_layouts.footer')
            </div>
        @endif
    </body>
</html>
