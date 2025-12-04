<section class="bg-[#f5efe5] py-10">
    <div class="max-w-screen-xl mx-auto px-8 sm:px-6 lg:px-8 py-10">
        <div class="flex flex-col md:flex-row items-center md:items-start justify-between gap-6">

            {{-- Text --}}
            <div class="flex-1 font-serif text-neutral-800">
                <h3 class="text-lg md:text-xl font-semibold mb-2">
                    Join Our Newsletter To Get New Updates On Our Sales, Pearls, Discounts and more
                </h3>
                <p class="text-sm text-neutral-600 max-w-xl">
                    Subscribe for exclusive early access to new drops and member-only offers.
                </p>
            </div>

            {{-- Form / CTA --}}
            <div class="w-full md:w-auto">
                <form action="#" method="POST" class="flex flex-col sm:flex-row items-center gap-3">

                    {{-- Email input --}}
                    <label for="newsletter-email" class="sr-only">Email address</label>
                    <input
                        id="newsletter-email"
                        name="email"
                        type="email"
                        required
                        placeholder="Enter your email"
                        class="w-full sm:w-64 px-4 py-2 border border-gray-200 rounded-md shadow-sm
                               focus:outline-none focus:ring-2 focus:ring-green-200"
                    >

                    {{-- Join button --}}
                    <button
                        type="submit"
                        class="font-sans px-4 py-2 bg-emerald-300 hover:bg-emerald-400
                               text-neutral-900 rounded-md"
                    >
                        Join Today
                    </button>

                    {{-- Contact button --}}
                    <a
                        href="{{ url('/contact') }}"
                        class="inline-block px-4 py-2 border border-gray-200 rounded-md
                               font-sans text-neutral-900 bg-white hover:bg-gray-50"
                    >
                        Contact us
                    </a>

                </form>
            </div>

        </div>
    </div>
</section>
