<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('layouts.partials.head')
@include('layouts.partials.header')
@include('layouts.inc.messages')
@yield('content')
@include('layouts.partials.footer')
@include('layouts.partials.footer-scripts')

</html>