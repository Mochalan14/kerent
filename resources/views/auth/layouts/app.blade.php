<!doctype html>
<html lang="en">

<head>
    <title>@yield('judul')</title>

    @include('auth.includes.meta')
    @include('auth.includes.css')


</head>

<body>
    @yield('konten')

    @include('auth.includes.script')

</body>

</html>
