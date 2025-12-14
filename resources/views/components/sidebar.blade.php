{{-- Sidebar Navigation Component --}}
<aside class="hidden md:block w-56 pt-16 space-y-6 text-[#333]">
    <a class="block text-lg font-serif hover:text-[#555] transition-colors" href="#">About Us</a>
    <a class="block text-lg font-serif hover:text-[#555] transition-colors" href="#">Pearls</a>
    
    {{-- Collections Dropdown --}}
    <div x-data="{ open: false }" class="relative">
        <button 
            @click="open = !open"
            @click.away="open = false"
            class="w-full text-left text-lg font-serif hover:text-[#555] transition-colors flex items-center justify-between group"
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
            class="mt-3 ml-4 space-y-3"
        >
            <a href="#" class="block text-base font-serif text-[#666] hover:text-[#333] transition-colors">
                Lombok Ocean Collection
            </a>
            <a href="#" class="block text-base font-serif text-[#666] hover:text-[#333] transition-colors">
                Midnite's Premier Collection
            </a>
        </div>
    </div>
    <a class="block text-lg font-serif hover:text-[#555] transition-colors" href="#">Login</a>

</aside>