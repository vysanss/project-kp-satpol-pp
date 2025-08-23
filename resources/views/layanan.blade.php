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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
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
                                    @php
                                        use Illuminate\Support\Str;
                                    @endphp
                                    @foreach($layanans as $layanan)
                                    <div class="bg-gray-50 rounded-lg shadow p-6 flex flex-col items-center h-full transform hover:scale-105 transition-transform duration-200">
                                        <div class="rounded-full p-4 mb-4 flex items-center justify-center" style="background-color: #f0f4ff;">
                                            @php
                                                $icon = $layanan->icon;
                                            @endphp
                                            @if(Str::startsWith($icon, '<svg'))
                                                <span style="width:3rem;height:3rem;display:flex;align-items:center;justify-content:center;">
                                                    {!! $icon !!}
                                                </span>
                                            @elseif(Str::contains($icon, 'fa-'))
                                                <i class="{{ $icon }} fa-2x text-blue-500"></i>
                                            @else
                                                <x-dynamic-icon :name="$icon" class="h-12 w-12 text-blue-500" />
                                            @endif
                                        </div>
                                        <h2 class="text-xl font-semibold mb-2 text-center">{{ $layanan->title }}</h2>
                                        <p class="text-gray-600 text-center">
                                            {{ $layanan->description }}
                                        </p>
                                    </div>
                                    @endforeach
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
