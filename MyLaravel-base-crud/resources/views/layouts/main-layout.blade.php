<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>25-05-2021</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href=" {{asset('/css/app.css')}}">
    </head>
    <body>

        @include('components.header')
        @yield('sectionHome')
        @yield('sectionDetails')
        @yield('sectionCreate')
        @include('components.footer')

    </body>
</html>
