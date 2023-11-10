<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>@yield('title') | Administration  </title>
</head>
<body>


      <!-- on affiche un message de succès  -->
      @if (session('success'))
        <div class="bg-red-700 py-5 px-5">
          {{ session('success')}}
        </div>
      @endif

      <div class="py-3 px-5">
      
        @yield('content')
      </div>

</body>
</html>