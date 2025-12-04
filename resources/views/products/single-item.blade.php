@include('components.nav-item')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&family=Inria+Serif:wght@300;400;700&display=swap" rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <style>
        body { font-family: 'Lato', sans-serif; background: #FAF7EE; }
        h1, h2, h3, h4, h5 { font-family: 'Inria Serif', serif; }
        .square { aspect-ratio: 1/1; overflow: hidden; border-radius: 4px; }
    </style>

    <title>Static Page</title>
</head>

<body>

    {{-- CONTENT --}}
    <main class="max-w-screen-xl mx-auto px-6 py-12 grid grid-cols-1 lg:grid-cols-2 gap-12">

        {{-- LEFT IMAGES --}}
        <section>
            <div class="grid grid-cols-2 gap-4">
                <div class="square"><img src="https://i.imgur.com/0D2QZfH.jpg" class="w-full h-full object-cover"></div>
                <div class="square"><img src="https://i.imgur.com/8KqN4bM.jpg" class="w-full h-full object-cover"></div>
                <div class="square"><img src="https://i.imgur.com/1R7XQ0b.jpg" class="w-full h-full object-cover"></div>
                <div class="square"><img src="https://i.imgur.com/qB6b7sF.jpg" class="w-full h-full object-cover"></div>
            </div>
        </section>

        {{-- RIGHT DETAILS --}}
        <aside class="py-6">

            <h1 class="text-4xl mb-4">Sangria Brooch</h1>

            <p class="text-gray-700 mb-6 leading-relaxed">
                Amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi.
            </p>

            <div class="text-2xl mb-6">RM 42.99</div>

            <div class="text-sm text-gray-600 mb-6 space-y-2">
                <p>Details : Pearl, Silver sterling, diamonds</p>
                <p>Care Instructions : Store in a dry cool place, avoid harsh substance such as perfumes, liquid and water</p>
            </div>

            {{-- Quantity / Wishlist / Cart --}}
            <div class="flex items-center gap-4 mt-6">
                <div class="inline-flex items-center border border-gray-300 rounded">
                    <button id="dec" class="px-4 py-2 text-lg">−</button>
                    <div id="qty" class="px-6">1</div>
                    <button id="inc" class="px-4 py-2 text-lg">+</button>
                </div>

                <button id="wish" class="border border-gray-300 rounded px-4 py-2" type="button">♡</button>

                <button id="add" class="ml-auto bg-[#4bc9bd] hover:bg-[#38b3a9] text-white px-6 py-3 rounded">
                    Add to cart
                </button>
            </div>

            <div id="msg" class="mt-4 text-sm text-green-700 hidden"></div>
        </aside>
    </main>

    {{-- FOOTER PROMO --}}
    <section class="bg-[#6fd1c6] text-white py-12">
        <div class="max-w-screen-xl mx-auto px-6 grid grid-cols-1 md:grid-cols-3 gap-6 text-center">

            <div>
                <h3 class="font-serif text-xl">Satisfaction Guaranteed</h3>
                <p class="px-10 text-sm mt-2">Our 100-Day guarantee means if you're not happy we refund or replace your order.</p>
            </div>

            <div>
                <h3 class="font-serif text-xl">Handmade To Order</h3>
                <p class="px-10 text-sm mt-2">Every single product is made to order by one of our highly skilled team.</p>
            </div>

            <div>
                <h3 class="font-serif text-xl">Committed To Sustainability</h3>
                <p class="px-10 text-sm mt-2">We are completely committed to reducing our environmental footprint.</p>
            </div>

        </div>
    </section>

    <section class="mx-10 bg-cream-50 py-12" style="background-color:#fbf6ec;">
        <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8 text-center font-serif">
            {{-- Heading --}}
                <h2 class="text-xl font-semibold text-black mb-6">Related Products</h2>

            {{-- Images grid --}}
                <div class="mt-4 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 items-start">
                    {{-- Item 1 --}}
                    <div class="flex flex-col items-center">
                        <img src="{{ asset('images/landing/bracelet.jpg') }}"
                            alt="Bracelet"
                            class="w-full h-56 object-cover rounded shadow-sm">
                            <span class="mt-4 text-sm uppercase tracking-wider text-gray-700">Bracelets</span>
                    </div>

                    {{-- Item 2 --}}
                    <div class="flex flex-col items-center">
                        <img src="{{ asset('images/landing/necklace.jpg') }}"
                            alt="Necklace"
                            class="w-full h-56 object-cover rounded shadow-sm">
                        <span class="mt-4 text-sm uppercase tracking-wider text-gray-700">Necklaces</span>
                    </div>

                    {{-- Item 3 --}}
                        <div class="flex flex-col items-center">
                            <img src="{{ asset('images/landing/ring.jpg') }}"
                                alt="Ring"
                                class="w-full h-56 object-cover rounded shadow-sm">
                            <span class="mt-4 text-sm uppercase tracking-wider text-gray-700">Rings</span>
                        </div>

                        {{-- Item 4 --}}
                        <div class="flex flex-col items-center">
                            <img src="{{ asset('images/landing/earrings.jpg') }}"
                                alt="Earrings"
                                class="w-full h-56 object-cover rounded shadow-sm">
                            <span class="mt-4 text-sm uppercase tracking-wider text-gray-700">Earrings</span>
                        </div>
                    </div>

                    <div class="mt-10">
                        <a href="/list-products" class="text-sm underline text-black hover:text-gray-700">
                            View All
                        </a>
                    </div>
                </div>
            </section>

    {{-- JS --}}
    <script>
        let qty = 1;
        const qtyEl = document.getElementById('qty');

        document.getElementById('inc').onclick = () => { qty++; qtyEl.textContent = qty };
        document.getElementById('dec').onclick = () => { if (qty > 1) { qty--; qtyEl.textContent = qty } };

        document.getElementById('add').onclick = () => {
            const msg = document.getElementById('msg');
            msg.textContent = 'Added ' + qty + ' item(s) to cart';
            msg.classList.remove('hidden');
            setTimeout(() => msg.classList.add('hidden'), 2000);
        };

        document.getElementById('wish').onclick = () => {
            const msg = document.getElementById('msg');
            msg.textContent = 'Added to wishlist';
            msg.classList.remove('hidden');
            setTimeout(() => msg.classList.add('hidden'), 1500);
        };
    </script>
        @include('components.newsletter')
        @include('components.footer')
</body>
</html>
