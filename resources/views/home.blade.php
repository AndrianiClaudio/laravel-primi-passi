<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Home</title>
  <link rel="stylesheet" href="./css/app.css">
</head>
{{-- 
<style>

</style> --}}

<body>
  <header class="header">
    {{-- stampa di nome e cognome, come titolo --}}
    <div class="title">
      <h1>
        {{ $name }} {{ $lastname }}
      </h1>  
    </div>
    <nav class="navbar">
      <ul>
        <li>
          <a href="{{route('contacts')}}">Contacts</a>
        </li>
        <li>
          <a href="{{route('info')}}">Info</a>
        </li>
      </ul>
    </nav>
  </header>
</body>
</html>