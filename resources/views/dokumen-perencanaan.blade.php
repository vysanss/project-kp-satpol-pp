<!DOCTYPE html>
<html lang="id" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="/img/favicon/site.webmanifest">
    <title>Dokumen Perencanaan - Satpol PP Tasikmalaya</title>
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
                            <span class="text-white font-medium text-sm">Dokumen Perencanaan</span>
                        </div>
                    </div>

                    <!-- Hero Title Section -->
                    <div class="text-center lg:text-left max-w-4xl mx-auto lg:mx-0">
                        <div class="mb-4">
                            <h1 class="text-2xl lg:text-4xl font-black mb-2 leading-tight tracking-tight">
                                <span class="block text-white">Dokumen Perencanaan</span>
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
                                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                        <polyline points="14,2 14,8 20,8"></polyline>
                                        <line x1="16" y1="13" x2="8" y2="13"></line>
                                        <line x1="16" y1="17" x2="8" y2="17"></line>
                                        <polyline points="10,9 9,9 8,9"></polyline>
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
            <!-- Content Section -->
            <section class="py-12 bg-gray-50">
                <div class="container mx-auto max-w-6xl px-4">
                    <form method="GET" action="{{ url('/dokumen-perencanaan') }}">
                        <x-infocategory />
                         {{-- konten utama /> --}}
                        <div class="flex flex-col md:flex-row gap-4 items-center justify-center mb-6">
                            <div class="relative w-full">
                                <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari dokumen perencanaan..." class="w-full px-4 py-3 pr-11 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#0D0D8C] focus:border-[#0D0D8C] transition" autocomplete="off">
                                <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                    <button type="submit" class="absolute right-2 top-1/2 transform -translate-y-1/2 bg-[#0D0D8C] text-white px-4 py-2 rounded-md hover:bg-[#2020a9] transition-all duration-300 shadow-md cursor-pointer">
                                        Cari
                                    </button>
                                </div>
                            </div>
                            <div>
                                <select name="year" class="px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#0D0D8C] focus:border-[#0D0D8C]">
                                    <option value="">Semua Tahun</option>
                                    @php $currentYear = date('Y'); @endphp
                                    @for($year = $currentYear; $year >= 2020; $year--)
                                        <option value="{{ $year }}" {{ request('year') == $year ? 'selected' : '' }}>{{ $year }}</option>
                                    @endfor
                                </select>
                            </div>
                        </div>
                    </form>
                    <!-- Table List Dokumen Perencanaan -->
                    <div class="overflow-x-auto bg-white rounded-xl shadow">
                        @if(isset($documents) && $documents->count() > 0)
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-100">
                                    <tr>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">No</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">Judul Dokumen</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">Tahun</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">Ukuran File</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach($documents as $index => $document)
                                        @if($document->kategori == 'dokumen_perencanaan')
                                        <tr class="hover:bg-gray-50 transition-colors duration-200">
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                {{ $documents->firstItem() + $index }}
                                            </td>
                                            <td class="px-6 py-4">
                                                <div class="flex items-center">
                                                    <div class="flex-shrink-0 mr-3">
                                                        <div class="w-8 h-8 bg-red-100 rounded-lg flex items-center justify-center">
                                                            <svg class="w-5 h-5 text-red-600" fill="currentColor" viewBox="0 0 20 20">
                                                                <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z" clip-rule="evenodd"/>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="text-sm font-medium text-gray-900">{{ $document->nama_file }}</div>
                                                        <div class="text-sm text-gray-500">Dokumen Perencanaan</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                                    {{ date('Y', strtotime($document->created_at)) }}
                                                </span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                @if($document->path && file_exists(public_path($document->path)))
                                                    {{ number_format(filesize(public_path($document->path)) / 1024, 0) }} KB
                                                @else
                                                    N/A
                                                @endif
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex space-x-2">
                                                    @if($document->path)
                                                        <a href="{{ route('pdf.download', $document->id) }}" 
                                                           class="inline-flex items-center px-3 py-1.5 border border-gray-300 text-xs font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors duration-200">
                                                            <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-2M7 10l5 5 5-5M12 15V3"/>
                                                            </svg>
                                                            Unduh
                                                        </a>
                                                    @else
                                                        <span class="inline-flex items-center px-3 py-1.5 text-xs font-medium text-gray-400">
                                                            File tidak tersedia
                                                        </span>
                                                    @endif
                                                </div>
                                            </td>
                                        </tr>
                                        @endif
                                    @endforeach
                                </tbody>
                            </table>
                            
                            <!-- Pagination -->
                            @if($documents->hasPages())
                                <div class="px-6 py-4 bg-gray-50 border-t border-gray-200">
                                    {{ $documents->appends(request()->query())->links() }}
                                </div>
                            @endif
                        @else
                            <!-- Empty State -->
                            <div class="text-center py-16">
                                <div class="mx-auto w-24 h-24 bg-gray-100 rounded-full flex items-center justify-center mb-4">
                                    <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                    </svg>
                                </div>
                                <h3 class="text-lg font-medium text-gray-900 mb-2">Belum ada dokumen perencanaan</h3>
                                <p class="text-gray-500 mb-6">
                                    @if(request('search') || request('year'))
                                        Tidak ada dokumen yang sesuai dengan pencarian Anda.
                                    @else
                                        Dokumen perencanaan belum tersedia saat ini.
                                    @endif
                                </p>
                                @if(request('search') || request('year'))
                                    <a href="{{ url('/dokumen-perencanaan') }}" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                        Lihat Semua Dokumen
                                    </a>
                                @endif
                            </div>
                        @endif
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
