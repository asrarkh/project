</head>
<body>


    @include('layouts.partials.navbar')

    <main class="container">
        @yield('content')

    </main>

    <script src="{!! url('assets/bootstrap/js/bootstrap.bundle.min.js') !!}"></script>

  </body>
</html>
