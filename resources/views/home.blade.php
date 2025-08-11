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
  </head>
  <body class="h-full">
    <div class="min-h-full">
      <x-navbar></x-navbar>
      
      <!-- Banner with fallback props to prevent database issues -->
      <x-banner 
        judul="SATPOL PP"
        sub_judul="Kota Tasikmalaya"
        deskripsi="Satuan Polisi Pamong Praja Kota Tasikmalaya menjaga ketertiban, keamanan, dan kenyamanan masyarakat dengan integritas dan profesionalisme."
        logo="img/logo-Pol-PP-png.webp"
        logoAlt="Logo Satpol PP Tasikmalaya"
        :showLogo="true"
        :showNavigation="true"
        :showStats="true"
      />
      
      <main>
        <!-- Profile Card Section -->
        <section class="bg-white py-12 sm:py-16 border-b border-gray-100">
          
          <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="bg-gradient-to-r from-blue-600 to-blue-800 rounded-3xl shadow-2xl overflow-hidden">
              <div class="relative px-8 py-12 lg:px-16 lg:py-16">
                <!-- Background Pattern -->
                <div class="absolute inset-0 bg-gradient-to-br from-blue-600/90 to-blue-800/90"></div>
                <div class="absolute top-0 right-0 w-96 h-96 bg-white/5 rounded-full -mr-48 -mt-48"></div>
                <div class="absolute bottom-0 left-0 w-64 h-64 bg-white/5 rounded-full -ml-32 -mb-32"></div>
                
                <div class="relative z-10 grid grid-cols-1 lg:grid-cols-3 gap-8 items-center">
               
                  
                  <!-- Profile Info -->
                  <div class="lg:col-span-2 text-center lg:text-left">
                    <div class="mb-6">
                      <h3 class="text-2xl lg:text-3xl font-bold text-white mb-2">Dr. Ahmad Syahputra, S.STP., M.Si</h3>
                      <p class="text-blue-100 text-lg font-medium">Kepala Satuan Polisi Pamong Praja Kota Tasikmalaya</p>
                    </div>
                    
                    <!-- Quote -->
                    <div class="relative">
                      <svg class="absolute -top-2 -left-2 w-8 h-8 text-white/30" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h4v10h-10z"/>
                      </svg>
                      <blockquote class="text-white/95 text-lg lg:text-xl leading-relaxed italic pl-6">
                        "Kami berkomitmen untuk menciptakan ketertiban dan kedamaian di Kota Tasikmalaya melalui pelayanan yang profesional, transparan, dan berorientasi pada kepentingan masyarakat."
                      </blockquote>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>


        <!-- Bento Navigation Section -->
        <section class="bg-gradient-to-br from-gray-50 to-blue-50 py-16 sm:py-20">
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
        <section class="bg-white py-16 sm:py-20 ">
          <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <!-- News Highlights -->
            <div class="mb-16">
              <h2 class="text-2xl font-bold text-gray-900 mb-8">Sorotan Utama</h2>
              
              <!-- Main Banner Card -->
              <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
                <div class="grid grid-cols-1 lg:grid-cols-3 min-h-[400px]">
                  
                  <!-- Slide Banner Section -->
                  <div class="lg:col-span-2 relative bg-gradient-to-br from-blue-600 to-blue-800 overflow-hidden" x-data="{ currentSlide: 0, slides: [
                    {
                      title: 'Operasi Tertib PKL di Kawasan Pusat Kota',
                      description: 'Tim Satpol PP melakukan operasi penertiban pedagang kaki lima untuk menciptakan ketertiban dan kenyamanan di pusat kota.',
                      image: '/img/slide1.jpg',
                      date: '3 hari yang lalu'
                    },
                    {
                      title: 'Sosialisasi Peraturan Daerah kepada Masyarakat',
                      description: 'Kegiatan sosialisasi peraturan daerah dilakukan untuk meningkatkan kesadaran masyarakat tentang pentingnya ketertiban umum.',
                      image: '/img/slide2.jpg',
                      date: '1 minggu yang lalu'
                    },
                    {
                      title: 'Patroli Keamanan dan Ketertiban Rutin',
                      description: 'Patroli rutin dilakukan untuk menjaga keamanan dan ketertiban di wilayah Kota Tasikmalaya setiap hari.',
                      image: '/img/slide3.jpg',
                      date: '2 minggu yang lalu'
                    }
                  ] }" x-init="setInterval(() => { currentSlide = (currentSlide + 1) % slides.length }, 5000)">
                    
                    <!-- Banner Background with Overlay -->
                    <div class="absolute inset-0 bg-gradient-to-r from-black/60 to-black/20"></div>
                    
                    <!-- Slide Content Container with Fixed Height -->
                    <div class="relative h-full min-h-[400px] flex items-end">
                      <template x-for="(slide, index) in slides" :key="index">
                        <div x-show="currentSlide === index" 
                             x-transition:enter="transition ease-out duration-500" 
                             x-transition:enter-start="opacity-0 transform translate-x-8" 
                             x-transition:enter-end="opacity-100 transform translate-x-0" 
                             x-transition:leave="transition ease-in duration-300" 
                             x-transition:leave-start="opacity-100 transform translate-x-0" 
                             x-transition:leave-end="opacity-0 transform translate-x-8"
                             class="absolute inset-0 p-8 flex flex-col justify-end z-10">
                          <div class="max-w-lg space-y-4">
                            <span class="inline-block bg-red-500 text-white text-xs font-bold px-3 py-1 rounded-full" x-text="slide.date"></span>
                            <h3 class="text-2xl lg:text-3xl font-bold text-white leading-tight line-clamp-2 min-h-[4rem] lg:min-h-[5rem]" x-text="slide.title"></h3>
                            <p class="text-blue-100 leading-relaxed line-clamp-3 min-h-[4.5rem]" x-text="slide.description"></p>
                            <div class="pt-2">
                              <a href="{{ url('/berita') }}" class="inline-flex items-center bg-white/20 backdrop-blur-sm text-white px-6 py-3 rounded-lg hover:bg-white/30 transition-all duration-300 font-medium">
                                Baca Selengkapnya
                                <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                  <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                </svg>
                              </a>
                            </div>
                          </div>
                        </div>
                      </template>
                    </div>
                    
                    <!-- Slide Indicators -->
                    <div class="absolute bottom-4 left-8 flex space-x-2 z-30">
                      <template x-for="(slide, index) in slides" :key="index">
                        <button @click="currentSlide = index" class="w-3 h-3 rounded-full transition-all duration-300" :class="currentSlide === index ? 'bg-white' : 'bg-white/50'"></button>
                      </template>
                    </div>
                    
                    <!-- Navigation Buttons -->
                    <button @click="currentSlide = currentSlide === 0 ? slides.length - 1 : currentSlide - 1" class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-white/20 backdrop-blur-sm text-white p-2 rounded-full hover:bg-white/30 transition-all duration-300 z-30">
                      <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                      </svg>
                    </button>
                    <button @click="currentSlide = (currentSlide + 1) % slides.length" class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-white/20 backdrop-blur-sm text-white p-2 rounded-full hover:bg-white/30 transition-all duration-300 z-30">
                      <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                      </svg>
                    </button>
                  </div>
                  
                  <!-- Sidebar - Latest News & Articles -->
                  <div class="bg-gray-50 p-6 flex flex-col">
                    
                    <!-- Side by Side Layout for News and Articles -->
                    <div class="grid grid-cols-1 xl:grid-cols-2 gap-6 h-full">
                      
                      <!-- Latest News Section -->
                      <div class="flex flex-col">
                        <div class="flex items-center justify-between mb-4">
                          <h4 class="text-base font-bold text-gray-900 flex items-center">
                            <svg class="w-4 h-4 text-red-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                              <path fill-rule="evenodd" d="M2 5a2 2 0 012-2h8a2 2 0 012 2v10a2 2 0 002 2H4a2 2 0 01-2-2V5zm3 1h6v4H5V6zm6 6H5v2h6v-2z" clip-rule="evenodd"></path>
                            </svg>
                            Berita Terbaru
                          </h4>
                          <a href="{{ url('/berita') }}" class="text-xs text-blue-600 hover:text-blue-800 font-medium">Lihat Semua</a>
                        </div>
                        
                        <div class="space-y-3 flex-1">
                          <article class="bg-white rounded-lg p-3 shadow-sm hover:shadow-md transition-shadow duration-200 border-l-4 border-red-500">
                            <h5 class="font-semibold text-gray-900 text-xs mb-2 line-clamp-2">Rapat Koordinasi Penertiban Kawasan Wisata</h5>
                            <div class="flex items-center text-xs text-gray-500">
                              <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path>
                            </svg>
                              <span>1 hari yang lalu</span>
                            </div>
                          </article>
                          
                          <article class="bg-white rounded-lg p-3 shadow-sm hover:shadow-md transition-shadow duration-200 border-l-4 border-orange-500">
                            <h5 class="font-semibold text-gray-900 text-xs mb-2 line-clamp-2">Pelatihan Protokol Kesehatan untuk Petugas</h5>
                            <div class="flex items-center text-xs text-gray-500">
                              <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path>
                              </svg>
                              <span>2 hari yang lalu</span>
                            </div>
                          </article>

                          <article class="bg-white rounded-lg p-3 shadow-sm hover:shadow-md transition-shadow duration-200 border-l-4 border-blue-500">
                            <h5 class="font-semibold text-gray-900 text-xs mb-2 line-clamp-2">Monitoring Kegiatan Pasar Tradisional</h5>
                            <div class="flex items-center text-xs text-gray-500">
                              <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path>
                              </svg>
                              <span>4 hari yang lalu</span>
                            </div>
                          </article>
                        </div>
                      </div>
                      
                      <!-- Latest Articles Section -->
                      <div class="flex flex-col">
                        <div class="flex items-center justify-between mb-4">
                          <h4 class="text-base font-bold text-gray-900 flex items-center">
                            <svg class="w-4 h-4 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                              <path d="M9 4.804A7.968 7.968 0 005.5 4c-1.255 0-2.443.29-3.5.804v10A7.969 7.969 0 015.5 14c1.669 0 3.218.51 4.5 1.385A7.962 7.962 0 0114.5 14c1.255 0 2.443.29 3.5.804v-10A7.968 7.968 0 0014.5 4c-1.255 0-2.443.29-3.5.804V12a1 1 0 11-2 0V4.804z"></path>
                            </svg>
                            Artikel Terbaru
                          </h4>
                          <a href="{{ url('/artikel') }}" class="text-xs text-blue-600 hover:text-blue-800 font-medium">Lihat Semua</a>
                        </div>
                        
                        <div class="space-y-3 flex-1">
                          <article class="bg-white rounded-lg p-3 shadow-sm hover:shadow-md transition-shadow duration-200 border-l-4 border-green-500">
                            <h5 class="font-semibold text-gray-900 text-xs mb-2 line-clamp-2">Pentingnya Ketertiban dalam Kehidupan Bermasyarakat</h5>
                            <div class="flex items-center text-xs text-gray-500">
                              <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path>
                              </svg>
                              <span>3 hari yang lalu</span>
                            </div>
                          </article>
                          
                          <article class="bg-white rounded-lg p-3 shadow-sm hover:shadow-md transition-shadow duration-200 border-l-4 border-purple-500">
                            <h5 class="font-semibold text-gray-900 text-xs mb-2 line-clamp-2">Panduan Perizinan Keramaian di Era Digital</h5>
                            <div class="flex items-center text-xs text-gray-500">
                              <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path>
                              </svg>
                              <span>5 hari yang lalu</span>
                            </div>
                          </article>

                          <article class="bg-white rounded-lg p-3 shadow-sm hover:shadow-md transition-shadow duration-200 border-l-4 border-teal-500">
                            <h5 class="font-semibold text-gray-900 text-xs mb-2 line-clamp-2">Tips Menjaga Keamanan Lingkungan Sekitar</h5>
                            <div class="flex items-center text-xs text-gray-500">
                              <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path>
                              </svg>
                              <span>1 minggu yang lalu</span>
                            </div>
                          </article>
                        </div>
                      </div>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Content Previews -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-16">
              <!-- Tentang Kami Preview -->
              <div class="bg-white rounded-xl shadow-lg p-8">
                <h3 class="text-2xl font-bold text-blue-900 mb-4">Tentang Satpol PP Tasikmalaya</h3>
                <p class="text-gray-600 mb-4">
                  Satuan Polisi Pamong Praja Kota Tasikmalaya adalah unsur pelaksana Pemerintah Daerah di bidang ketertiban umum, perlindungan masyarakat, dan penegakan Peraturan Daerah.
                </p>
                <div class="space-y-3">
                  <div class="flex items-start space-x-3">
                    <div class="flex-shrink-0 w-6 h-6 bg-blue-100 rounded-full flex items-center justify-center">
                      <svg class="w-4 h-4 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                      </svg>
                    </div>
                    <p class="text-sm text-gray-600">Penegakan Peraturan Daerah</p>
                  </div>
                  <div class="flex items-start space-x-3">
                    <div class="flex-shrink-0 w-6 h-6 bg-blue-100 rounded-full flex items-center justify-center">
                      <svg class="w-4 h-4 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                      </svg>
                    </div>
                    <p class="text-sm text-gray-600">Penyelenggaraan Ketertiban Umum</p>
                  </div>
                  <div class="flex items-start space-x-3">
                    <div class="flex-shrink-0 w-6 h-6 bg-blue-100 rounded-full flex items-center justify-center">
                      <svg class="w-4 h-4 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                      </svg>
                    </div>
                    <p class="text-sm text-gray-600">Perlindungan Masyarakat</p>
                  </div>
                </div>
                <a href="{{ url('/tentangkami') }}" class="inline-flex items-center text-blue-700 hover:text-blue-800 font-medium mt-4">
                  Selengkapnya
                  <svg class="ml-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                  </svg>
                </a>
              </div>

              <!-- Layanan Preview -->
              <div class="bg-white rounded-xl shadow-lg p-8">
                <h3 class="text-2xl font-bold text-blue-900 mb-4">Layanan Kami</h3>
                <p class="text-gray-600 mb-4">
                  Berbagai layanan publik yang dapat diakses masyarakat untuk mendukung terciptanya ketertiban dan kenyamanan bersama.
                </p>
                <div class="grid grid-cols-1 gap-3">
                  <div class="flex items-center space-x-3 p-3 bg-gray-50 rounded-lg">
                    <div class="w-8 h-8 bg-blue-600 rounded-full flex items-center justify-center">
                      <span class="text-white text-sm font-bold">1</span>
                    </div>
                    <div>
                      <p class="font-medium text-gray-900">Perizinan Keramaian</p>
                      <p class="text-sm text-gray-600">Izin penyelenggaraan acara</p>
                    </div>
                  </div>
                  <div class="flex items-center space-x-3 p-3 bg-gray-50 rounded-lg">
                    <div class="w-8 h-8 bg-blue-600 rounded-full flex items-center justify-center">
                      <span class="text-white text-sm font-bold">2</span>
                    </div>
                    <div>
                      <p class="font-medium text-gray-900">Pelaporan Gangguan</p>
                      <p class="text-sm text-gray-600">Laporan ketertiban umum</p>
                    </div>
                  </div>
                  <div class="flex items-center space-x-3 p-3 bg-gray-50 rounded-lg">
                    <div class="w-8 h-8 bg-blue-600 rounded-full flex items-center justify-center">
                      <span class="text-white text-sm font-bold">3</span>
                    </div>
                    <div>
                      <p class="font-medium text-gray-900">Konsultasi Perda</p>
                      <p class="text-sm text-gray-600">Informasi peraturan daerah</p>
                    </div>
                  </div>
                </div>
                <a href="{{ url('/layanan') }}" class="inline-flex items-center text-blue-700 hover:text-blue-800 font-medium mt-4">
                  Lihat Semua Layanan
                  <svg class="ml-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                  </svg>
                </a>
              </div>
            </div>

            <!-- Contact and Location -->
            <div class="bg-gradient-to-r from-blue-50 to-blue-100 rounded-2xl p-8">
              <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <div>
                  <h3 class="text-2xl font-bold text-blue-900 mb-4">Hubungi Kami</h3>
                  <div class="space-y-4">
                    <div class="flex items-start space-x-3">
                      <svg class="w-6 h-6 text-blue-600 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                      </svg>
                      <div>
                        <p class="font-medium text-gray-900">Alamat</p>
                        <p class="text-gray-600">Jl. Yudanegara No. 25, Tasikmalaya, Jawa Barat</p>
                      </div>
                    </div>
                    <div class="flex items-start space-x-3">
                      <svg class="w-6 h-6 text-blue-600 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                      </svg>
                      <div>
                        <p class="font-medium text-gray-900">Telepon</p>
                        <p class="text-gray-600">(0265) 123456</p>
                      </div>
                    </div>
                    <div class="flex items-start space-x-3">
                      <svg class="w-6 h-6 text-blue-600 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                      </svg>
                      <div>
                        <p class="font-medium text-gray-900">Jam Operasional</p>
                        <p class="text-gray-600">Senin - Jumat: 08:00 - 16:00 WIB</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div>
                  <h3 class="text-2xl font-bold text-blue-900 mb-4">Layanan Darurat</h3>
                  <div class="bg-red-50 border border-red-200 rounded-lg p-4 mb-4">
                    <div class="flex items-center">
                      <svg class="w-6 h-6 text-red-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L3.732 16.5c-.77.833.192 2.5 1.732 2.5z"></path>
                      </svg>
                      <div>
                        <p class="font-bold text-red-800">Hotline Darurat</p>
                        <p class="text-red-700 text-lg font-bold">0811-2345-678</p>
                      </div>
                    </div>
                  </div>
                  <p class="text-gray-600">
                    Untuk pelaporan insiden yang memerlukan tindakan segera, silakan hubungi hotline darurat kami yang beroperasi 24 jam.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </section>
      </main>
    </div>
    <x-footer></x-footer>
  </body>
</html>
