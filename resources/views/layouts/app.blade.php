<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @vite('resources/css/app.css')
    <title>@yield('title', 'Awan TV')</title>
    
    <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/png">
    <link href="https://cdn.datatables.net/2.0.8/css/dataTables.tailwindcss.css" rel="stylesheet"> 
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">  
  </head>
  <body id="app">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.10.5/dist/cdn.min.js"></script>
    <div x-data="{ sidebarOpen: false }" class="flex h-screen bg-gray-200">
      <div :class="sidebarOpen ? 'block' : 'hidden'" @click="sidebarOpen = false" class="fixed inset-0 z-20 transition-opacity bg-black opacity-50 lg:hidden"></div>
      {{-- sidebar --}}
      @include('partials.sidebar')
      {{-- sidebar --}}

      <div class="flex flex-col flex-1 overflow-hidden">
        {{-- header --}}
        @include('partials.header')
        {{-- header --}}

        {{-- main content --}}
        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
          @yield('content')
        </main>
        {{-- main content --}}
        
        {{-- footer --}}
        @include('partials.footer')
        {{-- footer --}}
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    {{-- Sweetalert2 --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!--Datatables -->
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.tailwindcss.js"></script>
    <script src="https://cdn.tailwindcss.com/3.4.4"></script>

    {{-- scripts js --}}
    @yield('scripts')
    {{-- scripts js --}}

    <script>
      document.addEventListener('DOMContentLoaded', function() {
          // Get the current path
          const currentPath = window.location.pathname;
          // Split the path into segments and join the first two segments
          const pathSegments = currentPath.split('/').filter(segment => segment !== "");
          const basePath = `/${pathSegments[0]}/${pathSegments[1]}`;

          // Select all sidebar links
          const sidebarLinks = document.querySelectorAll('.sidebar-link');
          
          // Iterate over each link
          sidebarLinks.forEach(link => {
              // Get the data-path attribute
              const linkPath = link.getAttribute('data-path');
              // Check if the link's path matches the base path
              if (linkPath === basePath) {
                  // Add the 'bg-gray-100' class
                  link.classList.remove('text-gray-500');
                  link.classList.add('bg-gray-700');
                  link.classList.add('text-gray-100');
              }
          });
      });
    </script>
  </body>
</html>