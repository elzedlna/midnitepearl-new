<div>
    {{-- CONTENT --}}
    <main class="max-w-screen-xl mx-auto px-6 py-12 grid grid-cols-1 lg:grid-cols-2 gap-12">

        {{-- LEFT IMAGES --}}
        <section>
            <div class="grid grid-cols-2 gap-4">
                @foreach($product['images'] as $image)
                    <div class="square">
                        @if(file_exists(public_path('storage/' . $image)))
                            <img src="{{ asset('storage/' . $image) }}" class="w-full h-full object-cover">
                        @else
                            {{-- Placeholder --}}
                            <div class="w-full h-full bg-gray-200 flex items-center justify-center">
                                <svg class="w-16 h-16 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                            </div>
                        @endif
                    </div>
                @endforeach
            </div>
        </section>

        {{-- RIGHT DETAILS --}}
        <aside class="py-6">

            <h1 class="font-serif text-xl md:text-2xl mb-4">{{ $product['name'] }}</h1>

            <p class="font-sans text-gray-700 mb-6 text-xs md:text-base leading-relaxed">
                {{ $product['description'] }}
            </p>

            <div class="text-xl md:text-xl mb-6">RM {{ number_format($product['price'], 2) }}</div>

            <div class="font-sans text-xs md:text-base text-gray-600 mb-6 space-y-2">
                <p>Details : {{ $product['details'] }}</p>
                <p>Care Instructions : {{ $product['care_instructions'] }}</p>
            </div>

            {{-- Quantity / Wishlist / Cart --}}
            <div class="flex items-center gap-4 mt-6">
                <div class="inline-flex items-center border border-gray-300 rounded">
                    <button wire:click="decreaseQuantity" class="px-4 py-2 text-lg">−</button>
                    <div class="px-6">{{ $quantity }}</div>
                    <button wire:click="increaseQuantity" class="px-4 py-2 text-lg">+</button>
                </div>

                <button class="border border-gray-300 rounded px-4 py-2" type="button">♡</button>

                <button 
                    wire:click="addToCart"
                    class="ml-auto bg-[#4bc9bd] hover:bg-[#38b3a9] text-white px-6 py-3 rounded">
                    Add to cart
                </button>
            </div>

            @if(session()->has('message'))
                <div class="mt-4 text-sm text-green-700">{{ session('message') }}</div>
            @endif
        </aside>
    </main>
</div>
