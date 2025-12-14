<div>
    <section class="py-16 bg-[#FAF7EE]">
        <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
            
            {{-- Heading --}}
            <h2 class="text-xl md:text-2xl font-serif text-[#333] mb-12 text-center">All Products</h2>

           {{-- Search, Filter, Sort Bar --}}
        <div class="mb-12 flex flex-col md:flex-row gap-4 items-center justify-center">
            {{-- Search --}}
            <div class="w-full md:w-64 relative">
                <input 
                    type="text" 
                    wire:model.live.debounce.300ms="search"
                    placeholder="Search" 
                    class="w-full px-5 py-2.5 border border-black bg-transparent
                    focus:outline-none focus:border-gray-600
                    font-sans text-sm placeholder-gray-500"
                >
                <svg class="absolute right-4 top-1/2 -translate-y-1/2 w-4 h-4 text-black pointer-events-none" 
                    fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                    <circle cx="11" cy="11" r="8"></circle>
                    <path d="m21 21-4.35-4.35"></path>
                </svg>
            </div>

            {{-- Filter by Category --}}
            <div class="w-full md:w-64 relative">
                <select 
                    wire:model.live="category"
                    class="w-full px-5 py-2.5 pr-10 border border-black bg-transparent
                    focus:outline-none focus:border-gray-600
                    font-sans text-sm appearance-none cursor-pointer"
                >
                    <option value="">All Categories</option>
                    <option value="bracelets">Bracelets</option>
                    <option value="necklaces">Necklaces</option>
                    <option value="rings">Rings</option>
                    <option value="earrings">Earrings</option>
                </select>
                <svg class="absolute right-4 top-1/2 -translate-y-1/2 w-4 h-4 text-black pointer-events-none" 
                    fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                </svg>
            </div>

            {{-- Sort & Direction Combined --}}
            <div class="w-full md:w-64 flex gap-2">
                <div class="flex-1 relative">
                    <select 
                        wire:model.live="sortBy"
                        class="w-full h-full px-5 py-2.5 pr-10 border border-black bg-transparent
                        focus:outline-none focus:border-gray-600
                        font-sans text-sm appearance-none cursor-pointer"
                    >
                        <option value="name">Sort By</option>
                        <option value="price">Price</option>
                        <option value="created_at">Newest</option>
                    </select>
                    <svg class="absolute right-4 top-1/2 -translate-y-1/2 w-4 h-4 text-black pointer-events-none" 
                        fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </div>

                <button 
                    wire:click="sortBy('{{ $sortBy }}')"
                    class="w-12 h-[42px] flex items-center justify-center bg-transparent border border-black text-black hover:bg-black hover:text-white transition-colors">
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