<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Home</title>
</head>
<body>
  {{-- stampa di nome e cognome, come titolo --}}
  <h1>
    {{ $name }} {{ $lastname }}
  </h1>
  
  <nav>
    <ul>
      <li>
        <a href="{{route('contacts')}}">Contacts</a>
      </li>
      <li>
        <a href="{{route('info')}}">Info</a>
      </li>
    </ul>
  </nav>

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
</body>
</html>