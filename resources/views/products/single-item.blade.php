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

            {{-- Carousel (Alpine + Tailwind) --}}
            <section class="mt-10 py-10">
                {{-- Heading --}}
                <h2 class="text-xl font-bold tracking-widest text-black text-center mb-6">Our Collections</h2>
                <div x-data="carousel()" x-init="init()" x-on:mouseenter="pause()" x-on:mouseleave="play()" class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="relative overflow-hidden rounded-lg">
                        {{-- Slides wrapper (flex, will be translated) --}}
                        <div
                            class="flex transition-transform duration-700 ease-in-out"
                            :style="`transform: translateX(-${current * (100 / slides.length)}%); width: calc(${slides.length} * 100%);`"
                        >
                            <template x-for="(slide, i) in slides" :key="i">
                                <div class="relative" :style="`width: 100%;`">
                                    <img :src="slide.src" :alt="slide.title" class="w-full h-56 sm:h-72 md:h-96 object-cover">
                                    {{-- overlay --}}
                                    <div class="absolute inset-0 flex items-end">
                                        <div class="w-full bg-gradient-to-t from-black/50 to-transparent p-4 sm:p-6 md:p-8">
                                            <div class="max-w-xl text-left text-white font-serif">
                                                <h3 class="text-lg sm:text-xl md:text-2xl font-semibold" x-text="slide.title"></h3>
                                                <p class="mt-2 text-sm sm:text-base" x-text="slide.subtitle"></p>
                                                <a :href="slide.href" class="inline-block mt-4 bg-white text-gray-900 px-4 py-2 rounded shadow-sm text-sm">Shop now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </template>
                        </div>

                        {{-- Prev / Next controls --}}
                        <button @click="prev()" class="absolute left-3 top-1/2 -translate-y-1/2 bg-white/90 hover:bg-white/100 rounded-full p-2 shadow hidden sm:inline-flex">
                            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
                        </button>
                        <button @click="next()" class="absolute right-3 top-1/2 -translate-y-1/2 bg-white/90 hover:bg-white/100 rounded-full p-2 shadow hidden sm:inline-flex">
                            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                        </button>

                        {{-- Indicators --}}
                        <div class="absolute bottom-3 left-1/2 -translate-x-1/2 flex space-x-2">
                            <template x-for="(slide, i) in Math.ceil(slides.length / slidesToShow)" :key="i">
                                <button
                                    @click="goTo(i)"
                                    :class="{'bg-white': Math.floor(current / slidesToShow) === i, 'bg-white/50': Math.floor(current / slidesToShow) !== i }"
                                    class="w-8 h-1 rounded-full transition-colors"
                                ></button>
                            </template>
                        </div>
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

    <script>
        function carousel(){
            return {
                slidesToShow: 1,            
                current: 0,
                slides: [
                    { src: '{{ asset("images/landing/carousel1.jpg") }}', title: 'Title One', subtitle: 'Short description one', href: '#' },
                    { src: '{{ asset("images/landing/carousel2.jpg") }}', title: 'Title Two', subtitle: 'Short description two', href: '#' },
                ],
                timer: null,
                init(){
                    const update = () => {
                        const w = window.innerWidth;
                        this.slidesToShow = 1; 
                    };
                    update();
                    window.addEventListener('resize', update);
                    this.play();
                },
                play(){
                    this.pause();
                    this.timer = setInterval(()=>{ this.next() }, 4000);
                },
                pause(){
                    if(this.timer) { clearInterval(this.timer); this.timer = null; }
                },
                prev(){
                    this.current = (this.current - 1 + this.slides.length) % this.slides.length;
                },
                next(){
                    this.current = (this.current + 1) % this.slides.length;
                },
                goTo(index){
                    this.current = index * (this.slidesToShow);
                }
            }
        }
    </script>
        @include('components.newsletter')
        @include('components.footer')
</body>
</html>
