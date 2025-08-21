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
</head>
<body class="bg-gray-100 pt-20">

    <x-admin.navbar />

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
        <!-- Welcome Card -->
        <div class="bg-gradient-to-br from-blue-500 to-purple-600 rounded-2xl shadow-xl p-8 text-white mb-8">
            <div class="flex items-center justify-between">
                <div>
                    <h2 class="text-3xl font-bold mb-2">Admin Dashboard</h2>
                    <p class="text-blue-100 text-lg">Akses cepat ke semua fitur administrasi</p>
                </div>
                <div class="hidden md:block">
                    <div class="w-20 h-20 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center">
                        <i class="fas fa-tachometer-alt text-3xl"></i>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Navigation Shortcuts -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
            <!-- Users Management -->
            <a href="{{ route('admin-banner') }}" class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition-shadow duration-300">
                <div class="flex items-center">
                    <div class="p-3 bg-blue-100 rounded-full">
                        <i class="fas fa-users text-blue-600 text-xl"></i>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-lg font-semibold text-gray-900">Kelola Banner</h3>
                        <p class="text-sm text-gray-500">Manajemen user dan hak akses</p>
                    </div>
                </div>
            </a>
            
            <!-- Documents Management -->
            <a href="{{ route('admin-dokumen') }}" class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition-shadow duration-300">
                <div class="flex items-center">
                    <div class="p-3 bg-green-100 rounded-full">
                        <i class="fas fa-file-alt text-green-600 text-xl"></i>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-lg font-semibold text-gray-900">Kelola Dokumen</h3>
                        <p class="text-sm text-gray-500">Upload dan edit dokumen</p>
                    </div>
                </div>
            </a>
            
            <!-- Categories Management -->
            <a href="/admin/categories" class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition-shadow duration-300">
                <div class="flex items-center">
                    <div class="p-3 bg-purple-100 rounded-full">
                        <i class="fas fa-tags text-purple-600 text-xl"></i>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-lg font-semibold text-gray-900">Kategori</h3>
                        <p class="text-sm text-gray-500">Kelola kategori dokumen</p>
                    </div>
                </div>
            </a>
            
            <!-- Reports -->
            <a href="/admin/reports" class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition-shadow duration-300">
                <div class="flex items-center">
                    <div class="p-3 bg-yellow-100 rounded-full">
                        <i class="fas fa-chart-bar text-yellow-600 text-xl"></i>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-lg font-semibold text-gray-900">Laporan</h3>
                        <p class="text-sm text-gray-500">Analisis dan statistik</p>
                    </div>
                </div>
            </a>
            
            <!-- Settings -->
            <a href="/admin/settings" class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition-shadow duration-300">
                <div class="flex items-center">
                    <div class="p-3 bg-red-100 rounded-full">
                        <i class="fas fa-cog text-red-600 text-xl"></i>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-lg font-semibold text-gray-900">Pengaturan</h3>
                        <p class="text-sm text-gray-500">Konfigurasi sistem</p>
                    </div>
                </div>
            </a>
            
            <!-- Backup & Security -->
            <a href="/admin/backup" class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition-shadow duration-300">
                <div class="flex items-center">
                    <div class="p-3 bg-indigo-100 rounded-full">
                        <i class="fas fa-shield-alt text-indigo-600 text-xl"></i>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-lg font-semibold text-gray-900">Backup & Keamanan</h3>
                        <p class="text-sm text-gray-500">Backup data dan keamanan</p>
                    </div>
                </div>
            </a>
        </div>
        
        <!-- Quick Stats -->
        <div class="bg-white rounded-lg shadow-md p-6">
            <h3 class="text-lg font-semibold text-gray-900 mb-4">
                <i class="fas fa-chart-line mr-2 text-blue-600"></i>
                Statistik Cepat
            </h3>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                <div class="text-center p-4 bg-blue-50 rounded-lg">
                    <div class="text-2xl font-bold text-blue-600">156</div>
                    <div class="text-sm text-gray-600">Total Dokumen</div>
                </div>
                <div class="text-center p-4 bg-green-50 rounded-lg">
                    <div class="text-2xl font-bold text-green-600">89</div>
                    <div class="text-sm text-gray-600">Pengguna Aktif</div>
                </div>
                <div class="text-center p-4 bg-yellow-50 rounded-lg">
                    <div class="text-2xl font-bold text-yellow-600">12</div>
                    <div class="text-sm text-gray-600">Pending Review</div>
                </div>
                <div class="text-center p-4 bg-purple-50 rounded-lg">
                    <div class="text-2xl font-bold text-purple-600">7</div>
                    <div class="text-sm text-gray-600">Kategori</div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
