<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Contacts</title>
</head>
<body>
  {{-- stampa dei contatti dell'utente --}}
  <ul>
    @forelse ($contacts as $contact)
    <li>
      {{ $contact }}
    </li>
    @empty
    {{-- entra qua dentro solo se $contacts risulta essere empty --}}
        Nessun contatto
    @endforelse
    </ul>
  <a href="{{route('home')}}">Back to home ...</a>
</body>
</html>