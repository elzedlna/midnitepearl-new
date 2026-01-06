<div>
    {{-- Cart Icon Button --}}
    <div class="relative">
        <button 
            wire:click="toggle"
            class="text-gray-700 hover:text-gray-900 p-2 rounded-md inline-flex items-center relative"
        >
            <span class="sr-only">View cart</span>
            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2 6h14l-2-6M10 21a1 1 0 100-2 1 1 0 000 2zM18 21a1 1 0 100-2 1 1 0 000 2z"/>
            </svg>
            
            {{-- Item Count Badge --}}
            @if(count($items) > 0)
                <span class="absolute -top-1 -right-1 bg-teal-400 text-white text-xs font-bold rounded-full h-5 w-5 flex items-center justify-center">
                    {{ array_sum(array_column($items, 'qty')) }}
                </span>
            @endif
        </button>
    </div>

    {{-- Dark overlay --}}
    @if($open)
        <div
            class="fixed inset-0 bg-black/40 z-40"
            wire:click="toggle"
        ></div>
    @endif

    {{-- Cart drawer --}}
    <div
        class="
            fixed top-0 right-0 h-full bg-white z-50
            transform transition-transform duration-300 ease-in-out
            w-full md:w-1/2
            {{ $open ? 'translate-x-0' : 'translate-x-full' }}
        "
    >
        <div class="h-full flex flex-col p-6">

            {{-- Header --}}
            <div class="flex items-center justify-between mb-6">
                <h2 class="font-serif text-xl">Your Cart</h2>
                <button wire:click="toggle" class="text-lg">✕</button>
            </div>

            {{-- Cart items --}}
            <div class="flex-1 overflow-y-auto space-y-6">
                @forelse($items as $item)
                    <div class="flex gap-4">
                        <img
                            src="{{ asset('storage/' . $item['image']) }}"
                            class="w-20 h-20 object-cover rounded"
                            alt="{{ $item['name'] }}"
                        >

                        <div class="flex-1">
                            <h3 class="font-serif">{{ $item['name'] }}</h3>

                            <div class="flex items-center gap-3 mt-2">
                                <button
                                    wire:click="decrement({{ $item['id'] }})"
                                    class="px-2 border"
                                >
                                    −
                                </button>

                                <span>{{ $item['qty'] }}</span>

                                <button
                                    wire:click="increment({{ $item['id'] }})"
                                    class="px-2 border"
                                >
                                    +
                                </button>
                            </div>
                        </div>

                        <div class="text-right">
                            <p class="font-medium">
                                RM {{ number_format($item['price'], 2) }}
                            </p>

                            <button
                                wire:click="remove({{ $item['id'] }})"
                                class="text-sm text-gray-400 mt-2"
                            >
                                Remove
                            </button>
                        </div>
                    </div>
                @empty
                    <p class="text-center text-gray-400">
                        Your cart is empty.
                    </p>
                @endforelse
            </div>

            {{-- Footer --}}
            <div class="border-t pt-6 mt-6">
                <div class="flex justify-between mb-4">
                    <span class="font-medium">Subtotal</span>
                    <span class="font-medium">
                        RM {{ number_format($this->subtotal, 2) }}
                    </span>
                </div>

                <p class="text-xs text-gray-500 mb-4">
                    Shipping, taxes, and discount codes calculated at checkout.
                </p>

                <button
                    class="w-full bg-teal-400 text-white py-3 rounded-md hover:bg-teal-500 transition"
                >
                    Proceed Checkout
                </button>
            </div>

        </div>
    </div>
</div>