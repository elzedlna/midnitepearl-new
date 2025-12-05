@include ('components.nav')
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

        <style>bg-[#FAF7EE]
            body { font-family: 'Lato', sans-serif; }
            h1, h2, h3, h4, h5 { font-family: 'Inria Serif', serif; }
        </style>

        <title>Static Page</title>
    </head>

    <body class="bg-[#FAF7EE] min-h-screen">
        <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row">
                <!-- Hide sidebar on mobile, show on desktop -->
                <aside class="hidden md:block w-56 pt-16 space-y-6 text-[#333]">
                    <a class="block text-lg font-serif" href="#">About Us</a>
                    <a class="block text-lg font-serif" href="#">Pearls</a>
                    <a class="block text-lg font-serif" href="#">Best Sellers</a>
                    <a class="block text-lg font-serif" href="#">Contact</a>
                </aside>

                <main class="flex-1 pt-6 md:pt-12 md:pl-10">
                    <div class="max-w-4xl m-auto">
                        <img 
                            src="https://images.unsplash.com/photo-1522335789203-aabd1fc54bc9?auto=format&fit=crop&w=1600&q=80"
                            class="w-full h-96 object-cover rounded-xl"
                            alt="Pearl Jewelry"
                        >
                    </div>
                    
                    <div class="mt-6 px-4 md:px-8">
                        <h2 class="font-serif text-xl md:text-3xl text-[#333]">
                            Born from Lombok's Waters
                        </h2>

                        <p class="font-sans mt-3 text-sm md:text-base text-gray-700 leading-relaxed">
                            Each pearl tells a story of the sea. <br>
                            Hand-harvested from the crystal waters of Lombok, our pearls are nurtured naturally,
                            reflecting the calm beauty of the island and the artistry of its people.
                        </p>
                    </div>
                </main>
            </div>

            <section class="w-full max-w-screen-xl mx-auto mt-16">
                <div class="grid md:grid-cols-[2fr_1fr] mb-4">
                    <div class="h-80 md:h-96 overflow-hidden">
                        <img
                            src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=1400&q=80"
                            alt="Pearl on sand"
                            class="w-full h-full object-cover"
                        />
                    </div>

                    <div class="relative h-80 md:h-96">
                        <img
                            src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=1400&q=80"
                            alt="Water texture"
                            class="w-full h-full object-cover"
                        />

                        <div class="absolute inset-0 flex items-end">
                            <div class="w-full bg-white/70 backdrop-blur-sm p-4 md:p-6">
                                <h3 class="font-serif text-xl md:text-2xl text-[#2d2d2d] leading-tight">
                                    Locally Harvested, Globally Admired
                                </h3>
                                <p class="font-sans mt-3 text-sm md:text-base text-gray-700 leading-relaxed">
                                    Our pearls are cultivated and selected by local artisans in Lombok. Every piece
                                    carries the warmth of their craftsmanship and the serenity of the ocean it came from.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="bg-cream-50 py-12" style="background-color:#fbf6ec;">
                <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8 text-center font-serif">
                    {{-- Heading --}}
                    <h2 class="text-xl font-semibold tracking-widest text-black mb-6">SHOP NOW</h2>

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

            {{-- Hero with overlay (reduced height, responsive) --}}
            <section class="my-10 w-screen-full">
                <div class="relative overflow-hidden rounded-md">
                    {{-- Background image (img + object-cover keeps it responsive & accessible) --}}
                    <img
                        src="{{ asset('images/landing/hero.jpg') }}"    
                        alt="The Art of Natural Elegance"
                        class="w-full h-44 sm:h-56 md:h-72 lg:h-80 object-cover"
                    >

                    {{-- Overlay: centered content --}}
                    <div class="absolute inset-0 flex items-center justify-center pointer-events-none">
                        <div class="max-w-screen-xl mx-auto text-center px-4 sm:px-6 lg:px-8 font-serif text-neutral-900/90">
                            <h2 class="text-base sm:text-lg md:text-xl lg:text-2xl font-semibold mb-3">
                                The Art of Natural Elegance
                            </h2>

                            <p class="text-xs sm:text-sm md:text-base leading-relaxed max-w-xl mx-auto">
                                True beauty doesn't shout — it glows.
                                Each Lombok pearl is chosen for its natural luster, untouched by artificial perfection,
                                bringing you jewellery that feels pure and timeless.
                            </p>
                        </div>
                    </div>

                    {{-- subtle overlay gradient at bottom if you want contrast (optional) --}}
                    <div class="absolute inset-x-0 bottom-0 h-24 bg-gradient-to-t from-white/90 to-transparent pointer-events-none"></div>
                </div>
            </section>
        </div>
        @include('components.newsletter')
        @include('components.footer')
    </body>
       
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
</html>