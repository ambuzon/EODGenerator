<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('layouts.partials.head')
@include('layouts.partials.header')
@yield('content')
@include('layouts.partials.footer-scripts')
@include('layouts.partials.footer')

</html>