<script src="https://cdn.tailwindcss.com"></script>


<header> <!-- component --> 
<div class="w-full text-gray-700 bg-white dark-mode:text-gray-200 dark-mode:bg-gray-800">
  <div x-data="{ open: false }"
    class="flex flex-col max-w-screen-xl px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
    <div class="p-4 flex flex-row items-center justify-between">
      <a href="{{ route('lukaye.index') }}"
        class="text-lg font-semibold tracking-widest text-gray-900 uppercase rounded-lg dark-mode:text-white focus:outline-none focus:shadow-outline">Luka YE</a>
      <button class="md:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
        <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
          <path x-show="!open" fill-rule="evenodd"
            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
            clip-rule="evenodd"></path>
          <path x-show="open" fill-rule="evenodd"
            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
            clip-rule="evenodd"></path>
        </svg>
      </button>
    </div>
    <nav :class="{'flex': open, 'hidden': !open}"
      class="flex-col flex-grow pb-4 md:pb-0 hidden md:flex md:justify-end md:flex-row">
      <a class="px-4 py-2 mt-2 text-sm font-semibold rounded-lg md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline {{ request()->routeIs('lukaye.index') ? 'bg-gray-300' : '' }}"
        href="{{ route('lukaye.index') }}">Home</a>
      <a class="px-4 py-2 mt-2 text-sm font-semibold  rounded-lg md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline  {{ request()->routeIs('lukaye.signUpName') ? 'bg-gray-300' : '' }}"
        href="{{ route('lukaye.signUpName') }}">Inscription</a>
      <a class="px-4 py-2 mt-2 text-sm font-semibold rounded-lg md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline {{ request()->routeIs('lukaye.listUsersName') ? 'bg-gray-300' : '' }}"
        href="{{ route('lukaye.listUsersName') }}">Users</a>
      <a class="px-4 py-2 mt-2 text-sm font-semibold rounded-lg md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
        href="">Contact</a>
      <a class=" {{ request()->routeIs('lukaye.loginName') ? 'bg-gray-300' : 'bg-gray-900' }} px-4 py-2 mt-2 text-sm font-semibold  text-gray-200 rounded-lg md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline "
        href="{{ route('lukaye.loginName') }}">Login</a>

    </nav>
  </div>
  </div>
  </header>