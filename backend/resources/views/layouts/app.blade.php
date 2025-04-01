<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muskurate Raho - @yield('title')</title>
    <link href="{{ config('app.bootstrap_cdn') }}" rel="stylesheet">
    <style>
        @yield('styles')
    </style>
</head>
<body>
    @yield('content')

    <script src="{{ config('app.bootstrap_js_cdn') }}"></script>
</body>
</html>
