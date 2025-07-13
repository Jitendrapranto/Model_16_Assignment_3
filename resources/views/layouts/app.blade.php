@includeIf('partials._header')
    <body class="d-flex flex-column @stack('bodyclass')">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            @includeIf('partials._nav')
            <!-- Header-->
            @yield('content')
        </main>
        <!-- Footer-->
@includeIf('partials._footer')