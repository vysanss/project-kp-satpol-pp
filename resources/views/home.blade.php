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
    <title>Satpol PP Tasikmalaya</title>
    <style>
      /* Bootstrap Carousel Styles Only */
      .carousel {
        position: relative;
      }
      .carousel-inner {
        position: relative;
        width: 100%;
        overflow: hidden;
      }
      .carousel-item {
        position: relative;
        display: none;
        float: left;
        width: 100%;
        margin-right: -100%;
        backface-visibility: hidden;
        /* Hanya transisi geser, tanpa opacity */
        transform: translateX(50px);
        transition: transform 0.4s cubic-bezier(0.4,0,0.2,1);
      }
      .carousel-item.active {
        display: block;
        transform: translateX(0);
        z-index: 2;
      }
      .carousel-item-next,
      .carousel-item-prev {
        display: block;
        z-index: 1;
      }
      .carousel-item-next {
        transform: translateX(100px);
      }
      .carousel-item-prev {
        transform: translateX(-100px);
      }
      .carousel-control-prev,
      .carousel-control-next {
        position: absolute;
        top: 0;
        bottom: 0;
        z-index: 1;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 15%;
        color: #fff;
        text-align: center;
        opacity: 0.5;
        transition: opacity 0.15s ease;
      }
      .carousel-control-prev:hover,
      .carousel-control-next:hover {
        opacity: 0.9;
        color: #fff;
        text-decoration: none;
        outline: 0;
      }
      .carousel-control-prev {
        left: 0;
      }
      .carousel-control-next {
        right: 0;
      }
      .carousel-control-prev-icon,
      .carousel-control-next-icon {
        display: inline-block;
        width: 2rem;
        height: 2rem;
        background: no-repeat 50%/100% 100%;
        background-image: none;
      }
      .carousel-control-prev-icon {
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3E%3Cpath d='M5.5 0L4.09 1.41 6.67 4H0v1h6.67l-2.58 2.59L5.5 8l4-4-4-4z'/%3E%3C/svg%3E");
      }
      .carousel-control-next-icon {
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3E%3Cpath d='M2.5 0L3.91 1.41 1.33 4H8v1H1.33l2.58 2.59L2.5 8l-4-4 4-4z'/%3E%3C/svg%3E");
      }
      .carousel-indicators {
        position: absolute;
        right: 0;
        bottom: 10px;
        left: 0;
        z-index: 2;
        display: flex;
        justify-content: center;
        padding-left: 0;
        margin-right: 15%;
        margin-left: 15%;
        list-style: none;
      }
      .carousel-indicators button {
        box-sizing: content-box;
        flex: 0 1 auto;
        width: 30px;
        height: 3px;
        margin-right: 3px;
        margin-left: 3px;
        cursor: pointer;
        background-color: #007bff;
        border: 0;
        opacity: .5;
        transition: opacity .6s ease;
      }
      .carousel-indicators .active {
        opacity: 1;
        background-color: #0d6efd;
      }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
  </head>
  <body class="h-full">
    <div class="min-h-full">
      <x-navbar></x-navbar>
      <x-banner
      :bannerId="1"
      />
      
      <main>
        <!-- Profile Card Section (Replaced with dynamic pimpinan) -->
        <section class="bg-white pb-4 sm:pb-6 pt-12 sm:pt-16 border-b border-gray-100 relative z-10">
          <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            @if(isset($profilpimpinan) && count($profilpimpinan) > 0)
                @foreach($profilpimpinan as $leader)
                <!-- Profile Card -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-4">
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
                <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-4 p-8">
                    <div class="text-center">
                        <h2 class="text-2xl font-bold text-gray-900 mb-4">Data Pimpinan Tidak Tersedia</h2>
                        <p class="text-gray-600">Silakan hubungi administrator untuk menambahkan data pimpinan.</p>
                    </div>
                </div>
            @endif
          </div>
        </section>

        <!-- Bento Navigation Section -->
        <section class="bg-gradient-to-br from-gray-50 to-blue-50 py-16 sm:py-10">
          <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
              <h2 class="text-3xl font-bold text-gray-900 mb-4">Informasi & Layanan</h2>
              <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                Akses cepat ke berbagai informasi dan layanan Satpol PP Kota Tasikmalaya
              </p>
            </div>
            
            <!-- Bento Grid Container -->
            <div class="grid grid-cols-12 gap-4 h-auto lg:h-[500px]">
              <!-- Tentang Kami - Large Feature Card -->
              <a href="{{ url('/tentangkami') }}" class="col-span-12 md:col-span-6 lg:col-span-5 row-span-2 rounded-2xl shadow-xl bg-gradient-to-br from-blue-600 to-blue-800 hover:from-blue-700 hover:to-blue-900 transition-all duration-500 hover:shadow-2xl p-8 flex flex-col justify-between group overflow-hidden relative">
                <div class="absolute top-0 right-0 w-32 h-32 bg-white/10 rounded-full -mr-16 -mt-16"></div>
                <div class="absolute bottom-0 left-0 w-24 h-24 bg-white/5 rounded-full -ml-12 -mb-12"></div>
                <div class="relative z-10">
                  <div class="flex items-center mb-6">
                    <div class="w-16 h-16 bg-white/20 backdrop-blur-sm rounded-xl flex items-center justify-center mr-4 group-hover:scale-110 transition-transform">
                      <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                      </svg>
                    </div>
                    <div>
                      <h3 class="text-2xl font-bold text-white">Tentang Kami</h3>
                      <p class="text-blue-100 text-sm">Profil Lengkap</p>
                    </div>
                  </div>
                  <p class="text-blue-50 mb-6 leading-relaxed">
                    Sejarah, visi misi, dan profil lengkap Satpol PP Kota Tasikmalaya dalam melayani masyarakat dengan dedikasi tinggi.
                  </p>
                </div>
                <div class="relative z-10 flex items-center text-white font-medium group-hover:translate-x-2 transition-transform">
                  <span>Selengkapnya</span>
                  <svg class="ml-2 w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                  </svg>
                </div>
              </a>

              <!-- Struktur Organisasi - Medium Card -->
              <a href="{{ url('/strukturorganisasi') }}" class="col-span-6 md:col-span-3 lg:col-span-3 rounded-2xl shadow-lg bg-gradient-to-br from-blue-600 to-blue-800 hover:from-blue-700 hover:to-blue-900 transition-all duration-300 hover:shadow-xl p-6 flex flex-col justify-center text-center group relative overflow-hidden">
                <div class="absolute top-0 right-0 w-20 h-20 bg-white/10 rounded-full -mr-10 -mt-10"></div>
                <div class="relative z-10">
                  <div class="w-16 h-16 bg-white/20 backdrop-blur-sm rounded-2xl flex items-center justify-center mx-auto mt-2 mb-2 group-hover:scale-110 transition-transform">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                  </div>
                  <h3 class="font-bold text-white mb-0 text-lg">Struktur Organisasi</h3>
                  <p class="text-white/80 text-sm">
                    Hierarki kepemimpinan dan struktur organisasi
                  </p>
                </div>
              </a>

              <!-- Berita - Tall Card (Made taller to match Tentang Kami) -->
              <a href="{{ url('/berita') }}" class="col-span-6 md:col-span-3 lg:col-span-4 row-span-2 rounded-2xl shadow-lg bg-gradient-to-br from-blue-600 to-blue-800 hover:from-blue-700 hover:to-blue-900 transition-all duration-300 hover:shadow-xl p-6 flex flex-col justify-between group relative overflow-hidden">
                <div class="absolute top-0 left-0 w-20 h-20 bg-white/10 rounded-full -ml-10 -mt-10"></div>
                <div class="relative z-10">
                  <div class="w-16 h-16 bg-white/20 backdrop-blur-sm rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9.5a2.5 2.5 0 00-2.5-2.5H15"></path>
                    </svg>
                  </div>
                  <h3 class="font-bold text-white mb-3 text-center text-lg">Berita & Kegiatan</h3>
                  <p class="text-white/90 text-sm text-center mb-6">
                    Informasi terkini tentang kegiatan operasional dan program kerja Satpol PP Kota Tasikmalaya. Dapatkan update terbaru mengenai berbagai program dan kegiatan yang dilaksanakan.
                  </p>
                </div>
                <div class="relative z-10 text-center">
                  <span class="inline-flex items-center text-white font-medium group-hover:translate-y-1 transition-transform">
                    Lihat Berita
                    <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                      <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                    </svg>
                  </span>
                </div>
              </a>

              <!-- Tupoksi - Medium Card -->
              <a href="{{ url('/tupoksi') }}" class="col-span-6 md:col-span-3 lg:col-span-3 rounded-2xl shadow-lg bg-gradient-to-br from-blue-600 to-blue-800 hover:from-blue-700 hover:to-blue-900 transition-all duration-300 hover:shadow-xl p-6 flex flex-col justify-center text-center group relative overflow-hidden">
                <div class="absolute bottom-0 left-0 w-24 h-24 bg-white/10 rounded-full -ml-12 -mb-12"></div>
                <div class="relative z-10">
                  <div class="w-16 h-16 bg-white/20 backdrop-blur-sm rounded-2xl flex items-center justify-center mx-auto mt-2 mb-2 group-hover:scale-110 transition-transform">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                  </div>
                  <h3 class="font-bold text-white mb-0 text-lg">Tupoksi</h3>
                  <p class="text-white/80 text-sm">
                    Tugas pokok dan fungsi serta wewenang Satpol PP
                  </p>
                </div>
              </a>

              <!-- Artikel - Wide Card -->
              <a href="{{ url('/artikel') }}" class="col-span-12 md:col-span-6 lg:col-span-5 rounded-2xl shadow-lg bg-gradient-to-br from-blue-600 to-blue-800 hover:from-blue-700 hover:to-blue-900 transition-all duration-300 hover:shadow-xl p-6 flex items-center group relative overflow-hidden">
                <div class="absolute top-0 right-0 w-32 h-32 bg-white/10 rounded-full -mr-16 -mt-16"></div>
                <div class="w-20 h-20 bg-white/20 backdrop-blur-sm rounded-2xl flex items-center justify-center mr-6 group-hover:scale-110 transition-transform flex-shrink-0">
                  <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                  </svg>
                </div>
                <div class="relative z-10">
                  <h3 class="font-bold text-white mb-3 text-xl">Artikel & Publikasi</h3>
                  <p class="text-white/90">
                    Kumpulan artikel dan publikasi mengenai kegiatan serta informasi edukatif dari Satpol PP Tasikmalaya.
                  </p>
                </div>
              </a>
              
              <!-- Layanan - Wide Card (Made wider to align with Artikel) -->
              <a href="{{ url('/layanan') }}" class="col-span-12 md:col-span-12 lg:col-span-7 rounded-2xl shadow-lg bg-gradient-to-br from-blue-600 to-blue-800 hover:from-blue-700 hover:to-blue-900 transition-all duration-300 hover:shadow-xl p-6 flex items-center group relative overflow-hidden">
                <div class="absolute bottom-0 right-0 w-20 h-20 bg-white/10 rounded-full -mr-10 -mb-10"></div>
                <div class="w-20 h-20 bg-white/20 backdrop-blur-sm rounded-2xl flex items-center justify-center mr-6 group-hover:scale-110 transition-transform flex-shrink-0">
                  <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h4a1 1 0 011 1v5m-6 0h6"></path>
                  </svg>
                </div>
                <div class="relative z-10">
                  <h3 class="font-bold text-white mb-3 text-xl">Layanan Publik</h3>
                  <p class="text-white/90">
                  Berbagai layanan yang dapat diakses masyarakat untuk keperluan perizinan dan pelaporan kepada Satpol PP.
                  </p>
                </div>
                </a>
            </div>
          </div>
        </section>

        <!-- Main Content Section -->
        <section class="bg-white py-16 sm:py-10 ">
          <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <!-- News Highlights -->
            <div class="mb-16">
              <h2 class="text-2xl font-bold text-gray-900 mb-8">Sorotan Utama</h2>
              <div class="bg-white shadow-xl overflow-hidden rounded-2xl">
                <div class="grid grid-cols-1 lg:grid-cols-3" style="height:400px;">
                  <!-- 1 kolom slide -->
                  <div class="col-span-2 lg:col-span-2 flex items-stretch justify-center bg-gradient-to-br from-blue-600 to-blue-800 p-0" style="height:400px;">
                    @php
                      $beritaCards = collect($beritaTerbaru ?? [])->where('category', 'Berita')->filter(function($b) {
                        return !empty($b->image);
                      })->take(3)->values();
                    @endphp
                    @if($beritaCards->count() > 0)
                    <div id="beritaCarousel" class="carousel slide w-full h-full" data-bs-ride="carousel" data-bs-interval="2000" style="height:400px;">
                      <div class="carousel-inner w-full h-full shadow-lg" style="height:100%;">
                        @foreach($beritaCards as $i => $berita)
                        <div class="carousel-item {{ $i == 0 ? 'active' : '' }} w-full h-full" style="height:100%;">
                          <a href="#" onclick="event.preventDefault(); document.getElementById('form-berita-{{ $berita->id }}').submit();" style="display:block;height:100%;width:100%;">
                            <div class="relative w-full h-full" style="height:100%;">
                              <div class="w-full h-full overflow-hidden" style="height:100%;">
                                <img src="{{ asset('storage/' . $berita->image) }}" alt="{{ $berita->title }}" class="w-full h-full object-cover" style="height:100%;width:100%;object-fit:cover;">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent"></div>
                              </div>
                              <div class="absolute bottom-0 left-0 right-0 p-8 pb-10 text-white z-10">
                                <div class="flex items-center gap-2 mb-3">
                                  <span class="px-3 py-1 bg-blue-600/80 text-white text-xs font-medium rounded-full">{{ $berita->category }}</span>
                                  <span class="text-xs text-gray-200">{{ \Carbon\Carbon::parse($berita->published_at)->translatedFormat('l, d F Y') }}</span>
                                </div>
                                <h3 class="font-bold text-2xl lg:text-3xl mb-2 drop-shadow-lg">{{ $berita->title }}</h3>
                                <p class="text-blue-100 text-base mb-4 drop-shadow-lg" style="max-height:6.5rem;overflow:hidden;">{{ \Illuminate\Support\Str::limit(strip_tags($berita->content), 350) }}</p>
                              </div>
                            </div>
                          </a>
                          <form id="form-berita-{{ $berita->id }}" action="{{ route('berita.detail') }}" method="POST" style="display:none;">
                            @csrf
                            <input type="hidden" name="berita_id" value="{{ $berita->id }}">
                          </form>
                        </div>
                        @endforeach
                      </div>
                      <button class="carousel-control-prev" type="button" data-bs-target="#beritaCarousel" data-bs-slide="prev" style="width:48px;height:48px;top:50%;transform:translateY(-50%);left:-1px;">
                        <span class="carousel-control-prev-icon" aria-hidden="true" style="background: none; width: 32px; height: 32px;">
                          <!-- SVG panah kiri -->
                          <svg width="32" height="32" viewBox="0 0 32 32" fill="none">
                            <path d="M20 8L12 16L20 24" stroke="#fff" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                          </svg>
                        </span>
                        <span class="visually-hidden"></span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#beritaCarousel" data-bs-slide="next" style="width:48px;height:48px;top:50%;transform:translateY(-50%);right:-1px;">
                        <span class="carousel-control-next-icon" aria-hidden="true" style="background: none; width: 32px; height: 32px;">
                          <!-- SVG panah kanan -->
                          <svg width="32" height="32" viewBox="0 0 32 32" fill="none">
                            <path d="M12 8L20 16L12 24" stroke="#fff" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                          </svg>
                        </span>
                        <span class="visually-hidden"></span>
                      </button>
                      <div class="carousel-indicators mb-0">
                        @foreach($beritaCards as $i => $berita)
                          <button type="button" data-bs-target="#beritaCarousel" data-bs-slide-to="{{ $i }}" class="{{ $i == 0 ? 'active' : '' }}" aria-current="{{ $i == 0 ? 'true' : 'false' }}" aria-label="Slide {{ $i+1 }}"></button>
                        @endforeach
                      </div>
                    </div>
                    @else
                    <div class="text-white text-lg font-semibold p-8">Belum ada berita bergambar.</div>
                    @endif
                  </div>
                  <!-- 2 kolom berita terbaru diganti jadi 1 kolom scroll -->
                  <div class="col-span-1 lg:col-span-1 bg-gray-50 p-6 flex flex-col">
                    <div class="overflow-y-auto" style="max-height:400px;">
                      @foreach($beritaTerbaru as $i => $berita)
                        @if($i < 20)
                        <article class="bg-white rounded-lg p-4 shadow-sm hover:shadow-md transition-shadow duration-200 border-l-4 border-blue-600 flex flex-col justify-between mb-4">
                          <div>
                            <h5 class="font-semibold text-gray-900 text-base mb-2 line-clamp-2">{{ $berita->title }}</h5>
                            <div class="flex items-center text-xs text-gray-500 mb-1">
                              <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path>
                            </svg>
                              <span>{{ \Carbon\Carbon::parse($berita->published_at)->diffForHumans() }}</span>
                            </div>
                            <div class="text-xs text-gray-600 line-clamp-3 mb-2">{!! \Illuminate\Support\Str::limit(strip_tags($berita->content), 120) !!}</div>
                          </div>
                          <form action="{{ route('berita.detail') }}" method="POST" class="inline">
                            @csrf
                            <input type="hidden" name="berita_id" value="{{ $berita->id }}">
                            <button type="submit" class="inline-flex items-center text-blue-700 hover:text-blue-900 font-semibold text-sm mt-2">
                              Baca Selengkapnya
                              <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                              </svg>
                            </button>
                          </form>
                        </article>
                        @endif
                      @endforeach
                    </div>
                  </div>
                </div>
              </div>
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
</html>
  </body>
</html>

