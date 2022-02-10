<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @include('includes.style')

    <title>@yield('title')</title>
</head>

<body>

    @include('includes.navbar')

    @yield('content')

    @include('includes.footer-fb')

    @include('includes.script')
</body>

</html>
