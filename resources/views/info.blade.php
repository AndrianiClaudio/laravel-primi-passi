<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Info</title>
  <link rel="stylesheet" href="./css/info.css">
</head>
<body>
    {{-- stampa delle informazioni dell'utente --}}
  <ul>
    @forelse ($info as $index => $date)
      <li>
        {{$index}}: {{$date}}
      </li>
      @empty
      {{-- entra qua dentro solo se $info risulta essere empty --}}
          Nessuna informazione disponibile
    @endforelse
  </ul>
  <a href="{{route('home')}}">Back to home ...</a>
</body>
</html>