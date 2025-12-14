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

      {{-- Center / Right area: MENU (replaces search) and cart --}}
      <div class="flex-1 flex items-center justify-end">
        {{-- Desktop: menu links (replace search) --}}
        <div class="hidden md:flex md:items-center md:justify-center md:space-x-6 font-serif text-sm text-gray-700 px-6">
          <a href="#" class="hover:opacity-70">All Products</a>
          <a href="#" class="hover:opacity-70">Bracelets</a>
          <a href="#" class="hover:opacity-70">Rings</a>
          <a href="#" class="hover:opacity-70">Brooches</a>
          <a href="#" class="hover:opacity-70">Necklaces</a>
        </div>

        {{-- Mobile: hide the center menu; show nothing or small spacer --}}
        <div class="md:hidden mr-3"></div>

        {{-- Cart (small) --}}
        <div class="ml-2">
          <a href="{{ Route::has('cart.index') ? route('cart.index') : url('/cart') }}" class="text-gray-700 hover:text-gray-900 p-2 rounded-md inline-flex items-center">
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
      {{-- Menu links for mobile --}}
      <a class="block text-sm font-serif text-gray-800 px-2 py-2 rounded hover:bg-gray-50" href="#">All Products</a>
      <a class="block text-sm font-serif text-gray-800 px-2 py-2 rounded hover:bg-gray-50" href="#">Bracelets</a>
      <a class="block text-sm font-serif text-gray-800 px-2 py-2 rounded hover:bg-gray-50" href="#">Rings</a>
      <a class="block text-sm font-serif text-gray-800 px-2 py-2 rounded hover:bg-gray-50" href="#">Brooches</a>
      <a class="block text-sm font-serif text-gray-800 px-2 py-2 rounded hover:bg-gray-50" href="#">Necklaces</a>

      {{-- mobile bottom row: currency + cart --}}
      <div class="mt-4 border-t border-gray-100 pt-4 flex items-center justify-between">
        <div class="text-sm font-serif">RM MYR</div>
        <a href="{{ Route::has('cart.index') ? route('cart.index') : url('/cart') }}" class="inline-flex items-center gap-2 text-sm text-gray-700 hover:opacity-80">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
            <path d="M3 3h2l.4 2M7 13h10l4-8H5.4" stroke-linecap="round" stroke-linejoin="round"/>
            <circle cx="9" cy="20" r="1" />
            <circle cx="20" cy="20" r="1" />
          </svg>
          Cart
        </a>
      </div>
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

    // Optional: auto-close menu when clicking a mobile link
    menu.querySelectorAll('a').forEach(a => {
      a.addEventListener('click', () => {
        menu.classList.add('hidden');
        if (btn) btn.setAttribute('aria-expanded', 'false');
      });
    });
  })();
</script>
