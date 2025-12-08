<div>
    <section class="py-16 bg-[#FAF7EE]">
        <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
            
            {{-- Heading --}}
            <h2 class="text-xl md:text-2xl font-serif text-[#333] mb-12 text-center">All Products</h2>

            {{-- Search, Filter, Sort Bar --}}
            <div class="mb-12 flex flex-col md:flex-row gap-4 items-center">
                {{-- Search --}}
                <div class="w-full md:flex-1 relative">
                    <input 
                        type="text" 
                        wire:model.live.debounce.300ms="search"
                        placeholder="Search..." 
                        class="w-full px-5 py-3 border-2 border-[#7DD4CA] rounded-full 
                        focus:outline-none focus:ring-2 focus:ring-[#7DD4CA] focus:ring-opacity-50
                        font-sans text-base"
                    >
                    <svg class="absolute right-5 top-1/2 -translate-y-1/2 w-5 h-5 text-[#7DD4CA] pointer-events-none" 
                         fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <circle cx="11" cy="11" r="8"></circle>
                        <path d="m21 21-4.35-4.35"></path>
                    </svg>
                </div>

                {{-- Filter by Category --}}
                <div class="w-full md:w-auto">
                    <select 
                        wire:model.live="category"
                        class="w-full px-5 py-3 border-2 border-[#7DD4CA] rounded-lg 
                        focus:outline-none focus:ring-2 focus:ring-[#7DD4CA] focus:ring-opacity-50
                        font-sans text-base bg-white cursor-pointer"
                    >
                        <option value="">All Categories</option>
                        <option value="bracelets">Bracelets</option>
                        <option value="necklaces">Necklaces</option>
                        <option value="rings">Rings</option>
                        <option value="earrings">Earrings</option>
                    </select>
                </div>

                {{-- Sort & Direction Combined --}}
                <div class="w-full md:w-auto flex gap-2">
                    <select 
                        wire:model.live="sortBy"
                        class="flex-1 md:w-auto px-5 py-3 border-2 border-[#7DD4CA] 
                        rounded-lg focus:outline-none focus:ring-2 focus:ring-[#7DD4CA] 
                        focus:ring-opacity-50 font-sans text-base bg-white cursor-pointer"
                    >
                        <option value="name">Sort: Name</option>
                        <option value="price">Sort: Price</option>
                        <option value="created_at">Sort: Newest</option>
                    </select>

                    <button 
                        wire:click="sortBy('{{ $sortBy }}')"
                        class="px-4 py-3 bg-[#7DD4CA] text-white rounded-lg 
                        hover:bg-[#6BC4BA] transition-colors duration-200 font-semibold"
                    >
                        {{ $sortDirection === 'asc' ? '↑' : '↓' }}
                    </button>
                </div>
            </div>

            {{-- Products Grid: 3 columns desktop, 2 columns mobile --}}
            <div class="grid grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8 mb-12">
                @forelse($products as $product)
                    <a href="{{ route('products.show', $product->id) }}" 
                       class="group flex flex-col bg-white rounded-xl overflow-hidden shadow-md 
                       hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                        
                        {{-- Product Image --}}
                        <div class="relative w-full pt-[100%] overflow-hidden bg-gray-100">
                            <img 
                                src="{{ asset('storage/' . $product->image) }}"
                                alt="{{ $product->name }}"
                                class="absolute top-0 left-0 w-full h-full object-cover 
                                group-hover:scale-105 transition-transform duration-300"
                            >
                        </div>

                        {{-- Product Info --}}
                        <div class="p-5 flex flex-col flex-grow">
                            <h3 class="font-sans text-base md:text-lg text-[#333] mb-2 line-clamp-2">
                                {{ $product->name }}
                            </h3>
                            <p class="font-sans text-lg md:text-xl font-semibold text-[#7DD4CA] mt-auto">
                                RM {{ number_format($product->price, 2) }}
                            </p>
                        </div>
                    </a>
                @empty
                    <div class="col-span-full text-center py-16">
                        <svg class="mx-auto h-16 w-16 text-gray-400 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                  d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <p class="text-gray-500 font-sans text-lg">No products found.</p>
                        <p class="text-gray-400 font-sans text-sm mt-2">Try adjusting your search or filters</p>
                    </div>
                @endforelse
            </div>

            {{-- Pagination --}}
            @if($products->hasPages())
            <div class="flex justify-center">
                {{ $products->links() }}
            </div>
            @endif
        </div>
    </section>

    <style>
        /* Custom styling for Livewire pagination */
        nav[role="navigation"] {
            font-family: 'Lato', sans-serif;
        }
        
        nav[role="navigation"] a,
        nav[role="navigation"] span {
            @apply px-4 py-2 rounded-lg;
        }
        
        nav[role="navigation"] a {
            @apply hover:bg-[#7DD4CA] hover:text-white transition-colors;
        }
        
        nav[role="navigation"] span[aria-current="page"] {
            @apply bg-[#7DD4CA] text-white;
        }
    </style>
</div>