<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Chat Biso</title>
</head>
<body>

    <!-- component -->
    <div class="flex h-screen overflow-hidden">
        <!-- Sidebar -->

        @include('chat.sidebar')
    
        
        <!-- Main Chat Area -->



        @if (isset($nameOnline))
            @include('chat.mainChat')
        @else
            @include('chat.emptyChat')
        @endif
        
    </div>

    <script>
    // JavaScript for showing/hiding the menu
    const menuButton = document.getElementById('menuButton');
    const menuDropdown = document.getElementById('menuDropdown');
    
    menuButton.addEventListener('click', () => {
        if (menuDropdown.classList.contains('hidden')) {
        menuDropdown.classList.remove('hidden');
        } else {
        menuDropdown.classList.add('hidden');
        }
    });
    
    // Close the menu if you click outside of it
    document.addEventListener('click', (e) => {
        if (!menuDropdown.contains(e.target) && !menuButton.contains(e.target)) {
        menuDropdown.classList.add('hidden');
        }
    });
    </script>
</body>
</html>


