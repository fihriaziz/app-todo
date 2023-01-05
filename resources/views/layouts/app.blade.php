<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.meta')
    <title>@yield('title')</title>
    @include('includes.style')
</head>
<body>
    <main class="p-5">
        @yield('content')
    </main>

    @include('includes.script')
</body>
</html>
