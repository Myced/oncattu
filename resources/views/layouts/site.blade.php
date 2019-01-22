<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <meta name="description" content="ONCATTU Online Learning System">
    <meta name="author" content="PEFSCOM SYSTEMS">

    <!-- Page Title -->
    <title> {{ config('app.name', "ONCATTU") }} @yield('title') </title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="/favicon.ico">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @include('site_includes.styles')

</head>

<body class="homepage">

    <!-- Preloader -->
    <div class="loader-wrapper">
        <div class="sk-cube-grid">
            <div class="sk-cube sk-cube1"></div>
            <div class="sk-cube sk-cube2"></div>
            <div class="sk-cube sk-cube3"></div>
            <div class="sk-cube sk-cube4"></div>
            <div class="sk-cube sk-cube5"></div>
            <div class="sk-cube sk-cube6"></div>
            <div class="sk-cube sk-cube7"></div>
            <div class="sk-cube sk-cube8"></div>
            <div class="sk-cube sk-cube9"></div>
        </div>
    </div>

    <!-- Page Wrapper -->
    <div class="wrapper">

        <!-- Header Section -->
        <header>
            <div class="header-area">

                <!-- Top Contact Info -->
                @include('site_includes.navigation')
            </div>
        </header>
        <!-- Header Section -->

        <!-- Main Content Section -->
        @yield('content')
        <!-- Main Content Section -->

        <!-- Footer Section -->
        @include('site_includes.footer')
        <!-- Footer Section -->

        <!-- back-to-top link -->
        <a href="#0" class="cd-top"> Top </a>

    </div>

    <!-- Page Wrapper
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

    <!-- Javascripts
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

    @include('site_includes.scripts')
    @include('site_includes.notification')
    @yield('scripts')

</body>

</html>
