<!DOCTYPE html>
<html lang="id" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Berita - Satpol PP Tasikmalaya</title>
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Kegiatan dan Informasi Terkini dari Satpol PP Tasikmalaya">
    <meta name="keywords" content="Berita, Informasi, Kegiatan, Satpol PP, Tasikmalaya">
    <meta name="author" content="Satpol PP Tasikmalaya">
    <meta name="robots" content="index, follow">

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Berita - Satpol PP Tasikmalaya">
    <meta property="og:description" content="Kegiatan dan Informasi Terkini dari Satpol PP Tasikmalaya">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url('/berita') }}">

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="/img/favicon/site.webmanifest">
    
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="h-full">
    <div class="min-h-full">
        <x-navbar />
        
        <main>
            <!-- Breadcrumb Section -->
            <div class="relative bg-gradient-to-br from-[#0D0D8C] to-[#2020a9] text-white py-12 container mx-auto max-w-6xl rounded-2xl shadow-xl overflow-hidden mt-6 h-80">
                
                <div class="relative px-6 lg:px-12 h-full flex flex-col justify-center z-10">
                    <!-- Breadcrumb -->
                    <div class="flex items-center justify-center lg:justify-start mb-6 hidden md:flex" aria-label="breadcrumb">
                        <div class="flex items-center space-x-3 bg-white/10 backdrop-blur-sm rounded-full px-5 py-2 border border-white/20">
                            <a href="{{ url('/') }}" class="flex items-center space-x-2 text-gray-200 hover:text-white transition-all duration-300 group">
                                <div class="p-1.5 bg-white/20 rounded-full group-hover:bg-white/40 transition-all duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-3 h-3">
                                        <path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8"></path>
                                        <path d="M3 10a2 2 0 0 1 .709-1.528l7-5.999a2 2 0 0 1 2.582 0l7 5.999A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                    </svg>
                                </div>
                                <span class="font-medium text-sm">Beranda</span>
                            </a>
                            <div class="w-px h-4 bg-gray-300"></div>
                            <span class="text-white font-medium text-sm">Berita</span>
                        </div>
                    </div>

                    <!-- Hero Title Section -->
                    <div class="text-center lg:text-left max-w-4xl mx-auto lg:mx-0">
                        <div class="mb-4">
                            <h1 class="text-2xl lg:text-4xl font-black mb-2 leading-tight tracking-tight">
                                <span class="block text-white">Kegiatan dan Informasi Terkini</span>
                                <span class="block text-yellow-300 animate-pulse">
                                    Satpol PP Tasikmalaya
                                </span>
                            </h1>
                        </div>

                        <!-- Subtitle with Icon -->
                        <div class="flex items-center justify-center lg:justify-start space-x-4 mb-4">
                            <div class="flex items-center space-x-3 bg-white/10 backdrop-blur-sm rounded-xl px-4 py-2 border border-white/20">
                                <div class="p-1.5 bg-yellow-300/20 rounded-full hidden md:block">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 text-yellow-300">
                                        <path d="M8 2v4"></path>
                                        <path d="M16 2v4"></path>
                                        <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                                        <path d="M3 10h18"></path>
                                    </svg>
                                </div>
                                <p class="text-sm lg:text-base text-gray-200 font-medium">
                                    Satuan Polisi Pamong Praja Kota Tasikmalaya
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Background Pattern - Moved to top layer -->
                <div class="absolute inset-0 opacity-30 z-20 pointer-events-none">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-yellow-200/50 rounded-full -translate-y-16 translate-x-16"></div>
                    <div class="absolute bottom-0 left-0 w-24 h-24 bg-yellow-300/40 rounded-full translate-y-12 -translate-x-12"></div>
                    <div class="absolute top-1/2 left-1/4 w-16 h-16 bg-yellow-200/60 rounded-full transform -translate-y-1/2 animate-pulse"></div>
                    <div class="absolute bottom-1/4 right-1/3 w-12 h-12 bg-yellow-400/50 rounded-full animate-pulse animation-delay-2000"></div>
                </div>
            </div>

            <!-- News Content Section -->
            <section class="py-12 bg-gray-50">
                <div class="container mx-auto max-w-6xl px-4">
                    <!-- Search and Filter Form -->
                    <form method="GET" action="{{ url('/berita') }}">
                        <!-- Category Filter -->
                        <x-infocategory />
                        <!-- Search and Year Filter -->
                        <div class="flex flex-col md:flex-row gap-4 items-center justify-center mb-6">
                            <div class="relative w-full">
                                <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari berita..." class="w-full px-4 py-3 pr-11 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#0D0D8C] focus:border-[#0D0D8C] transition" autocomplete="off">
                                <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                    <button type="submit" class="absolute right-2 top-1/2 transform -translate-y-1/2 bg-[#0D0D8C] text-white px-4 py-2 rounded-md hover:bg-[#2020a9] transition-all duration-300 shadow-md cursor-pointer">
                                        Cari
                                    </button>
                                </div>
                            </div>
                            <div>
                                <select name="year" class="px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#0D0D8C] focus:border-[#0D0D8C]">
                                    <option value="">Semua Tahun</option>
                                    @php
                                        $currentYear = date('Y');
                                    @endphp
                                    @for($year = $currentYear; $year >= 2020; $year--)
                                        <option value="{{ $year }}" {{ request('year') == $year ? 'selected' : '' }}>{{ $year }}</option>
                                    @endfor
                                </select>
                            </div>
                        </div>
                    </form>

                    <!-- News Grid -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6" id="news-grid">
                        {{-- News cards from database --}}
                        @forelse($beritas->where('category', 'Berita') as $berita)
                        <article class="news-card bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl hover:scale-105 transition-all duration-300 cursor-pointer group">
                            <div class="relative overflow-hidden">
                                <img src="{{ asset('storage/' . $berita->image) }}" 
                                     alt="{{ $berita->title }}" 
                                     class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-300">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            </div>
                            <div class="p-6">
                                <div class="flex items-center gap-2 mb-3">
                                    <span class="px-3 py-1 bg-blue-100 text-blue-800 text-xs font-medium rounded-full group-hover:bg-blue-200 transition-colors duration-300">{{ $berita->category }}</span>
                                    <span class="text-xs text-gray-500 group-hover:text-gray-600 transition-colors duration-300">{{ \Carbon\Carbon::parse($berita->published_at)->translatedFormat('l, d F Y') }}</span>
                                </div>
                                <h3 class="font-bold text-gray-800 mb-2 line-clamp-2 group-hover:text-[#0D0D8C] transition-colors duration-300">
                                    {{ $berita->title }}
                                </h3>
                                <p class="text-gray-600 text-sm mb-4 line-clamp-3 group-hover:text-gray-700 transition-colors duration-300">
                                    {{ \Illuminate\Support\Str::limit(strip_tags($berita->content), 120) }}
                                </p>
                                <div class="flex items-center justify-between">
                                    <form action="{{ route('berita.detail') }}" method="POST" class="inline">
                                        @csrf
                                        <input type="hidden" name="berita_id" value="{{ $berita->id }}">
                                        <button type="submit" class="inline-flex items-center text-[#0D0D8C] hover:text-[#2020a9] font-semibold text-sm group/link transition-colors duration-300">
                                            Baca Selengkapnya
                                            <svg class="w-4 h-4 ml-2 group-hover/link:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </article>
                        @empty
                        <div class="col-span-3 text-center text-gray-500 py-12">
                            Tidak ada berita ditemukan.
                        </div>
                        @endforelse
                    </div>

                    <!-- Pagination -->
                    <div class="flex justify-center items-center mt-10 space-x-2" id="pagination">
                        {{ $beritas->withQueryString()->links() }}
                    </div>
                </div>
            </section>
        </main>
    </div>
    
    @php
        $footer = App\Models\Footer::first() ?? null;
    @endphp
    <x-footer :footer="$footer" />

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

    <style>
        .animation-delay-2000 {
            animation-delay: 2s;
        }

        .filter-tab {
            background-color: #e5e7eb; 
            color: #374151;         
            transition: all 0.2s;
        }
        .filter-tab:hover {
            background-color: #d1d5db;
        }
        .filter-tab.active {
            background-color: #0D0D8C;
            color: #fff;
        }
        .filter-tab.active:hover {
            background-color: #2020a9;
        }

        .line-clamp-2 {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .line-clamp-3 {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
    </style>
</body>
</html>
