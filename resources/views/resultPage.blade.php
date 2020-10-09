<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <h1 class="display-4">Result Page</h1>
        </div>
    </div>
    <div class="container">
        {{$result}}
      <div class="col-auto my-1">
        <a href="{{ url()->previous() }}" class="btn btn-primary"><i class="fa fa-angle-left"></i> 
          Next Student
        </a>
        <a href="/" class="btn btn-warning"><i class="fa fa-angle-left"></i> 
          Choose New Subject
        </a>
      </div>
    </div>
</body>
</html>