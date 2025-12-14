<footer class="bg-[#FAF7EE] border-t border-gray-300">
    <div class="container mx-auto px-6 py-12 lg:py-16">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 lg:gap-12">
            <!-- Brand Section -->
            <div class="space-y-6 text-left lg:text-center">
                <h2 class="text-2xl font-serif text-gray-900">Midnite Pearl</h2>
                <div class="flex items-center justify-start lg:justify-center gap-4">
                      <a href="#" class="text-gray-900 hover:text-gray-600 transition-colors" aria-label="Instagram">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073z"/>
                            <path d="M12 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                        </svg>
                    </a>
                    <a href="#" class="text-gray-900 hover:text-gray-600 transition-colors" aria-label="TikTok">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M19.59 6.69a4.83 4.83 0 01-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 01-5.2 1.74 2.89 2.89 0 012.31-4.64 2.93 2.93 0 01.88.13V9.4a6.84 6.84 0 00-1-.05A6.33 6.33 0 005 20.1a6.34 6.34 0 0010.86-4.43v-7a8.16 8.16 0 004.77 1.52v-3.4a4.85 4.85 0 01-1-.1z"/>
                        </svg>
                    </a>
                    <a href="#" class="text-gray-900 hover:text-gray-600 transition-colors" aria-label="Email">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- About Us Section -->
            <div class="space-y-6 pr-12 lg:pl-20">
                  <h3 class="text-lg lg:text-xl font-serif text-gray-900">About us</h3>
                <nav class="flex flex-col space-y-3">
                    <a href="#" class="font-sans text-sm text-gray-700 hover:text-gray-900 transition-colors">Our Story</a>
                </nav>
            </div>

            <!-- Customer Care Section -->
            <div class="space-y-6">
                <h3 class="text-lg lg:text-xl font-serif text-gray-900">Customer Care</h3>
                <nav class="flex flex-col space-y-3 ">
                    <a href="#" class="font-sans text-sm text-gray-700 hover:text-gray-900 transition-colors">Online Orders</a>
                    <a href="#" class="font-sans text-sm text-gray-700 hover:text-gray-900 transition-colors">Shipping</a>
                    <a href="#" class="font-sans text-sm text-gray-700 hover:text-gray-900 transition-colors">Exchange & Returns</a>
                    <a href="#" class="font-sans text-sm text-gray-700 hover:text-gray-900 transition-colors">FAQ</a>
                </nav>
            </div>

            <!-- Newsletter Section -->
            <div class="space-y-3">
                <h3 class="text-lg lg:text-lg font-serif text-gray-900">Sign Up For The Low Downs</h3>
                <p class="font-sans text-sm lg:text-sm text-gray-700 leading-relaxed">
                    All access to news, previews and perks straight to your inbox.
                </p>
                <form action="#" method="POST" class="space-y-4">
                    @csrf
                    <input 
                        type="email" 
                        name="email" 
                        placeholder="Enter Your Email Address" 
                        class="w-full px-4 py-3 bg-white/50 border-0 text-gray-700 placeholder-gray-400 font-sans text-sm focus:outline-none focus:ring-2 focus:ring-[#7DD3C0] transition-all"
                        required
                    >
                    <div class="flex justify-center">
                        <button 
                            type="submit" 
                            class="w-40 bg-[#7DD3C0] text-white text-sm font-sans py-3 px-6 rounded-full hover:bg-[#6bc2af] transition-colors duration-300"
                        >
                            Subscribe
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Copyright Section -->
    <div class="border-t border-gray-300">
        <div class="container mx-auto px-6 py-6">
            <p class="text-center font-serif text-gray-900">© Midnite Pearl 2025</p>
        </div>
    </div>
</footer>