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
    <title>Tentang Kami - Satpol PP Tasikmalaya</title>
</head>
<body class="h-full">
    <div class="min-h-full">
        <x-navbar />
        
        <main>
            <!-- Hero Section -->
            <x-banner
                :bannerId="2"
            />

            <!-- Profile Section -->
            <section class="py-16 px-4 sm:px-6 lg:px-8">
                <div class="max-w-7xl mx-auto">
                    <div class="bg-white rounded-xl shadow-lg p-8 lg:p-12 mb-12">
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                            <div>
                                <h2 class="text-3xl font-bold text-gray-900 mb-6">Profil Organisasi</h2>
                                <p class="text-lg text-gray-700 leading-relaxed mb-4">
                                    Satuan Polisi Pamong Praja Kota Tasikmalaya adalah perangkat daerah yang bertugas dalam penegakan Peraturan Daerah dan Peraturan Kepala Daerah, penyelenggaraan ketertiban umum dan ketentraman, serta perlindungan masyarakat.
                                </p>
                                <p class="text-lg text-gray-700 leading-relaxed">
                                    Kami berkomitmen memberikan pelayanan terbaik dengan mengedepankan integritas, profesionalisme, dan dedikasi tinggi untuk menciptakan lingkungan yang aman, tertib, dan nyaman bagi seluruh masyarakat Kota Tasikmalaya.
                                </p>
                            </div>
                            <div class="bg-gray-200 rounded-lg h-64 flex items-center justify-center">
                                <span class="text-gray-500">Gambar Kantor Satpol PP</span>
                            </div>
                        </div>
                    </div>

                    <!-- Visi Misi -->
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-12">
                        <div class="bg-white rounded-xl shadow-lg p-8">
                            <div class="text-center mb-6">
                                <div class="bg-blue-100 rounded-full p-4 w-16 h-16 mx-auto mb-4 flex items-center justify-center">
                                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                    </svg>
                                </div>
                                <h3 class="text-2xl font-bold text-gray-900">Visi</h3>
                            </div>
                            <p class="text-gray-700 text-center leading-relaxed">
                                "Terwujudnya Kota Tasikmalaya yang aman, tertib, dan tentram melalui penegakan Perda yang konsisten dan pelayanan prima kepada masyarakat."
                            </p>
                        </div>

                        <div class="bg-white rounded-xl shadow-lg p-8">
                            <div class="text-center mb-6">
                                <div class="bg-green-100 rounded-full p-4 w-16 h-16 mx-auto mb-4 flex items-center justify-center">
                                    <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                </div>
                                <h3 class="text-2xl font-bold text-gray-900">Misi</h3>
                            </div>
                            <ul class="text-gray-700 space-y-2">
                                <li class="flex items-start">
                                    <span class="text-green-600 mr-2">•</span>
                                    Melaksanakan penegakan Perda dan Perkada secara konsisten
                                </li>
                                <li class="flex items-start">
                                    <span class="text-green-600 mr-2">•</span>
                                    Menjaga ketertiban umum dan ketentraman masyarakat
                                </li>
                                <li class="flex items-start">
                                    <span class="text-green-600 mr-2">•</span>
                                    Memberikan perlindungan kepada masyarakat
                                </li>
                                <li class="flex items-start">
                                    <span class="text-green-600 mr-2">•</span>
                                    Meningkatkan kualitas pelayanan publik
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </section>
        </main>
    </div>
    <x-footer />
</body>
</html>