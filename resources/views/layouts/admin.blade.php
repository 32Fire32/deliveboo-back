<?php
function startsWith($string, $startString)
{
    $len = strlen($startString);
    return substr($string, 0, $len) === $startString;
}
?>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>DeliveBoo @yield('title')</title>

    <!-- FAVICON -->
    <link rel="icon" href="" type="image/png" />

    <!-- FONTAWESOME -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/all.min.js"
        integrity="sha512-rpLlll167T5LJHwp0waJCh3ZRf7pO6IT1+LZOhAyP6phAirwchClbTZV3iqL3BMrVxIYRbzGTpli4rfxsCK6Vw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Usando Vite -->
    @vite(['resources/js/app.js'])

    {{-- chartjs --}}
    <script src="https://cdnjs.com/libraries/Chart.js"></script>
</head>

<body>
    <div id="app">
        <header class="navbar navbar-dark sticky-top bg-orange flex-md-nowrap p-2 shadow position-fixed w-100">
            <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 title" href="">DeliveBoo</a>
            <button class="navbar-toggler position-absolute d-md-none collapsed" type="button"
                data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <form action="" method="GET" class="w-100">
                <input class="form-control form-control-dark w-100" type="text" placeholder="Search"
                    aria-label="Search" id="search" name="search" value="" />
            </form>
            <div class="navbar-nav">
                <div class="nav-item text-nowrap ms-2">
                    <a class="nav-link title" href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
        </header>

        <div class="container-fluid vh-100 py-5">
            <div class="row h-100">
                <nav id="sidebarMenu"
                    class="col-md-3 col-lg-2 d-md-block bg-orange navbar-dark sidebar collapse position-fixed h-100">
                    <div class="position-sticky pt-3">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link text-white <?php if (startsWith(Route::currentRouteName(), 'admin.dashboard')) {
                                    echo 'bg-red';
                                } ?>"
                                    href="{{ route('admin.dashboard') }}">
                                    <i class="fa-solid fa-tachometer-alt fa-lg fa-fw pe-1"></i>Dashboard
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white <?php if (startsWith(Route::currentRouteName(), 'admin.dishes')) {
                                    echo 'bg-red';
                                } ?>"
                                    href="{{ route('admin.dishes.index') }}">
                                    <i class="fa-solid fa-burger fa-lg fa-fw pe-1"></i>Menù
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>

                <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 pt-4">
                    @yield('content')
                </main>
            </div>
        </div>
    </div>
    @yield('scripts')
    <script type="text/javascript" src="{{ URL::asset('js_apps/preview_image.js') }}"></script>
    <script src="{{ URL::asset('js_apps/chart.js') }}"></script>

</body>
@yield('scripts')

</html>
