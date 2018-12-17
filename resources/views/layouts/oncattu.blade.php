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
<<<<<<< HEAD
=======
        @yield('styles')
>>>>>>> dee027b4a572d9e315e44e7a9d348b572324db49

    </head>
    <body>
        @include('includes.navigation')

        @yield('content')

        @include('includes.footer')
    </body>

    @include('includes.scripts')
    @yield('scripts')
</html>
