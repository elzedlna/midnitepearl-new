<section class="my-10 bg-cream-50 py-12" style="background-color:#fbf6ec;">
    <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8 font-serif">
        {{-- Heading --}}
        <h2 class="text-xl font-semibold tracking-widest text-black mb-6 text-center">All Products</h2>

        {{-- Search, Filter, Sort Bar --}}
        <div class="mb-8 flex flex-col md:flex-row gap-4 items-center justify-between">
            {{-- Search --}}
            <div class="w-full md:w-1/3">
                <input 
                    type="text" 
                    wire:model.live.debounce.300ms="search"
                    placeholder="Search products..." 
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg 
                    focus:outline-none focus:ring-2 focus:ring-gray-400 relative"
                >
            </div>

            {{-- Filter by Category --}}
            <div class="w-full md:w-1/4">
                <select 
                    wire:model.live="category"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg 
                    focus:outline-none focus:ring-2 focus:ring-gray-400 relative"
                >
                    <option value="">All Categories</option>
                    <option value="bracelets">Bracelets</option>
                    <option value="necklaces">Necklaces</option>
                    <option value="rings">Rings</option>
                    <option value="earrings">Earrings</option>
                </select>
            </div>

            {{-- Sort --}}
            <div class="w-full md:w-1/4 relative">
                <select 
                    wire:model.live="sortBy"
                    class="w-full px-4 py-2 border border-gray-300 
                    rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-400 relative z-10"
                >
                    <option value="name">Name</option>
                    <option value="price">Price</option>
                    <option value="created_at">Newest</option>
                </select>
            </div>

            {{-- Sort Direction --}}
            <button 
                wire:click="sortBy('{{ $sortBy }}')"
                class="px-4 py-2 bg-gray-200 rounded-lg hover:bg-gray-300"
            >
                {{ $sortDirection === 'asc' ? '↑' : '↓' }}
            </button>
        </div>

        {{-- Products Grid --}}
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-6 items-start">
            @forelse($products as $product)
                <div class="flex flex-col items-center">
                    <img 
                        src="{{ asset('storage/' . $product->image) }}"
                        alt="{{ $product->name }}"
                        class="w-full h-56 object-cover rounded shadow-sm"
                    >
                    <span class="mt-4 text-sm uppercase tracking-wider text-gray-700">
                        {{ $product->name }}
                    </span>
                    <span class="text-sm text-gray-600">
                        ${{ number_format($product->price, 2) }}
                    </span>
                </div>
            @empty
                <div class="col-span-full text-center py-12 text-gray-500">
                    No products found.
                </div>
            @endforelse
        </div>

        {{-- Pagination --}}
        <div class="mt-8">
            {{ $products->links() }}
        </div>
    </div>
</section>