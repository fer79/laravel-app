<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Agregado --}}

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous"/>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="icon" href="/logo_mini.png">
    
    <style>

      body {
        font-family: 'Nunito', sans-serif;
      }
      
    </style>

  </head>
  @component('mail::message')
    @component('mail::panel')
    <body class="antialiased d-flex flex-column min-vh-100">
      <div class="container">
        <div class="row justify-content-center">
          <p class="lead p-4 text-center">
            Thank you for contacting us.<br>
            This is an automatic email to confirm the contact email provided.<br>
            You will receive a personalized response from our team shortly.
          </p>
          <p class="lead p-4 text-center">
            Sincerely,<br>
            The Laravel-app team
          </p>
        </div>
      </div>
    </body>
    @endcomponent
  @endcomponent
</html>