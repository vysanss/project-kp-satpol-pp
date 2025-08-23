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
                    @if(isset($pimpinan) && count($pimpinan) > 0)
                        @foreach($pimpinan as $leader)
                        <!-- Profile Card -->
                        <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-16">
                            <div class="bg-gradient-to-r from-blue-600 to-indigo-700 px-8 lg:px-12 py-8">
                                <h2 class="text-3xl font-bold text-white text-center">{{ $leader->jabatan }}</h2>
                            </div>
                            
                            <div class="p-8 lg:p-12">
                                <div class="grid grid-cols-1 lg:grid-cols-3 gap-12 items-center">
                                    <!-- Photo -->
                                    <div class="lg:col-span-1">
                                        <div class="relative">
                                            <div class="w-64 h-80 mx-auto bg-gray-200 rounded-lg overflow-hidden shadow-lg">
                                                @if($leader->foto)
                                                    <img src="{{ asset('storage/' . $leader->foto) }}" alt="{{ $leader->nama }}" class="w-full h-full object-cover">
                                                @else
                                                    <div class="w-full h-full flex items-center justify-center text-gray-400">
                                                        <span>Foto Tidak Tersedia</span>
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="absolute -bottom-4 left-1/2 transform -translate-x-1/2">
                                                <div class="bg-blue-600 text-white px-6 py-2 rounded-full text-sm font-medium">
                                                    {{ explode(' ', $leader->jabatan)[0] }} {{ explode(' ', $leader->jabatan)[1] ?? '' }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Profile Info -->
                                    <div class="lg:col-span-2">
                                        <div class="space-y-6">
                                            <div>
                                                <h3 class="text-2xl font-bold text-gray-900 mb-2">
                                                    {{ trim(($leader->gelar_depan ?? '') . ' ' . $leader->nama . ' ' . ($leader->gelar_belakang ?? '')) }}
                                                </h3>
                                                <p class="text-lg text-blue-600 font-medium">{{ $leader->jabatan }}</p>
                                            </div>
                                            
                                            @if($leader->pesan)
                                            <div class="bg-gray-50 rounded-lg p-6">
                                                <h4 class="font-semibold text-gray-900 mb-3">Pesan Pimpinan</h4>
                                                <div class="text-gray-700 leading-relaxed">
                                                    <em>{!! $leader->pesan !!}</em>
                                                </div>
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    @else
                        <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-16 p-8">
                            <div class="text-center">
                                <h2 class="text-2xl font-bold text-gray-900 mb-4">Data Pimpinan Tidak Tersedia</h2>
                                <p class="text-gray-600">Silakan hubungi administrator untuk menambahkan data pimpinan.</p>
                            </div>
                        </div>
                    @endif
                </div>
            </section>
        </main>
    </div>
    <x-footer />
</body>
</html>
