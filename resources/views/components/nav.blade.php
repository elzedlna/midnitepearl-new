{{-- resources/views/components/nav.blade.php --}}
@php
  use Illuminate\Support\Facades\Route;
@endphp

<nav class="w-full transparent border-b border-gray-500">
  <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex items-center justify-between h-20">
      {{-- Mobile: hamburger + brand --}}
      <div class="flex items-center md:hidden">
        <button 
          id="mobileMenuBtn" 
          aria-expanded="false" 
          aria-controls="mobileMenu"
          class="p-2 rounded-md hover:bg-gray-100"
        >
          <span class="sr-only">Open menu</span>
          <svg class="h-6 w-6 text-gray-700" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
          </svg>
        </button>
        <a href="{{ url('/') }}" class="ml-3 text-lg font-serif text-gray-800">Midnite Pearl</a>
      </div>

      {{-- Desktop: brand on left --}}
      <div class="hidden md:flex md:items-left md:flex-1">
        <a class="flex items-center flex-shrink-0" href="{{ url('/') }}">
          <span class="sr-only">Home</span>
          <img 
            src="{{ asset('images/midnitepearl-logo.png') }}"
            alt="Home"
            class="w-auto h-6"
          >
        </a>
      </div>

      {{-- Desktop: search and cart --}}
      <div class="flex-1 flex items-center justify-end">
        {{-- Desktop Search --}}
        <div class="hidden md:block flex-shrink-0 w-full max-w-[420px] px-6">
          <form action="{{ Route::has('products.index') ? route('products.index') : url('/products') }}" method="GET">
            <label for="site-search" class="sr-only">Search products</label>
            <div class="relative">
              <span class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35M11 19a8 8 0 100-16 8 8 0 000 16z"/>
                </svg>
              </span>
              <input
                id="site-search"
                name="search"
                type="search"
                value="{{ old('search', request('search')) }}"
                placeholder="Search for products"
                class="block w-full rounded-l border border-gray-700 bg-transparent mt-2 py-2 pl-10 pr-4 text-sm 
                placeholder-gray-400"
              />
            </div>
          </form>
        </div>

        {{-- Cart --}}
        <div class="ml-2">
          <a href="{{ Route::has('cart.index') ? route('cart.index') : url('/cart') }}" class="text-gray-700 hover:text-gray-900 p-2 rounded-md">
            <span class="sr-only">View cart</span>
            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2 6h14l-2-6M10 21a1 1 0 100-2 1 1 0 000 2zM18 21a1 1 0 100-2 1 1 0 000 2z"/>
            </svg>
          </a>
        </div>
      </div>
    </div>
  </div>

  {{-- Mobile menu panel --}}
  <div id="mobileMenu" class="md:hidden hidden border-t border-gray-100">
    <div class="px-4 pt-4 pb-6 space-y-4">
      
      {{-- Mobile Search Bar --}}
      <form action="{{ Route::has('products.index') ? route('products.index') : url('/products') }}" method="GET">
        <label for="mobile-search" class="sr-only">Search products</label>
        <div class="relative">
          <span class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35M11 19a8 8 0 100-16 8 8 0 000 16z"/>
            </svg>
          </span>
          <input
            id="mobile-search"
            name="search"
            type="search"
            value="{{ old('search', request('search')) }}"
            placeholder="Search for products"
            class="block w-full bg-transparent rounded border border-gray-500 py-2 pl-10 pr-4 text-sm placeholder-gray-400"
          />
        </div>
      </form>

      {{-- Navigation Links --}}
      <div class="pt-2 space-y-3">
        <a class="block text-sm font-serif text-gray-800 hover:text-gray-600" href="#">About Us</a>
        <a class="block text-sm font-serif text-gray-800 hover:text-gray-600" href="#">Pearls</a>
        
        {{-- Collections Dropdown (Mobile) --}}
        <div x-data="{ open: false }">
          <button 
            @click="open = !open"
            class="w-full text-left text-sm font-serif text-gray-800 hover:text-gray-600 flex items-center justify-between"
          >
            <span>Collections</span>
            <svg 
              class="w-4 h-4 transition-transform duration-200"
              :class="{ 'rotate-180': open }"
              fill="none" 
              stroke="currentColor" 
              viewBox="0 0 24 24"
            >
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
            </svg>
          </button>
          
          <div 
            x-show="open"
            x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 transform -translate-y-2"
            x-transition:enter-end="opacity-100 transform translate-y-0"
            x-transition:leave="transition ease-in duration-150"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            class="mt-2 ml-4 space-y-2"
          >
            <a href="#" class="block text-sm font-serif text-gray-600 hover:text-gray-800">
              Lombok Ocean Collection
            </a>
            <a href="#" class="block text-sm font-serif text-gray-600 hover:text-gray-800">
              Midnite's Premier Collection
            </a>
          </div>
        </div>

        <a class="block text-sm font-serif text-gray-800 hover:text-gray-600" href="#">Login</a>
      </div>
    </div>
  </div>
</nav>

{{-- Toggle mobile menu --}}
<script>
  (function () {
    const btn = document.getElementById('mobileMenuBtn');
    const menu = document.getElementById('mobileMenu');
    if (!btn || !menu) return;

    btn.addEventListener('click', function () {
      const open = btn.getAttribute('aria-expanded') === 'true';
      btn.setAttribute('aria-expanded', String(!open));
      menu.classList.toggle('hidden');
    });
  })();
</script>