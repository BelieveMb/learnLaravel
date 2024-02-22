<div class="flex-1">
    <!-- Chat Header -->
    <header class="bg-white p-4 text-gray-700">
        <h1 class="text-2xl font-semibold">{{$nameOnline->name}}</h1>
    </header>
    <!-- Chat Messages -->
    <div class="h-screen overflow-y-auto p-4 pb-36">
        @foreach ($listMessages as $messages)
              <!-- Incoming Message -->
            {{-- @if ($messages->patientMsg === "true") --}}
               <!-- Outgoing Message -->
              <div class="flex justify-end mb-4 cursor-pointer">
                <div class="flex max-w-96 bg-indigo-500 text-white rounded-lg p-3 gap-3">
                  <p>{{$messages->message}} </p>
                </div>
                <div class="w-9 h-9 rounded-full flex items-center justify-center ml-2">
                  <img src="https://placehold.co/200x/b7a8ff/ffffff.svg?text=ʕ•́ᴥ•̀ʔ&font=Lato" alt="My Avatar" class="w-8 h-8 rounded-full">
                </div>
              </div>
            {{-- @else --}}
              <div class="flex mb-4 cursor-pointer">
                <div class="w-9 h-9 rounded-full flex items-center justify-center mr-2">
                    <img src="https://placehold.co/200x/ffa8e4/ffffff.svg?text=ʕ•́ᴥ•̀ʔ&font=Lato" alt="User Avatar" class="w-8 h-8 rounded-full">
                </div>
                <div class="flex max-w-96 bg-white rounded-lg p-3 gap-3">
                    <p class="text-gray-700">{{$messages->message}}</p>
                </div>
              </div>
            {{-- @endif --}}
            
           
        @endforeach
       
       
       
       
    </div>
    
    <!-- Chat Input -->
    <form method="POST" class="bg-white border-t border-gray-300 p-4 absolute bottom-0 w-3/4">
       @csrf
        <div class="flex items-center">
            <input type="text" name="message" placeholder="Type a message..." class="w-full p-2 rounded-md border border-gray-400 focus:outline-none focus:border-blue-500">
            <button class="bg-indigo-500 text-white px-4 py-2 rounded-md ml-2">Send</button>
        </div>
    </form>
</div>
<script>
  // Se connecter au serveur WebSocket
const socket = new WebSocket('ws://localhost:3030'); 
// Remplacez l'URL par l'adresse de votre serveur WebSocket

// Écouter les événements de message
socket.onmessage = function(event) {
    const data = JSON.parse(event.data);
    
    // Vérifier si c'est un événement pour un nouveau message
    if (data.event === 'NewMessageEvent') {
        const newMessage = data.data.message;
        
        // Mettre à jour l'interface utilisateur pour afficher le nouveau message
        const messageContainer = document.getElementById('message-container');
        const newMessageElement = document.createElement('div');
        newMessageElement.textContent = newMessage;
        messageContainer.appendChild(newMessageElement);
    }
};

// Gestion des erreurs
socket.onerror = function(error) {
    console.error('Erreur WebSocket : ', error);
};

// Gestion de la fermeture de la connexion
socket.onclose = function(event) {
    console.log('Connexion WebSocket fermée');
};

</script>