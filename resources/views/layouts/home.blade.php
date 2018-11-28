<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" >
    <head>
        <meta charset="utf-8">

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Oncattu - Online Learning') }}</title>

        <!-- Include styles  -->
        @include('includes.style')
        @yield('styles')

    </head>
    <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
        
        @yield('content')

        @include('includes.footer')
    </body>

    @include('includes.scripts')
    @yield('scripts')
</html>
