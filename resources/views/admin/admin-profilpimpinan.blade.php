<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Security-Policy" content="script-src 'self' 'unsafe-inline' 'unsafe-eval' https://cdn.tailwindcss.com https://cdn.ckeditor.com https://cdnjs.cloudflare.com; style-src 'self' 'unsafe-inline' https://cdnjs.cloudflare.com; img-src 'self' data: https:; font-src 'self' https://cdnjs.cloudflare.com;">
    <title>Kelola Profil Pimpinan - Admin</title>
    <link rel="apple-touch-icon" sizes="180x180" href="/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="/img/favicon/site.webmanifest">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- CKEditor 5 CDN with Upload Adapter -->
    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/upload/upload.js"></script>
</head>
<body class="bg-gray-100 pt-20">
    <x-admin.navbar />
    <div class="max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
        <!-- Bento Grid Layout -->
        <div class="grid grid-cols-1 gap-6 mb-8">
            <div class="bg-gradient-to-br from-blue-500 to-purple-600 rounded-2xl shadow-xl p-8 text-white">
                <div class="flex items-center justify-between">
                    <div>
                        <h2 class="text-3xl font-bold mb-2">Kelola Profil Pimpinan</h2>
                        <p class="text-blue-100 text-lg">Edit konten profil pimpinan</p>
                    </div>
                    <div class="hidden md:block">
                        <div class="w-20 h-20 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center">
                            <i class="fas fa-user-tie text-3xl"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @if(session('success'))
            <div id="success-message" class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        @if(isset($profilpimpinan) && $profilpimpinan instanceof \Illuminate\Database\Eloquent\Collection)
            @php
                $profilpimpinan = $profilpimpinan->first();
            @endphp
        @endif
        @if(isset($profilpimpinan) && $profilpimpinan)
        <form id="update-profilpimpinan-form" action="{{ route('admin.profilpimpinan.update', $profilpimpinan->id) }}" method="POST" enctype="multipart/form-data" class="bg-white p-6 rounded shadow-md mb-8">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label class="block font-bold mb-2">Nama</label>
                <input type="text" name="nama" value="{{ old('nama', $profilpimpinan->nama) }}" class="w-full border rounded px-3 py-2" required>
            </div>
            <div class="mb-4">
                <label class="block font-bold mb-2">Gelar Depan</label>
                <input type="text" name="gelar_depan" value="{{ old('gelar_depan', $profilpimpinan->gelar_depan) }}" class="w-full border rounded px-3 py-2">
            </div>
            <div class="mb-4">
                <label class="block font-bold mb-2">Gelar Belakang</label>
                <input type="text" name="gelar_belakang" value="{{ old('gelar_belakang', $profilpimpinan->gelar_belakang) }}" class="w-full border rounded px-3 py-2">
            </div>
            <div class="mb-4">
                <label class="block font-bold mb-2">Jabatan</label>
                <input type="text" name="jabatan" value="{{ old('jabatan', $profilpimpinan->jabatan) }}" class="w-full border rounded px-3 py-2" required>
            </div>
            <div class="mb-4">
                <label class="block font-bold mb-2">Pesan</label>
                <textarea id="pesan" name="pesan" class="w-full border rounded px-3 py-2">{{ old('pesan', $profilpimpinan->pesan) }}</textarea>
            </div>
            <div class="mb-4">
                <label class="block font-bold mb-2">Foto</label>
                @if($profilpimpinan->foto)
                    <img id="foto-preview" src="{{ asset('storage/' . $profilpimpinan->foto) }}" alt="Foto" class="mb-2 w-32 h-32 object-cover rounded">
                @else
                    <img id="foto-preview" src="" alt="Foto" class="mb-2 w-32 h-32 object-cover rounded hidden">
                @endif
                <input type="file" name="foto" class="w-full border rounded px-3 py-2" onchange="previewFoto(this)">
            </div>
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Update</button>
        </form>
        <form action="{{ route('admin.profilpimpinan.destroy', $profilpimpinan->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus data ini?');">
            @csrf
            @method('DELETE')
            <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded">Hapus</button>
        </form>
        @else
        @php
            // Get existing data if any
            $existingData = \App\Models\ProfilPimpinan::first();
        @endphp
        <form action="{{ route('admin.profilpimpinan.store') }}" method="POST" enctype="multipart/form-data" class="bg-white p-6 rounded shadow-md mb-8">
            @csrf
            <div class="mb-4">
                <label class="block font-bold mb-2">Nama</label>
                <input type="text" name="nama" value="{{ old('nama', $existingData->nama ?? '') }}" class="w-full border rounded px-3 py-2" required>
            </div>
            <div class="mb-4">
                <label class="block font-bold mb-2">Gelar Depan</label>
                <input type="text" name="gelar_depan" value="{{ old('gelar_depan', $existingData->gelar_depan ?? '') }}" class="w-full border rounded px-3 py-2">
            </div>
            <div class="mb-4">
                <label class="block font-bold mb-2">Gelar Belakang</label>
                <input type="text" name="gelar_belakang" value="{{ old('gelar_belakang', $existingData->gelar_belakang ?? '') }}" class="w-full border rounded px-3 py-2">
            </div>
            <div class="mb-4">
                <label class="block font-bold mb-2">Jabatan</label>
                <input type="text" name="jabatan" value="{{ old('jabatan', $existingData->jabatan ?? '') }}" class="w-full border rounded px-3 py-2" required>
            </div>
            <div class="mb-4">
                <label class="block font-bold mb-2">Pesan</label>
                <textarea id="pesan" name="pesan" class="w-full border rounded px-3 py-2">{{ old('pesan', $existingData->pesan ?? '') }}</textarea>
            </div>
            <div class="mb-4">
                <label class="block font-bold mb-2">Foto</label>
                <img id="foto-preview-create" src="" alt="Foto" class="mb-2 w-32 h-32 object-cover rounded">
                <input type="file" name="foto" class="w-full border rounded px-3 py-2" onchange="previewFotoCreate(this)">
            </div>
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Simpan</button>
        </form>
        @endif
    </div>
