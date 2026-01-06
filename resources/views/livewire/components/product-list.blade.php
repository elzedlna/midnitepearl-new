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

            {{-- Success Message --}}
            @if(session()->has('cart-message'))
                <div class="mb-6 max-w-md mx-auto">
                    <div class="bg-green-50 border border-green-200 text-green-800 px-4 py-3 rounded-lg text-center">
                        {{ session('cart-message') }}
                    </div>
                </div>
            @endif

            {{-- Products Grid: 3 columns desktop, 2 columns mobile --}}
            <div class="grid grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8 mb-12">
                @forelse($products as $product)
                    <div class="group flex flex-col bg-white rounded-xl overflow-hidden shadow-md 
                       hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                        
                        {{-- Product Image --}}
                        <a href="{{ route('products.show', $product['id']) }}" class="relative w-full pt-[100%] overflow-hidden bg-gray-100">
                            @if(file_exists(public_path('storage/' . $product['image'])))
                                <img 
                                    src="{{ asset('storage/' . $product['image']) }}"
                                    alt="{{ $product['name'] }}"
                                    class="absolute top-0 left-0 w-full h-full object-cover 
                                    group-hover:scale-105 transition-transform duration-300"
                                >
                            @else
                                {{-- Placeholder for demo --}}
                                <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-br from-gray-200 to-gray-300 flex items-center justify-center">
                                    <svg class="w-16 h-16 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                </div>
                            @endif
                        </a>

                        {{-- Product Info --}}
                        <div class="p-5 flex flex-col flex-grow">
                            <a href="{{ route('products.show', $product['id']) }}">
                                <h3 class="font-sans text-base md:text-lg text-[#333] mb-2 line-clamp-2 hover:text-[#7DD4CA] transition-colors">
                                    {{ $product['name'] }}
                                </h3>
                            </a>
                            <p class="font-sans text-lg md:text-xl font-semibold text-[#7DD4CA] mb-4">
                                RM {{ number_format($product['price'], 2) }}
                            </p>

                            {{-- Add to Cart Button --}}
                            <button
                                wire:click="$dispatch('addToCart', {
                                    id: {{ $product['id'] }},
                                    name: '{{ addslashes($product['name']) }}',
                                    price: {{ $product['price'] }},
                                    image: '{{ $product['image'] ?? '' }}'
                                })"
                                class="w-full mt-auto px-4 py-2.5 bg-black text-white font-sans text-sm
                                hover:bg-teal-400 hover:text-black transition-colors duration-300
                                focus:outline-none focus:ring-2 focus:ring-teal-400 focus:ring-offset-2"
                            >
                                Add to Cart
                            </button>
                        </div>
                    </div>
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