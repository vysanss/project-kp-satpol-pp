@props([
    'banner' => null,
    'judul' => 'SATPOL PP',
    'sub_judul' => 'Kota Tasikmalaya',
    'deskripsi' => 'Satuan Polisi Pamong Praja Kota Tasikmalaya menjaga ketertiban, keamanan, dan kenyamanan masyarakat dengan integritas dan profesionalisme.',
    'logo' => 'img/logo-Pol-PP-png.webp',
    'logoAlt' => 'Logo Satpol PP Tasikmalaya',
    'showLogo' => true,
    'showNavigation' => true,
    'showStats' => true,
    'navigationItems' => [
        [
            'url' => '/tentangkami',
            'label' => 'Tentang Kami',
            'icon' => 'M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z'
        ],
        [
            'url' => '/layanan',
            'label' => 'Layanan Publik',
            'icon' => 'M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z'
        ],
        [
            'url' => '/berita',
            'label' => 'Berita Terkini',
            'icon' => 'M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z'
        ],
        [
            'url' => '#',
            'label' => 'Kontak Kami',
            'icon' => 'M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z'
        ]
    ],
    'stats' => [
        ['value' => '20+', 'label' => 'Tahun Melayani'],
        ['value' => '150+', 'label' => 'Personil Aktif'],
        ['value' => '10', 'label' => 'Kecamatan'],
        ['value' => '69', 'label' => 'Kelurahan']
    ]
])

@php
    // Try to get banner from database only if Banner model exists and no props provided
    $bannerData = null;
    
    if ($banner) {
        $bannerData = $banner;
    } elseif (class_exists('App\Models\Banner')) {
        try {
            $bannerData = \App\Models\Banner::active()->first();
        } catch (\Exception $e) {
            // Database connection failed, use fallback
            $bannerData = null;
        }
    }
    
    // Use props as fallback if no database data
    if (!$bannerData) {
        $bannerData = (object) [
            'judul' => $judul,
            'sub_judul' => $sub_judul,
            'deskripsi' => $deskripsi,
            'logo' => $logo,
            'logo_alt' => $logoAlt,
            'show_logo' => $showLogo,
            'show_navigation' => $showNavigation,
            'show_stats' => $showStats,
            'navigation_items' => $navigationItems,
            'stats' => $stats
        ];
    }
@endphp

<!-- Hero Banner Satpol PP Tasikmalaya -->
<div class="relative isolate overflow-hidden bg-gradient-to-br from-blue-900 via-blue-800 to-indigo-900 py-8 sm:py-12 lg:py-16">
  <!-- Background overlay -->
  <div class="absolute inset-0 bg-black/30"></div>
  
  <!-- Background pattern -->
  <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23ffffff" fill-opacity="0.1"%3E%3Ccircle cx="30" cy="30" r="2"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
  
  <!-- Decorative elements -->
  <div aria-hidden="true" class="hidden sm:absolute sm:-top-10 sm:right-1/2 sm:-z-10 sm:mr-10 sm:block sm:transform-gpu sm:blur-3xl">
    <div style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)" class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-blue-400 to-indigo-400 opacity-20"></div>
  </div>
  <div aria-hidden="true" class="absolute -top-52 left-1/2 -z-10 -translate-x-1/2 transform-gpu blur-3xl sm:top-[-28rem] sm:ml-16 sm:translate-x-0 sm:transform-gpu">
    <div style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)" class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-blue-400 to-indigo-400 opacity-20"></div>
  </div>
  
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 relative z-10">
    <div class="mx-auto max-w-4xl text-center">
      @if($bannerData->show_logo)
      <!-- Logo -->
      <div class="mb-3 sm:mb-4 flex justify-center">
        <img src="{{ asset($bannerData->logo) }}" alt="{{ $bannerData->logo_alt }}" class="h-12 w-12 sm:h-16 sm:w-16 lg:h-20 lg:w-20 object-contain">
      </div>
      @endif
      <!-- Main Title -->
      <h1 class="text-xl font-bold tracking-tight text-white sm:text-2xl lg:text-4xl">
        {{ $bannerData->judul }}
      </h1>
      <h2 class="text-base font-semibold text-blue-200 sm:text-lg lg:text-2xl mt-1 mb-3 sm:mb-4">
        {{ $bannerData->sub_judul }}
      </h2>
      <!-- Subtitle -->
      <p class="mt-2 sm:mt-4 text-sm font-medium text-gray-200 sm:text-base lg:text-lg max-w-2xl mx-auto leading-relaxed px-2">
        {{ $bannerData->deskripsi }}
      </p>
    </div>
    
    @if($bannerData->show_navigation && $bannerData->navigation_items)
    <!-- Navigation Links -->
    <div class="mx-auto mt-4 sm:mt-6 max-w-2xl lg:mx-0 lg:max-w-none">
      <div class="grid grid-cols-2 gap-2 sm:gap-x-4 sm:gap-y-3 text-xs sm:text-sm font-semibold text-white lg:flex lg:gap-x-5 justify-center">
        @foreach($bannerData->navigation_items as $item)
        <a href="{{ url($item['url']) }}" class="hover:text-blue-300 transition-colors duration-300 flex flex-col sm:flex-row items-center text-center sm:text-left p-2 sm:p-0">
          <svg class="w-5 h-5 sm:w-6 sm:h-6 lg:w-7 lg:h-7 mb-1 sm:mb-0 sm:mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $item['icon'] }}"></path>
          </svg>
          <span class="sm:inline">{{ $item['label'] }}</span> <span aria-hidden="true" class="hidden sm:inline">&rarr;</span>
        </a>
        @endforeach
      </div>
      
      @if($bannerData->show_stats && $bannerData->stats)
      <!-- Statistics -->
      <dl class="mt-6 sm:mt-8 lg:mt-10 grid grid-cols-2 gap-3 sm:gap-4 lg:grid-cols-4 text-center px-2">
        @foreach($bannerData->stats as $stat)
        <div class="flex flex-col-reverse gap-1">
          <dt class="text-xs text-blue-200">{{ $stat['label'] }}</dt>
          <dd class="text-lg sm:text-2xl font-semibold tracking-tight text-white">{{ $stat['value'] }}</dd>
        </div>
        @endforeach
      </dl>
      @endif
    </div>
    @endif
  </div>
  
  <!-- Wave bottom decoration -->
  <div class="absolute bottom-0 left-0 right-0">
    <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0 120V20C240 60 480 20 720 40C960 60 1200 20 1440 60V120H0Z" fill="white" fill-opacity="0.1"/>
    </svg>
  </div>
</div>
