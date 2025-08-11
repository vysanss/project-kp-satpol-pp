<!-- Floating Navigation Bar -->
    <nav class="fixed top-4 left-4 right-4 bg-white shadow-xl rounded-xl border border-gray-200 z-50 backdrop-blur-md">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex justify-between items-center h-16">
                <!-- Logo/Brand -->
                <div class="flex items-center">
                    <h1 class="text-xl font-bold text-gray-800">
                        <i class="fas fa-cog mr-2 text-blue-600"></i>
                        Admin Panel
                    </h1>
                </div>
                
                <!-- Navigation Menu -->
                <div class="flex items-center space-x-8">
                    <!-- Home -->
                    <a href="#" class="flex items-center px-3 py-2 rounded-md text-sm font-medium text-blue-600 bg-blue-50 hover:bg-blue-100 transition">
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
                                    <i class="fas fa-bullhorn mr-3 text-orange-500"></i>
                                    Pengumuman
                                </a>
                                <a href="#" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                    <i class="fas fa-calendar-alt mr-3 text-purple-500"></i>
                                    Event
                                </a>
                                <a href="#" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                    <i class="fas fa-question-circle mr-3 text-yellow-500"></i>
                                    FAQ
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Layanan Dropdown -->
                    <div class="relative group">
                        <button class="flex items-center px-3 py-2 rounded-md text-sm font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-100 transition">
                            <i class="fas fa-concierge-bell mr-2"></i>
                            Layanan
                            <i class="fas fa-chevron-down ml-2 text-xs"></i>
                        </button>
                        <div class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg ring-1 ring-black ring-opacity-5 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
                            <div class="py-1">
                                <a href="#" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                    <i class="fas fa-users mr-3 text-blue-500"></i>
                                    Manajemen User
                                </a>
                                <a href="#" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                    <i class="fas fa-file-alt mr-3 text-green-500"></i>
                                    Laporan
                                </a>
                                <a href="#" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                    <i class="fas fa-chart-bar mr-3 text-purple-500"></i>
                                    Statistik
                                </a>
                                <a href="#" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                    <i class="fas fa-tools mr-3 text-gray-500"></i>
                                    Maintenance
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Logout Button -->
                    <form method="POST" action="{{ route('admin.logout') }}" class="inline">
                        @csrf
                        <button type="submit" class="flex items-center px-3 py-2 rounded-md text-sm font-medium text-white bg-red-600 hover:bg-red-700 transition">
                            <i class="fas fa-sign-out-alt mr-2"></i>
                            Logout
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </nav>