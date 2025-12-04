{{-- resources/views/components/footer.blade.php --}}
<footer class="bg-[#f5f3e9] text-neutral-800 font-serif">
    <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
        {{-- Main Grid: 6 equal columns on desktop, 2 on mobile --}}
        <div class="flex flex-wrap justify-around gap-y-8 text-center">

            {{-- Column 1: Pearls --}}
            <div class="w-1/2 md:w-auto">
                <h4 class="text-base font-semibold mb-3">Pearls</h4>
                <ul class="text-sm space-y-2">
                    <li><a href="#" class="hover:underline">All products</a></li>
                    <li><a href="#" class="hover:underline">Bracelets</a></li>
                    <li><a href="#" class="hover:underline">Brooches</a></li>
                    <li><a href="#" class="hover:underline">Best Sellers</a></li>
                </ul>
            </div>

            {{-- Column 2: Services --}}
            <div class="w-1/2 md:w-auto">
                <h4 class="text-base font-semibold mb-3">Services</h4>
                <ul class="text-sm space-y-2">
                    <li><a href="#" class="hover:underline">About Us</a></li>
                    <li><a href="#" class="hover:underline">Order Tracking</a></li>
                    <li><a href="#" class="hover:underline">My Account</a></li>
                    <li><a href="#" class="hover:underline">Refund Policy</a></li>
                </ul>
            </div>

            {{-- Column 3: Logo + Brand + Socials --}}
            <div class="w-1/2 md:w-auto flex flex-col items-center">
               

                {{-- Brand Name --}}
                <a class="mb-4 flex items-center flex-shrink-0" href="{{ url('/') }}">
                    <span class="sr-only">Home</span>
                    <img 
                        src="{{ asset('images/midnitepearl-logo.png') }}"
                        alt="Home"
                        class="w-auto h-4"
                    >
                </a>

                {{-- Social icons --}}
                <div class="flex items-center gap-3">
                    {{-- Instagram --}}
                    <a href="#" aria-label="Instagram" class="p-2 border border-gray-300 rounded hover:bg-emerald-50">
                        <svg class="w-5 h-5 text-emerald-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="2" y="2" width="20" height="20" rx="5" ry="5"/>
                            <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/>
                            <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/>
                        </svg>
                    </a>

                    {{-- TikTok --}}
                    <a href="#" aria-label="TikTok" class="p-2 border border-gray-300 rounded hover:bg-emerald-50">
                        <svg class="w-5 h-5 text-emerald-400" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-5.2 1.74 2.89 2.89 0 0 1 2.31-4.64 2.93 2.93 0 0 1 .88.13V9.4a6.84 6.84 0 0 0-1-.05A6.33 6.33 0 0 0 5 20.1a6.34 6.34 0 0 0 10.86-4.43v-7a8.16 8.16 0 0 0 4.77 1.52v-3.4a4.85 4.85 0 0 1-1-.1z"/>
                        </svg>
                    </a>

                    {{-- Email --}}
                    <a href="mailto:hello@example.com" aria-label="Email" class="p-2 border border-gray-300 rounded hover:bg-emerald-50">
                        <svg class="w-5 h-5 text-emerald-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                            <polyline points="22,6 12,13 2,6"/>
                        </svg>
                    </a>
                </div>
            </div>

            {{-- Column 4: Contact Us --}}
            <div class="w-1/2 md:w-auto">
                <h4 class="text-base font-semibold mb-3">Contact Us</h4>
            </div>

            {{-- Column 5: Blog --}}
            <div class="w-1/2 md:w-auto">
                <h4 class="text-base font-semibold mb-3">Blog</h4>
            </div>

            {{-- Column 6: FAQ --}}
            <div class="w-1/2 md:w-auto">
                <h4 class="text-base font-semibold mb-3">FAQ</h4>
            </div>

        </div>

        {{-- BOTTOM ROW --}}
        <div class="mt-8 border-t border-gray-200 pt-6 flex flex-col md:flex-row items-center justify-between gap-4">
            <div class="flex items-center gap-3">
                <button class="text-xs px-3 py-1 border border-gray-300 rounded hover:bg-emerald-50">RM MYR</button>
            </div>

            <div class="text-sm">
                © Midnite Pearl {{ date('Y') }}
            </div>
        </div>
    </div>
</footer>