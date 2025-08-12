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
            <!-- Introduction Section -->
            <section class="py-16 px-4 sm:px-6 lg:px-8">
                <div class="max-w-7xl mx-auto">
                    <div class="bg-white rounded-xl shadow-lg p-8 lg:p-12 mb-12">
                        <div class="text-center mb-12">
                            <h2 class="text-3xl font-bold text-gray-900 mb-4">Maklumat Pelayanan Satpol PP</h2>
                            <p class="text-lg text-gray-700 max-w-3xl mx-auto leading-relaxed">
                                Dengan ini kami menyatakan sanggup menyelenggarakan pelayanan sesuai dengan standar pelayanan yang telah ditetapkan 
                                dan apabila tidak menepati janji ini, kami siap menerima sanksi sesuai dengan peraturan perundang-undangan yang berlaku.
                            </p>
                        </div>
                    </div>

                    <!-- Jenis Pelayanan Section -->
                    <div class="mb-16">
                        <div class="text-center mb-12">
                            <h3 class="text-3xl font-bold text-gray-900 mb-4">Jenis Pelayanan</h3>
                            <div class="w-24 h-1 bg-blue-600 mx-auto rounded"></div>
                        </div>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                            <!-- Perizinan Keramaian -->
                            <div class="bg-white rounded-xl shadow-lg p-8 hover:shadow-xl transition-shadow duration-300">
                                <div class="bg-blue-100 rounded-full p-4 w-16 h-16 mx-auto mb-6 flex items-center justify-center">
                                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                                    </svg>
                                </div>
                                <h4 class="text-xl font-semibold text-gray-900 mb-4 text-center">Perizinan Keramaian</h4>
                                <p class="text-gray-600 text-center leading-relaxed mb-4">
                                    Pelayanan perizinan untuk kegiatan keramaian, hiburan umum, dan acara yang melibatkan banyak orang.
                                </p>
                                <div class="text-center">
                                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                        Waktu: 3 Hari Kerja
                                    </span>
                                </div>
                            </div>

                            <!-- Pengaduan Masyarakat -->
                            <div class="bg-white rounded-xl shadow-lg p-8 hover:shadow-xl transition-shadow duration-300">
                                <div class="bg-green-100 rounded-full p-4 w-16 h-16 mx-auto mb-6 flex items-center justify-center">
                                    <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"/>
                                    </svg>
                                </div>
                                <h4 class="text-xl font-semibold text-gray-900 mb-4 text-center">Pengaduan Masyarakat</h4>
                                <p class="text-gray-600 text-center leading-relaxed mb-4">
                                    Penerimaan dan penanganan pengaduan masyarakat terkait gangguan ketertiban dan ketentraman umum.
                                </p>
                                <div class="text-center">
                                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                        Waktu: 1 Hari Kerja
                                    </span>
                                </div>
                            </div>

                            <!-- Penegakan Perda -->
                            <div class="bg-white rounded-xl shadow-lg p-8 hover:shadow-xl transition-shadow duration-300">
                                <div class="bg-red-100 rounded-full p-4 w-16 h-16 mx-auto mb-6 flex items-center justify-center">
                                    <svg class="w-8 h-8 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.031 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                                    </svg>
                                </div>
                                <h4 class="text-xl font-semibold text-gray-900 mb-4 text-center">Penegakan Perda</h4>
                                <p class="text-gray-600 text-center leading-relaxed mb-4">
                                    Penegakan Peraturan Daerah dan Peraturan Kepala Daerah serta penindakan pelanggaran ketertiban umum.
                                </p>
                                <div class="text-center">
                                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-red-100 text-red-800">
                                        Waktu: Sesuai Ketentuan
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Standar Pelayanan Section -->
                    <div class="mb-16">
                        <div class="text-center mb-12">
                            <h3 class="text-3xl font-bold text-gray-900 mb-4">Standar Pelayanan</h3>
                            <div class="w-24 h-1 bg-green-600 mx-auto rounded"></div>
                        </div>

                        <div class="bg-white rounded-xl shadow-lg p-8 lg:p-12">
                            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                                <!-- Persyaratan Pelayanan -->
                                <div>
                                    <h4 class="text-2xl font-bold text-gray-900 mb-6">Persyaratan Pelayanan</h4>
                                    <div class="space-y-4">
                                        <div class="flex items-start">
                                            <div class="bg-blue-500 rounded-full p-1 mr-4 mt-1">
                                                <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                                </svg>
                                            </div>
                                            <p class="text-gray-700 leading-relaxed">Fotokopi KTP yang masih berlaku dan telah dilegalisir</p>
                                        </div>
                                        <div class="flex items-start">
                                            <div class="bg-blue-500 rounded-full p-1 mr-4 mt-1">
                                                <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                                </svg>
                                            </div>
                                            <p class="text-gray-700 leading-relaxed">Surat permohonan yang ditandatangani di atas materai</p>
                                        </div>
                                        <div class="flex items-start">
                                            <div class="bg-blue-500 rounded-full p-1 mr-4 mt-1">
                                                <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                                </svg>
                                            </div>
                                            <p class="text-gray-700 leading-relaxed">Proposal kegiatan lengkap dengan jadwal dan rundown acara</p>
                                        </div>
                                        <div class="flex items-start">
                                            <div class="bg-blue-500 rounded-full p-1 mr-4 mt-1">
                                                <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                                </svg>
                                            </div>
                                            <p class="text-gray-700 leading-relaxed">Surat keterangan dari RT/RW setempat</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Prosedur Pelayanan -->
                                <div>
                                    <h4 class="text-2xl font-bold text-gray-900 mb-6">Prosedur Pelayanan</h4>
                                    <div class="space-y-4">
                                        <div class="flex items-start">
                                            <div class="bg-green-500 rounded-full p-1 mr-4 mt-1 flex items-center justify-center min-w-6 h-6">
                                                <span class="text-white text-xs font-bold">1</span>
                                            </div>
                                            <p class="text-gray-700 leading-relaxed">Pemohon menyerahkan berkas persyaratan ke loket pendaftaran</p>
                                        </div>
                                        <div class="flex items-start">
                                            <div class="bg-green-500 rounded-full p-1 mr-4 mt-1 flex items-center justify-center min-w-6 h-6">
                                                <span class="text-white text-xs font-bold">2</span>
                                            </div>
                                            <p class="text-gray-700 leading-relaxed">Petugas melakukan verifikasi dan validasi berkas</p>
                                        </div>
                                        <div class="flex items-start">
                                            <div class="bg-green-500 rounded-full p-1 mr-4 mt-1 flex items-center justify-center min-w-6 h-6">
                                                <span class="text-white text-xs font-bold">3</span>
                                            </div>
                                            <p class="text-gray-700 leading-relaxed">Proses penerbitan rekomendasi/izin oleh petugas yang berwenang</p>
                                        </div>
                                        <div class="flex items-start">
                                            <div class="bg-green-500 rounded-full p-1 mr-4 mt-1 flex items-center justify-center min-w-6 h-6">
                                                <span class="text-white text-xs font-bold">4</span>
                                            </div>
                                            <p class="text-gray-700 leading-relaxed">Penyerahan hasil pelayanan kepada pemohon</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Informasi Pelayanan -->
                    <div class="bg-gradient-to-r from-blue-600 to-indigo-700 rounded-xl shadow-lg p-8 lg:p-12 text-white mb-16">
                        <div class="text-center mb-12">
                            <h3 class="text-3xl font-bold mb-4">Informasi Pelayanan</h3>
                            <p class="text-blue-100 text-lg max-w-2xl mx-auto">
                                Informasi lengkap mengenai biaya, waktu, dan lokasi pelayanan Satpol PP Kota Tasikmalaya
                            </p>
                        </div>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                            <div class="bg-white/10 backdrop-blur-sm rounded-lg p-6 text-center">
                                <div class="bg-white/20 rounded-full p-4 w-16 h-16 mx-auto mb-4 flex items-center justify-center">
                                    <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z"/>
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <h4 class="font-semibold mb-2">Biaya</h4>
                                <p class="text-sm text-blue-100">GRATIS sesuai Perda No. 8 Tahun 2020</p>
                            </div>
                            
                            <div class="bg-white/10 backdrop-blur-sm rounded-lg p-6 text-center">
                                <div class="bg-white/20 rounded-full p-4 w-16 h-16 mx-auto mb-4 flex items-center justify-center">
                                    <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <h4 class="font-semibold mb-2">Jam Pelayanan</h4>
                                <p class="text-sm text-blue-100">Senin - Jumat<br>08:00 - 16:00 WIB</p>
                            </div>
                            
                            <div class="bg-white/10 backdrop-blur-sm rounded-lg p-6 text-center">
                                <div class="bg-white/20 rounded-full p-4 w-16 h-16 mx-auto mb-4 flex items-center justify-center">
                                    <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <h4 class="font-semibold mb-2">Lokasi</h4>
                                <p class="text-sm text-blue-100">Kantor Satpol PP<br>Jl. Sutisna Senjaya No.1</p>
                            </div>
                            
                            <div class="bg-white/10 backdrop-blur-sm rounded-lg p-6 text-center">
                                <div class="bg-white/20 rounded-full p-4 w-16 h-16 mx-auto mb-4 flex items-center justify-center">
                                    <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                                    </svg>
                                </div>
                                <h4 class="font-semibold mb-2">Kontak</h4>
                                <p class="text-sm text-blue-100">(0265) 331 448<br>satpol@tasikmalayakota.go.id</p>
                            </div>
                        </div>
                    </div>

                    <!-- Pengaduan dan Saran -->
                    <div class="bg-white rounded-xl shadow-lg p-8 lg:p-12">
                        <div class="text-center mb-12">
                            <h3 class="text-3xl font-bold text-gray-900 mb-4">Pengaduan dan Saran</h3>
                            <p class="text-lg text-gray-700 max-w-3xl mx-auto leading-relaxed">
                                Kami terbuka untuk menerima masukan, saran, dan pengaduan dari masyarakat untuk meningkatkan kualitas pelayanan
                            </p>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                            <div class="text-center">
                                <div class="bg-blue-100 rounded-full p-4 w-16 h-16 mx-auto mb-4 flex items-center justify-center">
                                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                    </svg>
                                </div>
                                <h4 class="text-xl font-semibold text-gray-900 mb-2">Email</h4>
                                <p class="text-gray-600">satpol@tasikmalayakota.go.id</p>
                            </div>

                            <div class="text-center">
                                <div class="bg-green-100 rounded-full p-4 w-16 h-16 mx-auto mb-4 flex items-center justify-center">
                                    <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                    </svg>
                                </div>
                                <h4 class="text-xl font-semibold text-gray-900 mb-2">Telepon</h4>
                                <p class="text-gray-600">(0265) 331 448</p>
                            </div>

                            <div class="text-center">
                                <div class="bg-purple-100 rounded-full p-4 w-16 h-16 mx-auto mb-4 flex items-center justify-center">
                                    <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    </svg>
                                </div>
                                <h4 class="text-xl font-semibold text-gray-900 mb-2">Kunjungi Langsung</h4>
                                <p class="text-gray-600">Jl. Sutisna Senjaya No.1<br>Tasikmalaya</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>
    <x-footer />
</body>
</html>
