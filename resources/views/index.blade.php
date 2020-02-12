<!doctype html>
<html lang="{{ app()->getLocale() }}" style="padding:0; border-radius:0; margin: 0;">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>{{ config('app.name') }}</title>
  </head>
  <body style="padding:0; border-radius:0; margin: 0;">
    <div id="app"></div>
    <script src="{{ mix('js/app.js') }}"></script>
  </body>
</html>