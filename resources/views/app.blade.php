<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="keywords" content="ラーメンイキタイ,浜松ラーメン,ラーメン, 浜松駅 , 浜松,浜松市,"/>
        <meta name="description" content="静岡県浜松市内のラーメン検索サイト「ラーメンイキタイ」は、浜松市内のラーメン店を掲載しています。エリアの絞り込みやラーメンの系統、営業時間、好きな味から、あなたにぴったりのラーメンが見つかります！皆さんからのラーメン情報も募集しています！"/>
        {{-- <meta property="og:image" content="/image/sns-icon.png" /> --}}
        <link rel="shortcut icon" href="/image/favicon.ico" type="image/vnd.microsoft.icon"/>
        <link rel="icon" href="/image/favicon.ico" type="image/vnd.microsoft.icon"/>
        <link rel="apple-touch-icon" href="/image/app-icon.png" />

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @routes
        @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
        @inertiaHead

        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-53J57F3K');</script>
        <!-- End Google Tag Manager -->
    </head>
    <body class="font-sans antialiased">
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-53J57F3K"
            height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
        @inertia
    </body>
</html>
