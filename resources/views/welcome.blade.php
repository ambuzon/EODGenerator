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
          <h1 class="display-4">Subject Choices</h1>
        </div>
    </div>
    <div class="container">
      
    <form action="/submit" method="post">
      {{ csrf_field() }}
      <label for="exampleFormControlSelect2">Choose Subject</label>
      <br>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="subject" id="subject" value="math">
        <label class="form-check-label" for="inlineRadio2">Math</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="subject" id="subject" value="english">
        <label class="form-check-label" for="inlineRadio2">English</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="subject" id="subject" value="science">
        <label class="form-check-label" for="inlineRadio2">Science</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="subject" id="subject" value="global">
        <label class="form-check-label" for="inlineRadio2">Global</label>
      </div>

      <div class="col-auto my-1">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
</body>
</html>