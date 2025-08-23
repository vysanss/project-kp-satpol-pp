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
    <title>Struktur Organisasi - Satpol PP Tasikmalaya</title>
</head>
<body class="h-full">
    <div class="min-h-full">
        <x-navbar />
        <x-banner
            :bannerId="3"
        />
        <main>
            <section class="flex justify-center items-center py-0 px-0">
                <div class="w-full max-w-6xl rounded-xl shadow-lg p-0">
                    {{-- Tampilkan deskripsi paling atas (ambil dari item pertama jika ada) --}}
                    @if($items->count())
                        <p class="text-lg text-gray-700 leading-relaxed text-justify mb-8 px-8 pt-8">
                            {{ $items->first()->deskripsi }}
                        </p>
                    @endif

                    <div class="flex flex-wrap gap-0 justify-center">
                        @foreach($items as $item)
                            @if($item->foto)
                                <img src="{{ asset('storage/'.$item->foto) }}" alt="Foto" class="w-full object-cover mb-6">
                            @else
                                <div class="w-full flex items-center justify-center bg-gray-200 mb-6 text-gray-400 text-4xl" style="aspect-ratio: 2/1;">
                                    Tidak ada foto
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