</body>
<script>
    ClassicEditor.create(document.querySelector('#pesan')).catch(error => {console.error(error);});

    // Preview foto sebelum upload (edit)
    function previewFoto(input) {
        const preview = document.getElementById('foto-preview');
        if (input.files && input.files[0]) {
            const reader = new FileReader();
            reader.onload = function(e) {
                preview.src = e.target.result;
                preview.classList.remove('hidden');
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    // Preview foto sebelum upload (create)
    function previewFotoCreate(input) {
        const preview = document.getElementById('foto-preview-create');
        if (input.files && input.files[0]) {
            const reader = new FileReader();
            reader.onload = function(e) {
                preview.src = e.target.result;
                preview.classList.remove('hidden');
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    // AJAX update for Profil Pimpinan
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('update-profilpimpinan-form');
        if(form) {
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                const url = form.action;
                const formData = new FormData(form);

                fetch(url, {
                    method: 'POST',
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        'X-CSRF-TOKEN': form.querySelector('input[name="_token"]').value
                    },
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    let msg = document.getElementById('success-message');
                    if(!msg) {
                        msg = document.createElement('div');
                        msg.id = 'success-message';
                        msg.className = 'bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4';
                        form.parentNode.insertBefore(msg, form);
                    }
                    msg.textContent = data.message || 'Berhasil diupdate!';
                    // Update image preview if data.gambar exists
                    if(data.gambar) {
                        const img = document.getElementById('foto-preview');
                        if(img) {
                            img.src = data.gambar;
                            img.classList.remove('hidden');
                        }
                    }
                    window.scrollTo(0, 0);
                    location.reload();
                })
                .catch(error => {
                    alert('Gagal update!');
                    console.error(error);
                });
            });
        }
    });
</script>
</html>