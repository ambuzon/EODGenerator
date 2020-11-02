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
          <h1 class="display-4">Subjects</h1>
        </div>
    </div>
    <div class="container">
      
    <form action="/submit" method="post">
      {{ csrf_field() }}
      <label for="exampleFormControlSelect2">Choose Subject</label>
      <br>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="subject" id="math" value="math">
        <label class="form-check-label" for="math">Math</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="subject" id="english" value="english">
        <label class="form-check-label" for="english">English</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="subject" id="science" value="science">
        <label class="form-check-label" for="science">Science</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="subject" id="global" value="global">
        <label class="form-check-label" for="global">Global</label>
      </div>

      <div class="col-auto my-1">
        <button type="submit" class="btn btn-primary">Next</button>
      </div>
    </form>
</body>
</html>