@isset($pageConfigs)
{!! Helper::updatePageConfig($pageConfigs) !!}
@endisset

<!doctype html>
{{-- {!! Helper::applClasses() !!} --}}
@php
$configData = Helper::applClasses();
@endphp

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <?php /* ?><script src="{{ asset('js/core/app.js') }}" defer></script><?php */ ?>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <?php /* ?><link href="{{ asset('css/app.css') }}" rel="stylesheet"><?php */ ?>
    
    {{-- Include core + vendor Styles --}}
    @include('panels/styles')
</head>
<body>
    <div id="app">
        @include('traversy.inc.navbar')
        <div class="container">
            @include('traversy.inc.messages')
        </div>
        <main class="py-4">
            <div class="container">
            @yield('content')
            </div>
        </main>
    </div>
    {{-- include default scripts --}}
    @include('panels/scripts')
</body>
</html>
