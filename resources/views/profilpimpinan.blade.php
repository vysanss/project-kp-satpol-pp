<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="apple-touch-icon" sizes="180x180" href="/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="/img/favicon/site.webmanifest">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script>
      window.addEventListener('beforeunload', function() {
        window.scrollTo(0, 0);
      });
      window.addEventListener('load', function() {
        window.scrollTo(0, 0);
      });
    </script>
    <title>Profil Pimpinan - Satpol PP Tasikmalaya</title>
</head>
<body class="h-full">
    <div class="min-h-full">
        <x-navbar />
        <x-banner
        :bannerId="6"
        />
        
        <main>
            <!-- Kepala Dinas Section -->
            <section class="py-16 px-4 sm:px-6 lg:px-8">
                <div class="max-w-7xl mx-auto">
                    <!-- Kepala Dinas Profile -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-16">
                        <div class="bg-gradient-to-r from-blue-600 to-indigo-700 px-8 lg:px-12 py-8">
                            <h2 class="text-3xl font-bold text-white text-center">Kepala Satuan Polisi Pamong Praja</h2>
                        </div>
                        
                        <div class="p-8 lg:p-12">
                            <div class="grid grid-cols-1 lg:grid-cols-3 gap-12 items-center">
                                <!-- Photo -->
                                <div class="lg:col-span-1">
                                    <div class="relative">
                                        <div class="w-64 h-80 mx-auto bg-gray-200 rounded-lg overflow-hidden shadow-lg">
                                            <img src="/img/placeholder-leader.jpg" alt="Kepala Satpol PP" class="w-full h-full object-cover">
                                        </div>
                                        <div class="absolute -bottom-4 left-1/2 transform -translate-x-1/2">
                                            <div class="bg-blue-600 text-white px-6 py-2 rounded-full text-sm font-medium">
                                                Kepala Satpol PP
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Profile Info -->
                                <div class="lg:col-span-2">
                                    <div class="space-y-6">
                                        <div>
                                            <h3 class="text-2xl font-bold text-gray-900 mb-2">Dr. lorem ipsum, S.H., M.H.</h3>
                                            <p class="text-lg text-blue-600 font-medium">Kepala Satuan Polisi Pamong Praja Kota Tasikmalaya</p>
                                        </div>
                                        
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                            <div class="space-y-3">
                                                <div class="flex items-center">
                                                    <div class="bg-blue-100 rounded-full p-2 mr-3">
                                                        <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                                        </svg>
                                                    </div>
                                                    <div>
                                                        <p class="text-sm text-gray-500">NIP</p>
                                                        <p class="font-medium">197505152008011003</p>
                                                    </div>
                                                </div>
                                                
                                                <div class="flex items-center">
                                                    <div class="bg-green-100 rounded-full p-2 mr-3">
                                                        <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                                                        </svg>
                                                    </div>
                                                    <div>
                                                        <p class="text-sm text-gray-500">Pangkat/Golongan</p>
                                                        <p class="font-medium">Pembina Utama Madya (IV/d)</p>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="space-y-3">
                                                <div class="flex items-center">
                                                    <div class="bg-yellow-100 rounded-full p-2 mr-3">
                                                        <svg class="w-5 h-5 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                                                        </svg>
                                                    </div>
                                                    <div>
                                                        <p class="text-sm text-gray-500">Pendidikan</p>
                                                        <p class="font-medium">S3 Ilmu Hukum</p>
                                                    </div>
                                                </div>
                                                
                                                <div class="flex items-center">
                                                    <div class="bg-purple-100 rounded-full p-2 mr-3">
                                                        <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3a4 4 0 118 0v4m-4 8a2 2 0 100-4m0 4v2m0-6a2 2 0 100-4m0 4a2 2 0 100-4"/>
                                                        </svg>
                                                    </div>
                                                    <div>
                                                        <p class="text-sm text-gray-500">Masa Jabatan</p>
                                                        <p class="font-medium">2020 - 2025</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="bg-gray-50 rounded-lg p-6">
                                            <h4 class="font-semibold text-gray-900 mb-3">Pesan Kepala Dinas</h4>
                                            <p class="text-gray-700 leading-relaxed italic">
                                                "Satuan Polisi Pamong Praja Kota Tasikmalaya berkomitmen untuk terus meningkatkan pelayanan kepada masyarakat dengan menjunjung tinggi nilai-nilai integritas, profesionalisme, dan dedikasi dalam menegakkan ketertiban umum dan ketentraman masyarakat."
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tim Pimpinan Section -->
                    <div class="mb-16">
                        <div class="text-center mb-12">
                            <h3 class="text-3xl font-bold text-gray-900 mb-4">Tim Pimpinan</h3>
                            <div class="w-24 h-1 bg-blue-600 mx-auto rounded"></div>
                            <p class="text-gray-600 mt-4 max-w-2xl mx-auto">
                                Para pemimpin berpengalaman yang berdedikasi untuk kemajuan organisasi dan pelayanan terbaik kepada masyarakat
                            </p>
                        </div>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                            <!-- Sekretaris -->
                            <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                                <div class="relative">
                                    <div class="h-64 bg-gray-200">
                                        <img src="/img/placeholder-leader-2.jpg" alt="Sekretaris" class="w-full h-full object-cover">
                                    </div>
                                    <div class="absolute top-4 right-4">
                                        <span class="bg-blue-600 text-white px-3 py-1 rounded-full text-xs font-medium">
                                            Sekretaris
                                        </span>
                                    </div>
                                </div>
                                <div class="p-6">
                                    <h4 class="text-xl font-bold text-gray-900 mb-1">Drs. lorem ipsum, M.AP</h4>
                                    <p class="text-blue-600 font-medium mb-3">Sekretaris Satpol PP</p>
                                    <p class="text-gray-600 text-sm mb-4">
                                        Membawahi bidang administrasi, keuangan, dan sumber daya manusia dengan pengalaman lebih dari 15 tahun.
                                    </p>
                                    <div class="flex items-center text-sm text-gray-500">
                                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5"/>
                                        </svg>
                                        Pembina (IV/a)
                                    </div>
                                </div>
                            </div>

                            <!-- Kabid Ketertiban -->
                            <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                                <div class="relative">
                                    <div class="h-64 bg-gray-200">
                                        <img src="/img/placeholder-leader-3.jpg" alt="Kabid Ketertiban" class="w-full h-full object-cover">
                                    </div>
                                    <div class="absolute top-4 right-4">
                                        <span class="bg-green-600 text-white px-3 py-1 rounded-full text-xs font-medium">
                                            Kabid
                                        </span>
                                    </div>
                                </div>
                                <div class="p-6">
                                    <h4 class="text-xl font-bold text-gray-900 mb-1">lorem ipsum, S.H.</h4>
                                    <p class="text-green-600 font-medium mb-3">Kabid Ketertiban Umum</p>
                                    <p class="text-gray-600 text-sm mb-4">
                                        Menangani penegakan peraturan daerah dan menjaga ketertiban umum di wilayah Kota Tasikmalaya.
                                    </p>
                                    <div class="flex items-center text-sm text-gray-500">
                                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5"/>
                                        </svg>
                                        Penata Tk.I (III/d)
                                    </div>
                                </div>
                            </div>

                            <!-- Kabid Perlindungan -->
                            <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                                <div class="relative">
                                    <div class="h-64 bg-gray-200">
                                        <img src="/img/placeholder-leader-4.jpg" alt="Kabid Perlindungan" class="w-full h-full object-cover">
                                    </div>
                                    <div class="absolute top-4 right-4">
                                        <span class="bg-red-600 text-white px-3 py-1 rounded-full text-xs font-medium">
                                            Kabid
                                        </span>
                                    </div>
                                </div>
                                <div class="p-6">
                                    <h4 class="text-xl font-bold text-gray-900 mb-1">lorem ipsum, S.Sos., M.Si</h4>
                                    <p class="text-red-600 font-medium mb-3">Kabid Perlindungan Masyarakat</p>
                                    <p class="text-gray-600 text-sm mb-4">
                                        Fokus pada perlindungan masyarakat, penanggulangan bencana, dan koordinasi keamanan wilayah.
                                    </p>
                                    <div class="flex items-center text-sm text-gray-500">
                                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5"/>
                                        </svg>
                                        Penata Tk.I (III/d)
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>
    <x-footer />
</body>
</html>
