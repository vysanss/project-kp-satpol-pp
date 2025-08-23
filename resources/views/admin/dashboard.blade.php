<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="/img/favicon/site.webmanifest">
    <title>Dashboard - Admin</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
</head>
<body class="bg-gray-100 pt-20">

    <x-admin.navbar />

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
        <!-- Welcome Card -->
        <div class="bg-gradient-to-br from-blue-500 to-purple-600 rounded-2xl shadow-xl p-8 text-white mb-8">
            <div class="flex items-center justify-between">
                <div>
                    <h2 class="text-3xl font-bold mb-2">Dashboard</h2>
                    <p class="text-blue-100 text-lg">Akses cepat ke semua fitur administrasi</p>
                </div>
                <div class="hidden md:block">
                    <div class="w-20 h-20 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center">
                        <i class="fas fa-tachometer-alt text-3xl"></i>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Navigation Shortcuts - Bento Layout -->
        <div class="grid grid-cols-12 gap-4 mb-8" x-data="{ loaded: false }" x-init="setTimeout(() => loaded = true, 100)">
            <!-- Kelola Banner - Large Card -->
            <div class="col-span-12 md:col-span-6 lg:col-span-4">
                <a href="{{ route('admin-banner') }}" 
                   class="block h-40 bg-gradient-to-br from-blue-500 via-blue-600 to-indigo-700 rounded-xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:scale-105 hover:-rotate-1 group overflow-hidden relative"
                   :class="loaded ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-4'"
                   style="transition-delay: 0ms;">
                    <div class="absolute inset-0 bg-gradient-to-br from-white/10 to-transparent"></div>
                    <div class="relative p-6 h-full flex flex-col justify-between text-white">
                        <div class="flex items-start justify-between">
                            <div>
                                <h3 class="text-xl font-bold mb-2 group-hover:scale-110 transition-transform duration-300">Kelola Banner</h3>
                                <p class="text-blue-100 text-sm">Manajemen banner website</p>
                            </div>
                            <div class="w-12 h-12 bg-white/20 backdrop-blur-sm rounded-lg flex items-center justify-center group-hover:rotate-12 transition-transform duration-300">
                                <i class="fas fa-image text-xl"></i>
                            </div>
                        </div>
                        <div class="mt-4">
                            <div class="w-8 h-1 bg-white/30 rounded-full group-hover:w-16 transition-all duration-300"></div>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Kelola Dokumen - Medium Card -->
            <div class="col-span-12 md:col-span-6 lg:col-span-4">
                <a href="{{ route('admin-dokumen') }}" 
                   class="block h-40 bg-gradient-to-br from-emerald-500 via-green-600 to-teal-700 rounded-xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:scale-105 hover:rotate-1 group overflow-hidden relative"
                   :class="loaded ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-4'"
                   style="transition-delay: 100ms;">
                    <div class="absolute inset-0 bg-gradient-to-br from-white/10 to-transparent"></div>
                    <div class="relative p-6 h-full flex flex-col justify-between text-white">
                        <div class="flex items-start justify-between">
                            <div>
                                <h3 class="text-xl font-bold mb-2 group-hover:scale-110 transition-transform duration-300">Kelola Dokumen</h3>
                                <p class="text-green-100 text-sm">Upload dan edit dokumen</p>
                            </div>
                            <div class="w-12 h-12 bg-white/20 backdrop-blur-sm rounded-lg flex items-center justify-center group-hover:-rotate-12 transition-transform duration-300">
                                <i class="fas fa-file-alt text-xl"></i>
                            </div>
                        </div>
                        <div class="mt-4">
                            <div class="w-8 h-1 bg-white/30 rounded-full group-hover:w-16 transition-all duration-300"></div>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Berita & Artikel - Medium Card -->
            <div class="col-span-12 md:col-span-6 lg:col-span-4">
                <a href="{{ route('admin-berita') }}" 
                   class="block h-40 bg-gradient-to-br from-purple-500 via-violet-600 to-purple-700 rounded-xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:scale-105 hover:-rotate-1 group overflow-hidden relative"
                   :class="loaded ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-4'"
                   style="transition-delay: 200ms;">
                    <div class="absolute inset-0 bg-gradient-to-br from-white/10 to-transparent"></div>
                    <div class="relative p-6 h-full flex flex-col justify-between text-white">
                        <div class="flex items-start justify-between">
                            <div>
                                <h3 class="text-xl font-bold mb-2 group-hover:scale-110 transition-transform duration-300">Berita & Artikel</h3>
                                <p class="text-purple-100 text-sm">Kelola berita dan artikel</p>
                            </div>
                            <div class="w-12 h-12 bg-white/20 backdrop-blur-sm rounded-lg flex items-center justify-center group-hover:rotate-12 transition-transform duration-300">
                                <i class="fas fa-newspaper text-xl"></i>
                            </div>
                        </div>
                        <div class="mt-4">
                            <div class="w-8 h-1 bg-white/30 rounded-full group-hover:w-16 transition-all duration-300"></div>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Kelola Profil - Large Card with Dropdown -->
            <div class="col-span-12 md:col-span-8" x-data="{ open: false }">
                <div class="h-32 bg-gradient-to-br from-amber-500 via-orange-600 to-red-700 rounded-xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:scale-[1.02] group overflow-hidden relative cursor-pointer"
                     :class="loaded ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-4'"
                     style="transition-delay: 300ms;"
                     @click="open = !open">
                    <div class="absolute inset-0 bg-gradient-to-br from-white/10 to-transparent"></div>
                    <div class="relative p-6 h-full flex items-center justify-between text-white">
                        <div class="flex items-center">
                            <div class="w-16 h-16 bg-white/20 backdrop-blur-sm rounded-xl flex items-center justify-center mr-6 group-hover:rotate-6 transition-transform duration-300">
                                <i class="fas fa-chart-bar text-2xl"></i>
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold mb-1 group-hover:scale-110 transition-transform duration-300">Kelola Profil</h3>
                                <p class="text-orange-100">Edit halaman Profil organisasi</p>
                            </div>
                        </div>
                        <div class="ml-auto">
                            <i :class="open ? 'fa-chevron-up rotate-180' : 'fa-chevron-down'" class="fas text-white/80 text-xl transition-transform duration-300"></i>
                        </div>
                    </div>
                </div>
                <div x-show="open" @click.away="open = false" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 -translate-y-2" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 -translate-y-2" class="mt-2 bg-white rounded-xl shadow-xl z-10 overflow-hidden">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-1 p-2">
                        <a href="{{ route('admin.tentangkami.index') }}" class="block px-4 py-3 hover:bg-amber-50 text-gray-700 rounded-lg transition-colors duration-200 group">
                            <div class="flex items-center">
                                <i class="fas fa-info-circle text-amber-500 mr-3 group-hover:scale-110 transition-transform"></i>
                                <span class="font-medium">Tentang Kami</span>
                            </div>
                        </a>
                        <a href="{{ route('admin.strukturorganisasi.index') }}" class="block px-4 py-3 hover:bg-amber-50 text-gray-700 rounded-lg transition-colors duration-200 group">
                            <div class="flex items-center">
                                <i class="fas fa-sitemap text-amber-500 mr-3 group-hover:scale-110 transition-transform"></i>
                                <span class="font-medium">Struktur Organisasi</span>
                            </div>
                        </a>
                        <a href="{{ route('admin.tupoksi.index') }}" class="block px-4 py-3 hover:bg-amber-50 text-gray-700 rounded-lg transition-colors duration-200 group">
                            <div class="flex items-center">
                                <i class="fas fa-tasks text-amber-500 mr-3 group-hover:scale-110 transition-transform"></i>
                                <span class="font-medium">Tupoksi</span>
                            </div>
                        </a>
                        <a href="{{ route('admin.pelayanan.index') }}" class="block px-4 py-3 hover:bg-amber-50 text-gray-700 rounded-lg transition-colors duration-200 group">
                            <div class="flex items-center">
                                <i class="fas fa-handshake text-amber-500 mr-3 group-hover:scale-110 transition-transform"></i>
                                <span class="font-medium">Maklumat Pelayanan</span>
                            </div>
                        </a>
                        <a href="{{ route('admin.profilpimpinan.index') }}" class="block px-4 py-3 hover:bg-amber-50 text-gray-700 rounded-lg transition-colors duration-200 group">
                            <div class="flex items-center">
                                <i class="fas fa-user-tie text-amber-500 mr-3 group-hover:scale-110 transition-transform"></i>
                                <span class="font-medium">Profil Pimpinan</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Kelola Layanan - Small Card -->
            <div class="col-span-12 md:col-span-4">
                <a href="{{ route('admin.layanan.index') }}" 
                   class="block h-32 bg-gradient-to-br from-rose-500 via-pink-600 to-red-700 rounded-xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:scale-105 hover:rotate-1 group overflow-hidden relative"
                   :class="loaded ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-4'"
                   style="transition-delay: 400ms;">
                    <div class="absolute inset-0 bg-gradient-to-br from-white/10 to-transparent"></div>
                    <div class="relative p-6 h-full flex flex-col justify-between text-white">
                        <div class="flex items-start justify-between">
                            <div>
                                <h3 class="text-lg font-bold mb-1 group-hover:scale-110 transition-transform duration-300">Kelola Layanan</h3>
                                <p class="text-pink-100 text-sm">Edit halaman Layanan</p>
                            </div>
                            <div class="w-10 h-10 bg-white/20 backdrop-blur-sm rounded-lg flex items-center justify-center group-hover:-rotate-12 transition-transform duration-300">
                                <i class="fas fa-concierge-bell text-lg"></i>
                            </div>
                        </div>
                        <div class="mt-2">
                            <div class="w-6 h-1 bg-white/30 rounded-full group-hover:w-12 transition-all duration-300"></div>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Kelola Footer - Large Card -->
            <div class="col-span-12 md:col-span-12 lg:col-span-12">
                <a href="{{ route('admin-footer') }}" 
                   class="block h-24 bg-gradient-to-r from-slate-700 via-gray-800 to-slate-900 rounded-xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:scale-[1.01] group overflow-hidden relative"
                   :class="loaded ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-4'"
                   style="transition-delay: 500ms;">
                    <div class="absolute inset-0 bg-gradient-to-r from-white/5 to-transparent"></div>
                    <div class="relative p-6 h-full flex items-center text-white">
                        <div class="w-12 h-12 bg-white/10 backdrop-blur-sm rounded-lg flex items-center justify-center mr-6 group-hover:rotate-6 transition-transform duration-300">
                            <i class="fas fa-shoe-prints text-xl"></i>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-xl font-bold mb-1 group-hover:scale-110 transition-transform duration-300">Kelola Footer</h3>
                            <p class="text-gray-300">Edit konten Footer website</p>
                        </div>
                        <div class="hidden md:flex items-center space-x-2">
                            <div class="w-2 h-2 bg-white/20 rounded-full animate-pulse"></div>
                            <div class="w-2 h-2 bg-white/30 rounded-full animate-pulse" style="animation-delay: 0.2s;"></div>
                            <div class="w-2 h-2 bg-white/40 rounded-full animate-pulse" style="animation-delay: 0.4s;"></div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        

    </div>
</body>
</html>