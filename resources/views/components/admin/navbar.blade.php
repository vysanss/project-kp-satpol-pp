<!-- Floating Navigation Bar -->
    <nav class="fixed top-4 left-4 right-4 bg-white shadow-xl rounded-xl border border-gray-200 z-50 backdrop-blur-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div class="flex justify-between items-center h-16">
                <!-- Logo/Brand -->
                <div class="flex items-center">
                    <h1 class="text-lg sm:text-xl font-bold text-gray-800">
                        <i class="fas fa-cog mr-2 text-blue-600"></i>
                        <span class="hidden sm:inline">Admin Panel</span>
                        <span class="sm:hidden">Admin</span>
                    </h1>
                </div>
                
                <!-- Navigation Menu - Desktop -->
                <div class="hidden lg:flex items-center space-x-6 xl:space-x-8">
                    <!-- Home -->
                    <a href="{{ route('admin.dashboard') }}" class="flex items-center px-3 py-2 rounded-md text-sm font-medium text-blue-600 bg-blue-50 hover:bg-blue-100 transition">
                        <i class="fas fa-home mr-2"></i>
                        Home
                    </a>
                    
                    <!-- Profil Dropdown -->
                    <div class="relative group">
                        <button class="flex items-center px-3 py-2 rounded-md text-sm font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-100 transition">
                            <i class="fas fa-user mr-2"></i>
                            Profil
                            <i class="fas fa-chevron-down ml-2 text-xs"></i>
                        </button>
                        <div class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg ring-1 ring-black ring-opacity-5 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
                            <div class="py-1">
                                <a href="#" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                    <i class="fas fa-info mr-3 text-blue-500"></i>
                                    Tentang Kami
                                </a>
                                <a href="#" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                    <i class="fas fa-sitemap mr-3 text-green-500"></i>
                                    Struktur Organisasi
                                </a>
                                <a href="#" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                    <i class="fas fa-tasks mr-3 text-purple-500"></i>
                                    Tupoksi
                                </a>
                                <a href="#" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                    <i class="fas fa-handshake mr-3 text-orange-500"></i>
                                    Maklumat Pelayanan
                                </a>
                                <a href="#" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                    <i class="fas fa-user-tie mr-3 text-indigo-500"></i>
                                    Profil Pimpinan
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Informasi Dropdown -->
                    <div class="relative group">
                        <button class="flex items-center px-3 py-2 rounded-md text-sm font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-100 transition">
                            <i class="fas fa-info-circle mr-2"></i>
                            Informasi
                            <i class="fas fa-chevron-down ml-2 text-xs"></i>
                        </button>
                        <div class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg ring-1 ring-black ring-opacity-5 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
                            <div class="py-1">
                                <a href="#" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                    <i class="fas fa-newspaper mr-3 text-blue-500"></i>
                                    Berita
                                </a>
                                <a href="#" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                    <i class="fas fa-edit mr-3 text-green-500"></i>
                                    Artikel
                                </a>
                                <a href="{{ route('admin-produkhukum') }}" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                    <i class="fas fa-file-contract mr-3 text-orange-500"></i>
                                    Dokumen
                                </a>

                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Layanan -->
                    <a href="#" class="flex items-center px-3 py-2 rounded-md text-sm font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-100 transition">
                        <i class="fas fa-concierge-bell mr-2"></i>
                        Layanan
                    </a>
                </div>
                
                <!-- Mobile menu button -->
                <div class="lg:hidden flex items-center space-x-2">
                    <!-- Logout Button Mobile -->
                    <form method="POST" action="{{ route('admin.logout') }}" class="inline">
                        @csrf
                        <button type="submit" class="flex items-center px-2 py-2 rounded-md text-sm font-medium text-white bg-red-600 hover:bg-red-700 transition">
                            <i class="fas fa-sign-out-alt"></i>
                        </button>
                    </form>
                    <!-- Hamburger button -->
                    <button type="button" class="text-gray-700 hover:text-gray-900 focus:outline-none focus:text-gray-900 p-2" onclick="toggleMobileMenu()">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
                
                <!-- Logout Button - Desktop -->
                <div class="hidden lg:flex items-center">
                    <form method="POST" action="{{ route('admin.logout') }}" class="inline">
                        @csrf
                        <button type="submit" class="flex items-center px-3 py-2 rounded-md text-sm font-medium text-white bg-red-600 hover:bg-red-700 transition">
                            <i class="fas fa-sign-out-alt mr-2"></i>
                            Logout
                        </button>
                    </form>
                </div>
            </div>
            
            <!-- Mobile Menu -->
            <div id="mobile-menu" class="lg:hidden hidden border-t border-gray-200 mt-2 pt-4 pb-4">
                <div class="space-y-2">
                    <!-- Home Mobile -->
                    <a href="{{ route('admin.dashboard') }}" class="flex items-center px-3 py-2 rounded-md text-sm font-medium text-blue-600 bg-blue-50 hover:bg-blue-100 transition">
                        <i class="fas fa-home mr-3"></i>
                        Home
                    </a>
                    
                    <!-- Profil Mobile -->
                    <div class="space-y-1">
                        <button onclick="toggleSubmenu('profil')" class="w-full flex items-center justify-between px-3 py-2 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-100 transition">
                            <span class="flex items-center">
                                <i class="fas fa-user mr-3"></i>
                                Profil
                            </span>
                            <i class="fas fa-chevron-down text-xs"></i>
                        </button>
                        <div id="profil-submenu" class="hidden ml-6 space-y-1">
                            <a href="#" class="flex items-center px-3 py-2 text-sm text-gray-600 hover:bg-gray-50 rounded-md">
                                <i class="fas fa-info mr-3 text-blue-500"></i>
                                Tentang Kami
                            </a>
                            <a href="#" class="flex items-center px-3 py-2 text-sm text-gray-600 hover:bg-gray-50 rounded-md">
                                <i class="fas fa-sitemap mr-3 text-green-500"></i>
                                Struktur Organisasi
                            </a>
                            <a href="#" class="flex items-center px-3 py-2 text-sm text-gray-600 hover:bg-gray-50 rounded-md">
                                <i class="fas fa-tasks mr-3 text-purple-500"></i>
                                Tupoksi
                            </a>
                            <a href="#" class="flex items-center px-3 py-2 text-sm text-gray-600 hover:bg-gray-50 rounded-md">
                                <i class="fas fa-handshake mr-3 text-orange-500"></i>
                                Maklumat Pelayanan
                            </a>
                            <a href="#" class="flex items-center px-3 py-2 text-sm text-gray-600 hover:bg-gray-50 rounded-md">
                                <i class="fas fa-user-tie mr-3 text-indigo-500"></i>
                                Profil Pimpinan
                            </a>
                        </div>
                    </div>
                    
                    <!-- Informasi Mobile -->
                    <div class="space-y-1">
                        <button onclick="toggleSubmenu('informasi')" class="w-full flex items-center justify-between px-3 py-2 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-100 transition">
                            <span class="flex items-center">
                                <i class="fas fa-info-circle mr-3"></i>
                                Informasi
                            </span>
                            <i class="fas fa-chevron-down text-xs"></i>
                        </button>
                        <div id="informasi-submenu" class="hidden ml-6 space-y-1">
                            <a href="#" class="flex items-center px-3 py-2 text-sm text-gray-600 hover:bg-gray-50 rounded-md">
                                <i class="fas fa-newspaper mr-3 text-blue-500"></i>
                                Berita
                            </a>
                            <a href="#" class="flex items-center px-3 py-2 text-sm text-gray-600 hover:bg-gray-50 rounded-md">
                                <i class="fas fa-edit mr-3 text-green-500"></i>
                                Artikel
                            </a>
                            <a href="{{ route('admin-produkhukum') }}" class="flex items-center px-3 py-2 text-sm text-gray-600 hover:bg-gray-50 rounded-md">
                                <i class="fas fa-gavel mr-3 text-red-500"></i>
                                Produk Hukum
                            </a>
                            <a href="#" class="flex items-center px-3 py-2 text-sm text-gray-600 hover:bg-gray-50 rounded-md">
                                <i class="fas fa-clipboard-check mr-3 text-purple-500"></i>
                                Dokumen Evaluasi
                            </a>
                            <a href="#" class="flex items-center px-3 py-2 text-sm text-gray-600 hover:bg-gray-50 rounded-md">
                                <i class="fas fa-file-contract mr-3 text-orange-500"></i>
                                Dokumen Perencanaan
                            </a>
                        </div>
                    </div>
                    
                    <!-- Layanan Mobile -->
                    <a href="#" class="flex items-center px-3 py-2 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-100 transition">
                        <i class="fas fa-concierge-bell mr-3"></i>
                        Layanan
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <script>
        function toggleMobileMenu() {
            const mobileMenu = document.getElementById('mobile-menu');
            mobileMenu.classList.toggle('hidden');
        }

        function toggleSubmenu(menuName) {
            const submenu = document.getElementById(menuName + '-submenu');
            submenu.classList.toggle('hidden');
        }

        // Close mobile menu when clicking outside
        document.addEventListener('click', function(event) {
            const mobileMenu = document.getElementById('mobile-menu');
            const hamburgerButton = event.target.closest('button[onclick="toggleMobileMenu()"]');
            
            if (!mobileMenu.contains(event.target) && !hamburgerButton) {
                mobileMenu.classList.add('hidden');
            }
        });
    </script>