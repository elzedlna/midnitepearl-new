{{-- resources/views/components/nav.blade.php --}}
@php
  use Illuminate\Support\Facades\Route;
@endphp

<nav class="w-full transparent border-b border-gray-500">
  <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex items-center justify-between h-20">
      {{-- Mobile: hamburger + brand (hamburger shows only on small screens) --}}
      <div class="flex items-center md:hidden">
        <button id="mobileMenuBtn" aria-expanded="false" aria-controls="mobileMenu"
                class="p-2 rounded-md hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-emerald-200">
          <span class="sr-only">Open menu</span>
          
          <!-- hamburger icon -->
          <svg class="h-6 w-6 text-gray-700" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
          </svg>
        </button>

        <a href="{{ url('/') }}" class="ml-3 text-lg font-serif text-gray-800">Midnite Pearl</a>
      </div>

      {{-- Desktop: brand on left (hidden on small) --}}
      <div class="hidden md:flex md:items-left md:flex-1 ">
            <a class="flex items-center flex-shrink-0" href="{{ url('/') }}">
                <span class="sr-only">Home</span>
                <img 
                    src="{{ asset('images/midnitepearl-logo.png') }}"
                    alt="Home"
                    class="w-auto h-6"
                >
            </a>
      </div>

      {{-- Center / Right area: search (shorter) and cart --}}
      <div class="flex-1 flex items-center justify-end">
        {{-- Search - shorter width on desktop (max-w-lg -> max-w-[420px] smaller) --}}
        <div class="hidden md:block flex-shrink-0 w-full max-w-[420px] px-6">
          <form action="{{ Route::has('products.index') ? route('products.index') : url('/products') }}" method="GET">
            <label for="site-search" class="sr-only">Search products</label>
            <div class="relative">
              <span class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35M11 19a8 8 0 100-16 8 8 0 000 16z"/>
                </svg>
              </span>

              <input
                id="site-search"
                name="search"
                type="search"
                value="{{ old('search', request('search')) }}"
                placeholder="Search for products"
                class="block w-full rounded-l border border-gray-500 
                bg-transparent mt-2 py-2 pl-10 pr-4 text-sm placeholder-gray-400 focus:outline-none focus:ring-2 
                focus:ring-emerald-200"
              />
            </div>
          </form>
        </div>

        {{-- Mobile: small inline search icon that links to products page (or to open mobile search view if you add later) --}}
        <div class="md:hidden mr-3">
          <a href="{{ Route::has('products.index') ? route('products.index') : url('/products') }}" class="p-2 rounded-md hover:bg-gray-100">
            <span class="sr-only">Search</span>
            <svg class="h-5 w-5 text-gray-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35M11 19a8 8 0 100-16 8 8 0 000 16z"/>
            </svg>
          </a>
        </div>

        {{-- Cart (small) --}}
        <div class="ml-2">
          <a href="{{ Route::has('cart.index') ? route('cart.index') : url('/cart') }}" class="text-gray-700 hover:text-gray-900 p-2 rounded-md">
            <span class="sr-only">View cart</span>
            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2 6h14l-2-6M10 21a1 1 0 100-2 1 1 0 000 2zM18 21a1 1 0 100-2 1 1 0 000 2z"/>
            </svg>
          </a>
        </div>
      </div>
    </div>
  </div>

  {{-- Mobile menu panel (hidden by default) --}}
  <div id="mobileMenu" class="md:hidden hidden border-t border-gray-100">
    <div class="px-4 pt-4 pb-6 space-y-2">
      {{-- MINI INSTRUCTION: change these links to reflect your site --}}
        <a class="block text-sm  font-serif" href="#">About Us</a>
        <a class="block text-sm  font-serif" href="#">Pearls</a>
        <a class="block text-sm  font-serif" href="#">Best Sellers</a>
        <a class="block text-sm  font-serif" href="#">Contact</a>
    </div>
  </div>
</nav>

{{-- Simple JS to toggle mobile menu. No frameworks. --}}
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
