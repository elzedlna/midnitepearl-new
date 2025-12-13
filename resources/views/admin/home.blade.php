<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Midnite Pearl - Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body class="bg-gray-50">
    <!-- Mobile Menu Button -->
    {{-- what is this? --}}
    {{-- <button id="mobileMenuBtn" class="lg:hidden fixed top-4 left-4 z-50 p-2 bg-white rounded-lg shadow-lg">
        <i class="fas fa-bars text-gray-600 text-xl"></i>
    </button> --}}

    <!-- Mobile Overlay -->
    {{-- what? --}}
    {{-- <div id="mobileOverlay" class="lg:hidden hidden fixed inset-0 bg-black bg-opacity-50 z-40"></div> --}}

    <div class="flex h-screen">
        <x-admin-sidebar/>

        <!-- Main Content -->
        <main class="flex-1 overflow-y-auto w-full lg:w-auto">
            <!-- Header -->
            <header class="bg-teal-400 shadow-sm sticky top-0 z-30">
                <div class="flex items-center justify-between px-4 lg:px-8 py-4">
                    <div class="relative flex-1 max-w-md">
                        <i class="fas fa-search absolute left-3 top-3 text-gray-600"></i>
                        <input 
                            type="text" 
                            placeholder="Search product, supplier, order" 
                            class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-500 text-sm"
                        />
                    </div>
                    <div class="flex items-center space-x-2 lg:space-x-4 ml-4">
                        <button class="text-gray-600 hover:text-gray-800">
                            <i class="far fa-bell text-lg lg:text-xl"></i>
                        </button>
                        <div class="w-8 h-8 lg:w-10 lg:h-10 bg-gray-300 rounded-full overflow-hidden">
                            <img src="https://via.placeholder.com/40" alt="User" class="w-full h-full object-cover">
                        </div>
                    </div>
                </div>
            </header>

            {{-- content --}}
            <div class="py-4 px-8 space-y-4">
                {{-- sales overview --}}
                <div class="sales-overview">
                    <p class="font-semibold pb-2">Sales Overview</p>
                    <div class="flex items-center bg-white py-4 px-6 border border-gray-200 ">

                        <div class="flex-1 space-y-2 border-r border-gray-200 pr-4">
                            <div class="flex items-center gap-2 text-gray-500">
                                <i class="fa-solid fa-money-bill"></i>
                                <p class="text-sm">What is this</p>
                            </div>
                            <div class="flex items-end gap-2">
                                <p class="text-xl font-bold">6999</p>
                                <div class="flex items-center gap-1 text-xs">
                                    <div class="flex items-center gap-1 text-red-700">
                                        <i class="fa-solid fa-arrow-trend-down"></i>
                                        <p>16%</p>
                                    </div>
                                    <p class="">Last 6 days</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex-1 space-y-2 border-r border-gray-200 px-4">
                            <div class="flex items-center gap-2 text-gray-500">
                                <i class="fa-solid fa-money-bill"></i>
                                <p class="text-sm">What is this</p>
                            </div>
                            <p class="text-xl font-bold">6999</p>
                        </div>
                        <div class="flex-1 space-y-2 border-r border-gray-200 px-4">
                            <div class="flex items-center gap-2 text-gray-500">
                                <i class="fa-solid fa-money-bill"></i>
                                <p class="text-sm">What is this</p>
                            </div>
                            <p class="text-xl font-bold">6999</p>
                        </div>
                        <div class="flex-1 space-y-2 pl-4">
                            <div class="flex items-center gap-2 text-gray-500">
                                <i class="fa-solid fa-money-bill"></i>
                                <p class="text-sm">What is this</p>
                            </div>
                            <p class="text-xl font-bold">6999</p>
                        </div>
                    </div>
                </div>

                {{-- purchase overview --}}
                <div class="purchase overview">
                    <p class="font-semibold pb-2">Purchase Overview</p>
                    <div class="flex items-center bg-white py-4 px-6 border border-gray-200">
                        <div class="flex-1 space-y-2 border-r border-gray-200 pr-4">
                            <div class="flex items-center gap-2 text-gray-500">
                                <i class="fa-solid fa-money-bill"></i>
                                <p class="text-sm">What is this</p>
                            </div>
                            <div class="flex items-end gap-2">
                                <p class="text-xl font-bold">6999</p>
                                <div class="flex items-center gap-1 text-xs">
                                    <div class="flex items-center gap-1 text-green-700">
                                        <i class="fa-solid fa-arrow-trend-up"></i>
                                        <p>16%</p>
                                    </div>
                                    <p class="">Last 6 days</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex-1 space-y-2 border-r border-gray-200 px-4">
                            <div class="flex items-center gap-2 text-gray-500">
                                <i class="fa-solid fa-money-bill"></i>
                                <p class="text-sm">What is this</p>
                            </div>
                            <p class="text-xl font-bold">6999</p>
                        </div>
                        <div class="flex-1 space-y-2 border-r border-gray-200 px-4">
                            <div class="flex items-center gap-2 text-gray-500">
                                <i class="fa-solid fa-money-bill"></i>
                                <p class="text-sm">What is this</p>
                            </div>
                            <p class="text-xl font-bold">6999</p>
                        </div>
                        <div class="flex-1 space-y-2 pl-4">
                            <div class="flex items-center gap-2 text-gray-500">
                                <i class="fa-solid fa-money-bill"></i>
                                <p class="text-sm">What is this</p>
                            </div>
                            <p class="text-xl font-bold">6999</p>
                        </div>
                    </div>
                </div>

                {{-- inventory summary --}}
                <div>

                </div>

                {{-- recent orders table --}}
                <div>
                    @livewire('recent-orders-table')
                </div>
            </div>
        </main>
    </div>

    <script>
        // Mobile menu toggle
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const sidebar = document.getElementById('sidebar');
        const mobileOverlay = document.getElementById('mobileOverlay');

        mobileMenuBtn.addEventListener('click', () => {
            sidebar.classList.toggle('-translate-x-full');
            mobileOverlay.classList.toggle('hidden');
        });

        mobileOverlay.addEventListener('click', () => {
            sidebar.classList.add('-translate-x-full');
            mobileOverlay.classList.add('hidden');
        });
    </script>
</body>
</html>