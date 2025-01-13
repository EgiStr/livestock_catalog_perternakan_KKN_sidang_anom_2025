<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="application-name" content="{{ config('app.name') }}">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name') }} - Katalog Peternakan Desa Sindang Anom</title>
        <meta name="description" content="Sindanganomfarm.com adalah sebuah aplikasi katalog peternakan seperti kambing, sapi, ayam dll di Desa Sindang Anom, Kec. Sekampung Udik, Lampung Timur. Aplikasi ini bertujuan untuk mendigitalisasi peternakan di dalam desa dengan harapan meningkatkan penjualan peternakan dan centralisasi data.">
        <meta name="keywords" content="peternakan, kambing, sapi, ayam, desa sindang anom, sekampung udik, lampung timur, digitalisasi peternakan, katalog peternakan">
        <meta name="author" content="Rizki Dwi Prayoga">
        <meta name="robots" content="index, follow">
        <meta name="googlebot" content="index, follow">
        <meta name="bingbot" content="index, follow">
        <link rel="canonical" href="https://sindanganomfarm.com">
        <meta property="og:title" content="Sindanganomfarm.com - Katalog Peternakan Desa Sindang Anom">
        <meta property="og:description" content="Sindanganomfarm.com adalah sebuah aplikasi katalog peternakan seperti kambing, sapi, ayam dll di Desa Sindang Anom, Kec. Sekampung Udik, Lampung Timur. Aplikasi ini bertujuan untuk mendigitalisasi peternakan di dalam desa dengan harapan meningkatkan penjualan peternakan dan centralisasi data.">
        <meta property="og:image" content="https://sindanganomfarm.com/og-image.jpg">
        <meta property="og:url" content="https://sindanganomfarm.com">
        <meta property="og:type" content="website">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="Sindanganomfarm.com - Katalog Peternakan Desa Sindang Anom">
        <meta name="twitter:description" content="Sindanganomfarm.com adalah sebuah aplikasi katalog peternakan seperti kambing, sapi, ayam dll di Desa Sindang Anom, Kec. Sekampung Udik, Lampung Timur. Aplikasi ini bertujuan untuk mendigitalisasi peternakan di dalam desa dengan harapan meningkatkan penjualan peternakan dan centralisasi data.">
        <meta name="twitter:image" content="https://sindanganomfarm.com/twitter-image.jpg">
        <style>
            [x-cloak] {
                display: none !important;
            }
        </style>
        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website" />
        <meta property="og:url" content="" />
        <meta property="og:title" content="Sindanganomfarm.com - Katalog Peternakan Desa Sindang Anom">
        <meta property="og:description" content="Sindanganomfarm.com adalah sebuah aplikasi katalog peternakan seperti kambing, sapi, ayam dll di Desa Sindang Anom, Kec. Sekampung Udik, Lampung Timur. Aplikasi ini bertujuan untuk mendigitalisasi peternakan di dalam desa dengan harapan meningkatkan penjualan peternakan dan centralisasi data.">
        <meta property="og:image" content="https://github.com/user-attachments/assets/deff3df0-9da5-4894-a61a-9a6c133a0e08" />
        <meta property="og:image:width" content="300">
        <meta property="og:image:height" content="300">
        
        <!-- Twitter -->
        <meta property="twitter:card" content="summary_large_image" />
        <meta property="twitter:url" content="" />
        <meta property="twitter:title" content="desa sindan anom" />
        <meta property="twitter:description" content="desa sindang anom menyediakan katalog peternakan yang sangat lengkap serta menyediakan informasi terkait kesehatan kandang serta terintegrasi Iot" />
        <meta property="twitter:image" content="https://github.com/user-attachments/assets/deff3df0-9da5-4894-a61a-9a6c133a0e08" />
        <!-- Meta Tags Generated with https://metatags.io -->
        <!-- Default Favicon -->
        <link rel="icon" type="image/x-icon" href="/favicon.ico">

        <!-- Favicon untuk iOS -->
        <link rel="apple-touch-icon" sizes="180x180" href="/LOGO.png">

        <!-- Favicon untuk Android -->
        <link rel="icon" type="image/png" sizes="192x192" href="/LOGO.png">
        <link rel="icon" type="image/png" sizes="512x512" href="/LOGO.png">


        <title>Desa Sindang Anom</title>
        <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        @viteReactRefresh 
        @vite(['resources/css/app.css', 'resources/js/app.jsx'])
        <!-- In this article, we are going to use JSX syntax for React components -->
        @inertiaHead
    </head>
    <body>
        @inertia
    </body>
</html>