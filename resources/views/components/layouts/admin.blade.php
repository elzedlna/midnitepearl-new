<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Admin Dashboard' }} - Midnite Pearl</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    @livewireStyles
</head>

<body class="bg-gray-50">
    <div class="flex h-screen">
        <x-admin-sidebar/>

        {{-- main content --}}
        <main class="flex-1 overflow-y-auto w-full lg:w-auto">
            {{-- header --}}
            <header class="bg-teal-400 shadow-sm sticky top-0 z-30">
                <div class="flex items-center justify-between px-4 lg:px-8 py-4">
                    @isset($header)
                        {{ $header }}
                    @else
                        <div class="relative flex-1 max-w-md">
                            <i class="fas fa-search absolute left-3 top-3 text-gray-600"></i>
                            <input
                                type="text"
                                placeholder="Search product, supplier, order"
                                class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-500 text-sm"
                            />
                        </div>
                    @endisset

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

            {{-- the content --}}
            <div class="py-4 px-8 {{ $contentClass ?? '' }}">
                @if(session('success'))
                    <div class="mb-4 p-4 bg-green-100 border border-green-400 text-green-700 rounded">
                        {{ session('success') }}
                    </div>
                @endif

                @if(session('error'))
                    <div class="mb-4 p-4 bg-red-100 border border-red-400 text-red-700 rounded">
                        {{ session('error') }}
                    </div>
                @endif

                {{ $slot }}
            </div>
        </main>
    </div>

    @livewireScripts
</body>
</html>
