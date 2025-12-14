<!-- Sidebar -->
        <aside id="sidebar" class="w-64 bg-white border-r border-gray-200 fixed lg:static h-full z-40 transform -translate-x-full lg:translate-x-0 transition-all duration-300 ease-in-out">
            <div class="p-6 flex items-center justify-between">
                <h1 id="sidebar-title" class="text-xl font-bold text-gray-800 transition-opacity duration-300">Midnite Pearl</h1>
                <button id="toggleSidebar" class="text-gray-600 hover:text-teal-600 focus:outline-none hidden lg:block">
                    <i class="fas fa-chevron-left text-lg"></i>
                </button>
            </div>
            
            <nav>
                <a href="{{ route('admin.home') }}" class="flex items-center gap-2 px-6 py-3 {{ request()->routeIs('admin.home') ? 'text-teal-600 bg-teal-50 border-r-4 border-teal-600 font-medium' : 'text-gray-600 hover:bg-gray-50' }}">
                    <i class="fas fa-th-large"></i>
                    <span class="sidebar-text whitespace-nowrap">Dashboard</span>
                </a>
                <a href="{{ route('admin.products.index') }}" class="flex items-center gap-2 px-6 py-3 {{ request()->routeIs('admin.products.*') ? 'text-teal-600 bg-teal-50 border-r-4 border-teal-600 font-medium' : 'text-gray-600 hover:bg-gray-50' }}">
                    <i class="fas fa-box"></i>
                    <span class="sidebar-text whitespace-nowrap">Products</span>
                </a>
                <a href="{{ route('admin.categories.index') }}" class="flex items-center gap-2 px-6 py-3 {{ request()->routeIs('admin.categories.*') ? 'text-teal-600 bg-teal-50 border-r-4 border-teal-600 font-medium' : 'text-gray-600 hover:bg-gray-50' }}">
                    <i class="fas fa-dolly"></i>
                    <span class="sidebar-text whitespace-nowrap">Categories</span>
                </a>
                <a href="{{ route('admin.collections.index') }}" class="flex items-center gap-2 px-6 py-3 {{ request()->routeIs('admin.collections.*') ? 'text-teal-600 bg-teal-50 border-r-4 border-teal-600 font-medium' : 'text-gray-600 hover:bg-gray-50' }}">
                    <i class="fas fa-dolly"></i>
                    <span class="sidebar-text whitespace-nowrap">Collections</span>
                </a>
                <a href="#" class="flex items-center gap-2 px-6 py-3 {{ request()->routeIs('admin.orders.*') ? 'text-teal-600 bg-teal-50 border-r-4 border-teal-600 font-medium' : 'text-gray-600 hover:bg-gray-50' }}">
                    <i class="fas fa-shopping-cart"></i>
                    <span class="sidebar-text whitespace-nowrap">Orders</span>
                </a>
            </nav>

            <div class="absolute bottom-0 w-64 border-t border-gray-200 transition-all duration-300">
                <a href="#" class="flex items-center px-6 py-3 text-gray-600 hover:bg-gray-50">
                    <i class="fas fa-cog w-5"></i>
                    <span class="sidebar-text whitespace-nowrap">Settings</span>
                </a>
                <form method="POST" action="{{ route('admin.logout') }}">
                    @csrf
                    <button type="submit" class="w-full text-left flex items-center px-6 py-3 text-gray-600 hover:bg-gray-50">
                        <i class="fas fa-sign-out-alt w-5"></i>
                        <span class="sidebar-text whitespace-nowrap">Log Out</span>
                    </button>
                </form>
            </div>
        </aside>

        <script>
            document.getElementById('toggleSidebar').addEventListener('click', function() {
                const sidebar = document.getElementById('sidebar');
                const toggleIcon = this.querySelector('i');
                const sidebarTexts = document.querySelectorAll('.sidebar-text');
                const sidebarTitle = document.getElementById('sidebar-title');

                if (sidebar.classList.contains('w-64')) {
                    // collapse
                    sidebar.classList.remove('w-64');
                    sidebar.classList.add('w-16');
                    toggleIcon.classList.remove('fa-chevron-left');
                    toggleIcon.classList.add('fa-chevron-right');
                    sidebarTexts.forEach(text => {
                        text.classList.add('hidden');
                    });
                    sidebarTitle.classList.add('hidden');
                } else {
                    // expand
                    sidebar.classList.remove('w-16');
                    sidebar.classList.add('w-64');
                    toggleIcon.classList.remove('fa-chevron-right');
                    toggleIcon.classList.add('fa-chevron-left');
                    sidebarTexts.forEach(text => {
                        text.classList.remove('hidden');
                    });
                    sidebarTitle.classList.remove('hidden');
                }
            });
        </script>