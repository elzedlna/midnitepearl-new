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

        <style>
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
            
            @livewire('product-list') 

            <section class="grid md:grid-cols-2 mb-16 h-96 md:h-[500px]">
                <!-- Left side - Text content -->
                <div class="bg-[#7DD4CA] p-8 md:p-16 flex items-center rounded-l-lg">
                    <div class="max-w-md">
                        <h2 class="font-serif text-3xl md:text-4xl text-white mb-6" style="font-family: 'Inria Serif', serif;">
                            The Art of Natural Elegance
                        </h2>
                        <p class="text-white leading-relaxed text-sm md:text-base" style="font-family: 'Lato', sans-serif;">
                            True beauty doesn't shout—it glows. Each Lombok pearl is chosen for its natural luster, untouched by artificial perfection, bringing you jewelry that feels pure and timeless.
                        </p>
                    </div>
                </div>

                <!-- Right side - Single Combined Image -->
                <div class="overflow-hidden rounded-r-lg">
                    <img 
                        src="{{ asset('images/list-products-image.png') }}"
                        alt="Pearl jewelry"
                        class="w-full h-full object-cover"
                    >
                </div>
            </section>
        </div>
        @include('components.newsletter')
        @include('components.footer')
    </body>
</html>