<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
  <header class="py-4 px-5 bg-red-500  text-2xl text-gray-50">
    Biso chat
  </header>

  <div class="flex content-center items-center py-20 justify-center">
    <form action="" method="post" class="flex flex-col gap-5 bg-slate-500  py-6 px-8  ">
        @csrf
        <h3 class="text-center text-gray-50">Listes de messages</h3>
                     <div class="bg-red-200 py-2 px-6 ">
                        {{ $idUrl }}
                    </div> 
                {{-- @endforeach --}}
            
        
   
        <div class="flex flex-row gap-6 mt-52">
            <input type="text" required name="message" class="border-red-500 rounded-lg px-2 py-4">
            <button class="bg-slate-900 px-2 py-4 text-gray-50 rounded-xl">Envoyer</button>
        </div>
    </form>
  </div>
</body>
</html>