<x-layouts.admin title="Dashboard" contentClass="space-y-4">
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
</x-layouts.admin>