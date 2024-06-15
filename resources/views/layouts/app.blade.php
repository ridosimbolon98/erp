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
  </head>
  <body>
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

    {{-- scripts js --}}
    @stack('scripts')
    {{-- scripts js --}}
  </body>
</html>