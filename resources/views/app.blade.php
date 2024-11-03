<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <link rel='shortcut icon' type='image/x-icon' href='/favicon.ico' />
        <meta name="description" content="Join the best social music platform. Listen, share, and discover new music with friends and communities.">
        <meta name="keywords" content="music, streaming, social, community, share, discover, listen">
        <meta name="author" content="Nelixus,Fhasas">
        <meta name="viewport" content="width=device-width, initial-scale=1">

          <!-- Application Name -->
        <meta name="application-name" content="Music.dj">

        <!-- Theme Color -->
        <meta name="theme-color" content="#ff0000">

         <!-- Apple Web App Meta Tags -->
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-title" content="Music.dj">
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

          <!-- Open Graph Meta Tags -->
        <meta property="og:title" content="Music.DJ - The Social Music Platform">
        <meta property="og:description" content="Join the best social music platform. Listen, share, and discover new music with friends and communities.">
        <meta property="og:image" content="https://example.com/image.jpg">
        <meta property="og:url" content="https://music.dj">
        <meta property="og:type" content="website">
        <meta property="og:site_name" content="Music.DJ">
        <meta property="og:locale" content="en_US">

          <!-- Twitter Card Meta Tags -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="Music.dj - The Social Music Platform">
        <meta name="twitter:description" content="Join the best social music platform. Listen, share, and discover new music with friends and communities.">
        <meta name="twitter:image" content="https://example.com/image.jpg">
        <meta name="twitter:site" content="@musicdj">
        <meta name="twitter:creator" content="@musicdj">

        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <link href="https://fonts.cdnfonts.com/css/lemon-milk" rel="stylesheet">

        <!-- Scripts -->
        @routes
        @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
        @vite('resources/css/app.css')
        @inertiaHead
    </head>
    <body class="font-sans antialiased">
        @inertia
    </body>
</html>
