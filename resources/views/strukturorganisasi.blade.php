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
            <section class="flex justify-center items-center py-4 px-4 sm:px-8">
                <div class="w-full max-w-6xl rounded-xl shadow-lg p-8 sm:p-12">
                    <p class="text-lg text-gray-700 leading-relaxed text-justify mb-8">
                        Berikut adalah struktur organisasi Satpol PP Kota Tasikmalaya yang menggambarkan susunan dan peran masing-masing bagian dalam menjalankan tugas dan fungsi pelayanan kepada masyarakat.
                    </p>
                    <img src="/img/strukturorganisasi.webp" alt="Struktur Organisasi Satpol PP Kota Tasikmalaya" class="mx-auto w-full max-w-6xl">
                </div>
            </section>
        </main>
    </div>
    <x-footer />
</body>
</html>