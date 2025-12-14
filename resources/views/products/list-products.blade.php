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

    <body class="bg-[#FFFCF1] min-h-screen">
        <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row">
                <x-sidebar />
                <main class="flex-1 pt-6 md:pt-12 md:pl-10">
                    <div class="max-w-4xl m-auto">
                        <img 
                            src="https://images.unsplash.com/photo-1522335789203-aabd1fc54bc9?auto=format&fit=crop&w=1600&q=80"
                            class="w-full h-96 object-cover rounded-xl"
                            alt="Pearl Jewelry"
                        >
                    </div>

                   
                </main>
            </div>

            <div class="py-16">
                @livewire('product-list')
            </div>
        </div>
        
            <section class="max-w-screen-full grid md:grid-cols-2 h-96 md:h-[500px]">
                <!-- Left side - Text content -->
                <div class="bg-[#7DD4CA] p-8 md:p-16 flex items-center">
                    <div class="max-w-md">
                        <h2 class="font-serif text-xl md:text-2xl text-white mb-6">
                            The Art of Natural Elegance
                        </h2>
                        <p class="text-white font-sans text-xs md:text-base">
                            True beauty doesn't shout—it glows. Each Lombok pearl is chosen for its natural luster, untouched by artificial perfection, bringing you jewelry that feels pure and timeless.
                        </p>
                    </div>
                </div>

                <!-- Right side - Single Combined Image -->
                <div class="overflow-hidden">
                    <img 
                        src="{{ asset('images/list-products-grid.jpg') }}"
                        alt="Pearl jewelry"
                        class="w-full h-full object-cover"
                    >
                </div>
            </section>
        @include('components.footer')
    </body>
</html>