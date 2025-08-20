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
    <title>Layanan - Satpol PP Tasikmalaya</title>
</head>
<body class="h-full">
    <div class="min-h-full">
        <x-navbar />
        <main>
            <section class="py-8 md:py-12 px-4 sm:px-6 lg:px-8">
                <div class="max-w-7xl mx-auto">
                    <div class="bg-white rounded-xl shadow-lg p-6 sm:p-8 lg:p-12">
                        <h1 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-8 text-center">
                            Layanan Satpol PP Kota Tasikmalaya
                        </h1>
                        <p class="text-lg text-gray-700 leading-relaxed text-center mb-10 max-w-3xl mx-auto">
                            Berikut adalah layanan utama yang disediakan oleh Satuan Polisi Pamong Praja Kota Tasikmalaya.
                        </p>
                        <div class="flex flex-col lg:flex-row gap-8">
                            <div class="flex-1">
                                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
                                    @foreach($layanans as $layanan)
                                    <div class="bg-gray-50 rounded-lg shadow p-6 flex flex-col items-center h-full transform hover:scale-105 transition-transform duration-200">
                                        <div class="rounded-full p-4 mb-4" style="background-color: #f0f4ff;">
                                            {!! $layanan->icon !!}
                                        </div>
                                        <h2 class="text-xl font-semibold mb-2 text-center">{{ $layanan->title }}</h2>
                                        <p class="text-gray-600 text-center">
                                            {{ $layanan->description }}
                                        </p>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <!-- Card Kontak -->
                            <div class="w-full lg:w-80 xl:w-96 flex-shrink-0">
                                <div class="bg-gradient-to-br from-blue-50 to-white border border-gray-200 rounded-lg shadow-lg p-6 h-full sticky top-8">
                                    <div class="bg-blue-500 text-white rounded-full p-3 mb-4 flex flex-row items-center justify-center gap-2">
                                        <!-- Icon: Phone -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 mb-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H5a2 2 0 01-2-2V5zm0 10a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H5a2 2 0 01-2-2v-2zm10-10a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zm0 10a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                                        </svg>
                                        <span class="text-lg font-bold text-white text-center">Kontak Satpol PP</span>
                                    </div>
                                    <ul class="text-gray-700 text-sm space-y-2 w-full">
                                        <li class="flex items-center gap-2">
                                            <span class="font-semibold">Telepon:</span>
                                            <span>0821-1941-1145</span>
                                        </li>
                                        <li class="flex items-center gap-2">
                                            <span class="font-semibold">Email:</span>
                                            <span>satpolpp@tasikmalayakota.go.id</span>
                                        </li>
                                        <li class="flex items-center gap-2">
                                            <span class="font-semibold">Alamat:</span>
                                            <span>Jl. Ir. H. Juanda No. 191, Kota Tasikmalaya</span>
                                        </li>
                                    </ul>
                                    <a href="mailto:satpolpp@tasikmalayakota.go.id" class="mt-4 inline-block bg-blue-500 hover:bg-blue-600 text-white font-semibold px-4 py-2 rounded transition">
                                        Kirim Email
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>
    <x-footer />
    
    <script>
        // Auto scroll to top on page load/refresh
        window.addEventListener('load', function() {
            window.scrollTo(0, 0);
        });
        
        // Scroll to top before page unload (for refresh)
        window.addEventListener('beforeunload', function() {
            window.scrollTo(0, 0);
        });
        
        // Force scroll to top immediately
        if (history.scrollRestoration) {
            history.scrollRestoration = 'manual';
        }
        window.scrollTo(0, 0);
    </script>
</body>
</html>
