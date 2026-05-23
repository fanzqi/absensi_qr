<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Absesensi QR || @yield('title')</title>

    <!-- Fontawesome -->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,600,700,800,900" rel="stylesheet">

    <!-- SB Admin CSS -->
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">

</head>

<body id="page-top">

    <div id="wrapper">

        {{-- Sidebar --}}
        @if (request()->is('admin/*'))
            @include('layouts.sidebar.admin')
        @endif

        @if (request()->is('guru/*'))
            @include('layouts.sidebar.guru')
        @endif

        @if (request()->is('siswa/*'))
            @include('layouts.sidebar.siswa')
        @endif

        <div id="content-wrapper" class="d-flex flex-column">

            <div id="content">

                {{-- Header / Topbar --}}
                @include('partials.header')

                {{-- Content --}}
                <div class="container-fluid">
                    @yield('content')
                </div>

            </div>

            {{-- Footer --}}
            @include('partials.footer')

        </div>

    </div>

    <!-- Scroll Button -->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- JS -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

</body>

</html>
