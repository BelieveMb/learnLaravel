<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
  @include('users.header')

  <main class="bg-gray-400">

 
    <div class="flex justify-between gap-5">
      <h2>Body</h2>
      @foreach ($voitures as $voiture)
          <p>{{ $voiture->marque }} - {{ $voiture->modele }}</p>
      @endforeach
    </div>

  </main>

</body>
</html>