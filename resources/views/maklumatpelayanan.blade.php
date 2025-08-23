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
    <title>Maklumat Pelayanan - Satpol PP Tasikmalaya</title>
</head>
<body class="h-full">
    <div class="min-h-full">
        <x-navbar />
        <x-banner
        :bannerId="5"
        />
        
        <main>
            <section class="py-16 px-4 sm:px-6 lg:px-8">
                <div class="max-w-7xl mx-auto">
                    <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-gray-900 mb-4">Jenis</h2>
                    <div class="w-24 h-1 bg-yellow-600 mx-auto rounded"></div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        @foreach($pelayanan as $row)
                            @if($row->kategori === 'Jenis')
                            <div class="bg-white rounded-xl shadow-lg p-8 hover:shadow-xl transition-shadow duration-300">
                                <div class="bg-blue-100 rounded-full p-4 w-16 h-16 mx-auto mb-6 flex items-center justify-center">
                                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <rect x="4" y="4" width="16" height="16" rx="2" stroke="currentColor" stroke-width="2" fill="none"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h8M8 14h5"/>
                                        <circle cx="9" cy="7" r="1" fill="currentColor"/>
                                    </svg>
                                </div>
                                <h4 class="text-xl font-semibold text-gray-900 mb-2 text-center">{{ $row->poin }}</h4>                         
                                <p class="text-gray-600 text-center leading-relaxed break-words max-w-full overflow-auto whitespace-pre-line">
                                    {{ $row->isi }}
                                </p>
                            </div>
                            @endif
                        @endforeach
                    </div>
                </div>
                <!-- End Card pelayanan -->

                <!-- Standar Pelayanan Section -->
                <div class="mb-16">
                    <div class="text-center mt-12 mb-12">
                        <h3 class="text-3xl font-bold text-gray-900 mb-4">Standar Pelayanan</h3>
                        <div class="w-24 h-1 bg-green-600 mx-auto rounded"></div>
                    </div>

                    <div class="bg-white rounded-xl shadow-lg p-8 lg:p-12">
                        <div class="grid grid-cols-1 lg:grid-cols-1 gap-12">
                            <!-- Persyaratan Pelayanan -->
                            <div>
                                @php
                                    $persyaratan = $pelayanan->where('kategori', 'Standar Pelayanan');
                                    $uniquePoin = $persyaratan->pluck('poin')->unique()->values();
                                @endphp
                                <div class="grid gap-4" style="grid-template-columns: repeat({{ $uniquePoin->count() > 0 ? $uniquePoin->count() : 1 }}, minmax(0, 1fr));">
                                    @foreach($uniquePoin as $poin)
                                        <div class="flex flex-col bg-white rounded-xl shadow-lg p-6">
                                            <h4 class="text-2xl font-bold text-gray-900 mb-4 text-center">{{ $poin }}</h4>
                                            @foreach($persyaratan->where('poin', $poin) as $row)
                                                <div class="flex items-center">
                                                    <div class="bg-green-500 rounded-full p-1 mr-2 mt-1">
                                                        <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                                        </svg>
                                                    </div>
                                                    <p class="text-gray-600 text-center leading-relaxed break-words max-w-full overflow-auto whitespace-pre-line">
                                                        {{ $row->isi }}
                                                    </p>
                                                </div>
                                            @endforeach
                                        </div>
                                    @endforeach
                                </div>
                            </div>


                        </div>
                    </div>
                </div>

                <!-- Informasi Pelayanan -->
                <div class="bg-gradient-to-r from-blue-600 to-indigo-700 rounded-xl shadow-lg p-8 lg:p-12 text-white">
                    <div class="text-center mb-12">
                        <h3 class="text-3xl font-bold mb-4">Informasi Pelayanan</h3>
                        <p class="text-blue-100 text-lg max-w-2xl mx-auto">
                            <!-- Optional: Deskripsi bisa diganti/dihapus -->
                        </p>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                        @foreach($pelayanan as $row)
                            @if($row->kategori === 'Informasi Pelayanan')
                            <div class="bg-white/10 backdrop-blur-sm rounded-lg p-6 text-center">
                                <div class="bg-white/20 rounded-full p-4 w-16 h-16 mx-auto mb-4 flex items-center justify-center">
                                    <!-- Ikon informasi pelayanan -->
                                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2" fill="none"/>
                                        <path stroke="currentColor" stroke-width="2" stroke-linecap="round" d="M12 16v-4"/>
                                        <circle cx="12" cy="8" r="1" fill="currentColor"/>
                                    </svg>
                                </div>
                                <h4 class="font-semibold mb-2">{{ $row->poin }}</h4>
                                <p class="text-sm text-blue-100">{{ $row->isi }}</p>
                            </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </section>
        </main>
    </div>
    @php
        $footer = App\Models\Footer::first() ?? null;
    @endphp
    <x-footer :footer="$footer" />
</body>
</html>
