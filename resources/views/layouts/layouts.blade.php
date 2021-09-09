<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>
    <link rel="icon" href="{{ url('icon.png') }}">
    <title>First Laravel App - @yield('title')</title>
</head>
<style>
    .navbar-light .navbar-nav .nav-link {
        color: aliceblue;
    }

    .navbar-light .navbar-nav .nav-link:hover {
        color: rgb(80, 169, 228);
    }

    .navbar-light .navbar-nav .nav-link.active {
        color: rgb(80, 169, 228);
    }

</style>

<body>
    @include('component.navbar')
    <div class="container mt-4 ">
        @yield('content')
    </div>
    <div class="container">
        <footer class="mt-5">
            <p>First Laravel App - &copy; 2021</p>
        </footer>
    </div>
</body>

</html>
