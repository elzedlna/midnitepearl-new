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
    <button id="mobileMenuBtn" class="lg:hidden fixed top-4 left-4 z-50 p-2 bg-white rounded-lg shadow-lg">
        <i class="fas fa-bars text-gray-600 text-xl"></i>
    </button>

    <!-- Mobile Overlay -->
    <div id="mobileOverlay" class="lg:hidden hidden fixed inset-0 bg-black bg-opacity-50 z-40"></div>

    <div class="flex h-screen">
        <!-- Sidebar -->
        <aside id="sidebar" class="w-64 bg-white border-r border-gray-200 fixed lg:static h-full z-40 transform -translate-x-full lg:translate-x-0 transition-transform duration-300 ease-in-out">
            <div class="p-6">
                <h1 class="text-xl font-bold text-gray-800">Midnite Pearl</h1>
            </div>
            
            <nav class="mt-6">
                <a href="#" class="flex items-center px-6 py-3 text-teal-600 bg-teal-50 border-r-4 border-teal-600">
                    <i class="fas fa-th-large w-5 mr-3"></i>
                    <span class="font-medium">Dashboard</span>
                </a>
                <a href="#" class="flex items-center px-6 py-3 text-gray-600 hover:bg-gray-50">
                    <i class="fas fa-box w-5 mr-3"></i>
                    <span>Inventory</span>
                </a>
                <a href="#" class="flex items-center px-6 py-3 text-gray-600 hover:bg-gray-50">
                    <i class="fas fa-dolly w-5 mr-3"></i>
                    <span>Suppliers</span>
                </a>
                <a href="#" class="flex items-center px-6 py-3 text-gray-600 hover:bg-gray-50">
                    <i class="fas fa-shopping-cart w-5 mr-3"></i>
                    <span>Orders</span>
                </a>
            </nav>

            <div class="absolute bottom-0 w-64 border-t border-gray-200">
                <a href="#" class="flex items-center px-6 py-3 text-gray-600 hover:bg-gray-50">
                    <i class="fas fa-cog w-5 mr-3"></i>
                    <span>Settings</span>
                </a>
                <form method="POST" action="{{ route('admin.logout') }}">
                    @csrf
                    <button type="submit" class="w-full text-left flex items-center px-6 py-3 text-gray-600 hover:bg-gray-50">
                        <i class="fas fa-sign-out-alt w-5 mr-3"></i>
                        <span>Log Out</span>
                    </button>
                </form>
            </div>
        </aside>

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

            <!-- Dashboard Content -->
            <div class="p-4 lg:p-8">
                <!-- Top Stats Row -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 lg:gap-8 mb-4 lg:mb-8">
                    <!-- Sales Overview -->
                    <div>
                        <h2 class="text-base lg:text-lg font-semibold text-gray-800 mb-4">Sales Overview</h2>
                        <div class="grid grid-cols-2 lg:grid-cols-4 gap-3 lg:gap-4">
                            <div class="bg-white p-3 lg:p-4 rounded-lg shadow-sm">
                                <div class="w-10 h-10 lg:w-12 lg:h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-2">
                                    <i class="fas fa-shopping-bag text-blue-600 text-lg lg:text-xl"></i>
                                </div>
                                <div class="text-xl lg:text-2xl font-bold text-gray-800">RM420.00</div>
                                <div class="text-xs lg:text-sm text-green-600 flex items-center mt-1">
                                    <i class="fas fa-arrow-up mr-1"></i>
                                    <span>+10</span>
                                </div>
                            </div>

                            <div class="bg-white p-3 lg:p-4 rounded-lg shadow-sm">
                                <div class="w-10 h-10 lg:w-12 lg:h-12 bg-purple-100 rounded-lg flex items-center justify-center mb-2">
                                    <i class="fas fa-calendar text-purple-600 text-lg lg:text-xl"></i>
                                </div>
                                <div class="text-xl lg:text-2xl font-bold text-gray-800">RM420.00</div>
                                <div class="text-xs lg:text-sm text-red-600 flex items-center mt-1">
                                    <i class="fas fa-arrow-down mr-1"></i>
                                    <span>+83</span>
                                </div>
                            </div>

                            <div class="bg-white p-3 lg:p-4 rounded-lg shadow-sm">
                                <div class="w-10 h-10 lg:w-12 lg:h-12 bg-orange-100 rounded-lg flex items-center justify-center mb-2">
                                    <i class="fas fa-chart-line text-orange-600 text-lg lg:text-xl"></i>
                                </div>
                                <div class="text-xl lg:text-2xl font-bold text-gray-800">RM20.00</div>
                                <div class="text-xs lg:text-sm text-red-600 flex items-center mt-1">
                                    <i class="fas fa-arrow-down mr-1"></i>
                                    <span>+50</span>
                                </div>
                            </div>

                            <div class="bg-white p-3 lg:p-4 rounded-lg shadow-sm">
                                <div class="w-10 h-10 lg:w-12 lg:h-12 bg-green-100 rounded-lg flex items-center justify-center mb-2">
                                    <i class="fas fa-dollar-sign text-green-600 text-lg lg:text-xl"></i>
                                </div>
                                <div class="text-xl lg:text-2xl font-bold text-gray-800">RM420.00</div>
                                <div class="text-xs lg:text-sm text-gray-600">Cost</div>
                            </div>
                        </div>
                    </div>

                    <!-- Inventory Summary -->
                    <div>
                        <h2 class="text-base lg:text-lg font-semibold text-gray-800 mb-4">Inventory Summary</h2>
                        <div class="grid grid-cols-2 gap-3 lg:gap-4">
                            <div class="bg-white p-3 lg:p-4 rounded-lg shadow-sm">
                                <div class="w-10 h-10 lg:w-12 lg:h-12 bg-orange-100 rounded-lg flex items-center justify-center mb-2">
                                    <i class="fas fa-box text-orange-600 text-lg lg:text-xl"></i>
                                </div>
                                <div class="text-xl lg:text-2xl font-bold text-gray-800">200</div>
                                <div class="text-xs lg:text-sm text-gray-600">Quantity in Hand</div>
                            </div>

                            <div class="bg-white p-3 lg:p-4 rounded-lg shadow-sm">
                                <div class="w-10 h-10 lg:w-12 lg:h-12 bg-purple-100 rounded-lg flex items-center justify-center mb-2">
                                    <i class="fas fa-clock text-purple-600 text-lg lg:text-xl"></i>
                                </div>
                                <div class="text-xl lg:text-2xl font-bold text-gray-800">5</div>
                                <div class="text-xs lg:text-sm text-gray-600">To be received</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Middle Stats Row -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 lg:gap-8 mb-4 lg:mb-8">
                    <!-- Purchase Overview -->
                    <div>
                        <h2 class="text-base lg:text-lg font-semibold text-gray-800 mb-4">Purchase Overview</h2>
                        <div class="grid grid-cols-3 gap-3 lg:gap-4">
                            <div class="bg-white p-3 lg:p-4 rounded-lg shadow-sm">
                                <div class="w-10 h-10 lg:w-12 lg:h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-2">
                                    <i class="fas fa-clipboard-list text-blue-600 text-lg lg:text-xl"></i>
                                </div>
                                <div class="text-xl lg:text-2xl font-bold text-gray-800">10</div>
                                <div class="text-xs lg:text-sm text-gray-600">Pending</div>
                            </div>

                            <div class="bg-white p-3 lg:p-4 rounded-lg shadow-sm">
                                <div class="w-10 h-10 lg:w-12 lg:h-12 bg-green-100 rounded-lg flex items-center justify-center mb-2">
                                    <i class="fas fa-truck text-green-600 text-lg lg:text-xl"></i>
                                </div>
                                <div class="text-xl lg:text-2xl font-bold text-gray-800">20</div>
                                <div class="text-xs lg:text-sm text-gray-600">Shipped</div>
                            </div>

                            <div class="bg-white p-3 lg:p-4 rounded-lg shadow-sm">
                                <div class="w-10 h-10 lg:w-12 lg:h-12 bg-purple-100 rounded-lg flex items-center justify-center mb-2">
                                    <i class="fas fa-check-circle text-purple-600 text-lg lg:text-xl"></i>
                                </div>
                                <div class="text-xl lg:text-2xl font-bold text-gray-800">10</div>
                                <div class="text-xs lg:text-sm text-gray-600">Completed</div>
                            </div>
                        </div>
                    </div>

                    <!-- Product Summary -->
                    <div>
                        <h2 class="text-base lg:text-lg font-semibold text-gray-800 mb-4">Product Summary</h2>
                        <div class="grid grid-cols-2 gap-3 lg:gap-4">
                            <div class="bg-white p-3 lg:p-4 rounded-lg shadow-sm">
                                <div class="w-10 h-10 lg:w-12 lg:h-12 bg-orange-100 rounded-lg flex items-center justify-center mb-2">
                                    <i class="fas fa-exclamation-triangle text-orange-600 text-lg lg:text-xl"></i>
                                </div>
                                <div class="text-xl lg:text-2xl font-bold text-gray-800">2</div>
                                <div class="text-xs lg:text-sm text-gray-600">Low Quantity Items</div>
                            </div>

                            <div class="bg-white p-3 lg:p-4 rounded-lg shadow-sm">
                                <div class="w-10 h-10 lg:w-12 lg:h-12 bg-purple-100 rounded-lg flex items-center justify-center mb-2">
                                    <i class="fas fa-th text-purple-600 text-lg lg:text-xl"></i>
                                </div>
                                <div class="text-xl lg:text-2xl font-bold text-gray-800">5</div>
                                <div class="text-xs lg:text-sm text-gray-600">Number of Categories</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Orders Table -->
                <div class="bg-white rounded-lg shadow-sm overflow-hidden">
                    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between p-4 lg:p-6 border-b border-gray-200 gap-3">
                        <h2 class="text-base lg:text-lg font-semibold text-gray-800">Orders</h2>
                        <button class="px-4 py-2 text-teal-600 border border-teal-600 rounded-lg hover:bg-teal-50 flex items-center justify-center text-sm">
                            <span>Sort By</span>
                            <i class="fas fa-chevron-down ml-2"></i>
                        </button>
                    </div>

                    <!-- Mobile Card View -->
                    <div class="lg:hidden divide-y divide-gray-200">
                        <div class="p-4">
                            <div class="flex justify-between items-start mb-2">
                                <div>
                                    <div class="font-semibold text-gray-900">Isaa</div>
                                    <div class="text-sm text-gray-600">23-09-2025</div>
                                </div>
                                <span class="px-2 py-1 text-xs font-medium text-yellow-700 bg-yellow-100 rounded-full">PENDING</span>
                            </div>
                            <div class="text-sm text-gray-600 mb-2">1, Jalan sekolah U12/26C, Taman Cahaya Alam Sekyen U12, 40170, Shah Alam Selangor</div>
                            <div class="flex justify-between items-center text-sm">
                                <div>
                                    <span class="text-gray-600">Qty:</span> <span class="font-medium">2</span>
                                    <span class="text-gray-600 ml-3">ID:</span> <span class="font-medium">SB-00-01</span>
                                </div>
                                <a href="#" class="text-blue-600 hover:text-blue-800">View Details</a>
                            </div>
                        </div>
                        <div class="p-4">
                            <div class="flex justify-between items-start mb-2">
                                <div>
                                    <div class="font-semibold text-gray-900">Isaa</div>
                                    <div class="text-sm text-gray-600">23-09-2025</div>
                                </div>
                                <span class="px-2 py-1 text-xs font-medium text-yellow-700 bg-yellow-100 rounded-full">PENDING</span>
                            </div>
                            <div class="text-sm text-gray-600 mb-2">1, Jalan sekolah U12/26C, Taman Cahaya Alam Sekyen U12, 40170, Shah Alam Selangor</div>
                            <div class="flex justify-between items-center text-sm">
                                <div>
                                    <span class="text-gray-600">Qty:</span> <span class="font-medium">2</span>
                                    <span class="text-gray-600 ml-3">ID:</span> <span class="font-medium">SB-00-01</span>
                                </div>
                                <a href="#" class="text-blue-600 hover:text-blue-800">View Details</a>
                            </div>
                        </div>
                        <div class="p-4">
                            <div class="flex justify-between items-start mb-2">
                                <div>
                                    <div class="font-semibold text-gray-900">Isaa</div>
                                    <div class="text-sm text-gray-600">23-09-2025</div>
                                </div>
                                <span class="px-2 py-1 text-xs font-medium text-yellow-700 bg-yellow-100 rounded-full">PENDING</span>
                            </div>
                            <div class="text-sm text-gray-600 mb-2">1, Jalan sekolah U12/26C, Taman Cahaya Alam Sekyen U12, 40170, Shah Alam Selangor</div>
                            <div class="flex justify-between items-center text-sm">
                                <div>
                                    <span class="text-gray-600">Qty:</span> <span class="font-medium">2</span>
                                    <span class="text-gray-600 ml-3">ID:</span> <span class="font-medium">SB-00-01</span>
                                </div>
                                <a href="#" class="text-blue-600 hover:text-blue-800">View Details</a>
                            </div>
                        </div>
                    </div>

                    <!-- Desktop Table View -->
                    <div class="hidden lg:block overflow-x-auto">
                        <table class="w-full">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Address</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Quantity</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Order ID</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Shipped</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"></th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Isaa</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">23-09-2025</td>
                                    <td class="px-6 py-4 text-sm text-gray-600">1, Jalan sekolah U12/26C, Taman Cahaya Alam Sekyen U12, 40170, Shah Alam Selangor</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">2</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">SB-00-01</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-3 py-1 text-xs font-medium text-yellow-700 bg-yellow-100 rounded-full">PENDING</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">NO</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm">
                                        <a href="#" class="text-blue-600 hover:text-blue-800">View Details</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Isaa</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">23-09-2025</td>
                                    <td class="px-6 py-4 text-sm text-gray-600">1, Jalan sekolah U12/26C, Taman Cahaya Alam Sekyen U12, 40170, Shah Alam Selangor</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">2</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">SB-00-01</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-3 py-1 text-xs font-medium text-yellow-700 bg-yellow-100 rounded-full">PENDING</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">NO</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm">
                                        <a href="#" class="text-blue-600 hover:text-blue-800">View Details</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Isaa</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">23-09-2025</td>
                                    <td class="px-6 py-4 text-sm text-gray-600">1, Jalan sekolah U12/26C, Taman Cahaya Alam Sekyen U12, 40170, Shah Alam Selangor</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">2</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">SB-00-01</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-3 py-1 text-xs font-medium text-yellow-700 bg-yellow-100 rounded-full">PENDING</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">NO</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm">
                                        <a href="#" class="text-blue-600 hover:text-blue-800">View Details</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
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