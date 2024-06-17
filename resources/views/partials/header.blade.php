<header class="flex items-center justify-between px-6 py-4 bg-white border-b-4 border-indigo-600">
  <div class="flex items-center">
      <button @click="sidebarOpen = true" class="text-gray-500 focus:outline-none lg:hidden">
          <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M4 6H20M4 12H20M4 18H11" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round"></path>
          </svg>
      </button>
  </div>

  <div class="flex items-center">
      <div x-data="{ dropdownOpen: false }" class="relative">
            <div class="flex items-center justify-end gap-2">
                <h3 class="text-md text-gray-700 font-semibold">{{ Auth::user()->name }}</h3>
                <button @click="dropdownOpen = ! dropdownOpen"
                    class="relative block w-8 h-8 overflow-hidden rounded-full shadow focus:outline-none">
                    <img class="object-cover w-full h-full"
                        src="https://images.unsplash.com/photo-1528892952291-009c663ce843?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=296&amp;q=80"
                        alt="Your avatar">
                </button>
            </div>

            <div x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 z-10 w-full h-full"
                style="display: none;"></div>

            <div x-show="dropdownOpen"
                class="absolute right-0 z-10 w-48 mt-2 overflow-hidden bg-white rounded-md shadow-xl"
                style="display: none;">
                <a href="{{ route('admin.profile') }}"
                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white">Profile</a>
                <a href="{{ route('logout') }}"
                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white">Logout</a>
            </div>
      </div>
  </div>
</header>