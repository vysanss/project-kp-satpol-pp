<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Security-Policy" content="script-src 'self' 'unsafe-inline' 'unsafe-eval' https://cdn.tailwindcss.com https://cdn.ckeditor.com https://cdnjs.cloudflare.com; style-src 'self' 'unsafe-inline' https://cdnjs.cloudflare.com; img-src 'self' data: https:; font-src 'self' https://cdnjs.cloudflare.com;">
    <title>Kelola Berita & Artikel - Admin</title>
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
            <!-- Welcome Card - Large -->
            <div class="bg-gradient-to-br from-blue-500 to-purple-600 rounded-2xl shadow-xl p-8 text-white">
                <div class="flex items-center justify-between">
                    <div>
                        <h2 class="text-3xl font-bold mb-2">Kelola Halaman Tentang Kami</h2>
                        <p class="text-blue-100 text-lg">Edit konten halaman tentang kami</p>
                    </div>
                    <div class="hidden md:block">
                        <div class="w-20 h-20 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center">
                            <i class="fas fa-newspaper text-3xl"></i>
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

        @if(isset($tentangkami))
        <form id="update-tentangkami-form" action="{{ route('admin.tentangkami.update', $tentangkami->id) }}" method="POST" enctype="multipart/form-data" class="bg-white p-6 rounded shadow-md mb-8">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label class="block font-bold mb-2">Judul</label>
                <input type="text" name="judul" value="{{ old('judul', $tentangkami->judul) }}" class="w-full border rounded px-3 py-2" required>
            </div>
            <div class="mb-4">
                <label class="block font-bold mb-2">Deskripsi 1</label>
                <textarea id="deskripsi_1" name="deskripsi_1" class="w-full border rounded px-3 py-2" required>{{ old('deskripsi_1', $tentangkami->deskripsi_1) }}</textarea>
            </div>
            <div class="mb-4">
                <label class="block font-bold mb-2">Deskripsi 2</label>
                <textarea id="deskripsi_2" name="deskripsi_2" class="w-full border rounded px-3 py-2" required>{{ old('deskripsi_2', $tentangkami->deskripsi_2) }}</textarea>
            </div>
            <div class="mb-4">
                <label class="block font-bold mb-2">Visi</label>
                <textarea id="visi" name="visi" class="w-full border rounded px-3 py-2" required>{{ old('visi', $tentangkami->visi) }}</textarea>
            </div>
            <div class="mb-4">
                <label class="block font-bold mb-2">Misi</label>
                <textarea id="misi" name="misi" class="w-full border rounded px-3 py-2" required>{{ old('misi', $tentangkami->misi) }}</textarea>
            </div>
            <div class="mb-4">
                <label class="block font-bold mb-2">Gambar</label>
                @if($tentangkami->gambar)
                    <img src="{{ asset('storage/' . $tentangkami->gambar) }}" alt="Gambar" class="mb-2 w-32 h-32 object-cover rounded">
                @endif
                <input type="file" name="gambar" class="w-full border rounded px-3 py-2">
            </div>
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Update</button>
        </form>
        <form action="{{ route('admin.tentangkami.destroy', $tentangkami->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus data ini?');">
            @csrf
            @method('DELETE')
            <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded">Hapus</button>
        </form>
        @else
        <form action="{{ route('admin.tentangkami.store') }}" method="POST" enctype="multipart/form-data" class="bg-white p-6 rounded shadow-md mb-8">
            @csrf
            <div class="mb-4">
                <label class="block font-bold mb-2">Judul</label>
                <input type="text" name="judul" value="{{ old('judul') }}" class="w-full border rounded px-3 py-2" required>
            </div>
            <div class="mb-4">
                <label class="block font-bold mb-2">Deskripsi 1</label>
                <textarea id="deskripsi_1" name="deskripsi_1" class="w-full border rounded px-3 py-2" required>{{ old('deskripsi_1') }}</textarea>
            </div>
            <div class="mb-4">
                <label class="block font-bold mb-2">Deskripsi 2</label>
                <textarea id="deskripsi_2" name="deskripsi_2" class="w-full border rounded px-3 py-2" required>{{ old('deskripsi_2') }}</textarea>
            </div>
            <div class="mb-4">
                <label class="block font-bold mb-2">Visi</label>
                <textarea id="visi" name="visi" class="w-full border rounded px-3 py-2" required>{{ old('visi') }}</textarea>
            </div>
            <div class="mb-4">
                <label class="block font-bold mb-2">Misi</label>
                <textarea id="misi" name="misi" class="w-full border rounded px-3 py-2" required>{{ old('misi') }}</textarea>
            </div>
            <div class="mb-4">
                <label class="block font-bold mb-2">Gambar</label>
                <input type="file" name="gambar" class="w-full border rounded px-3 py-2">
            </div>
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Simpan</button>
        </form>
        @endif
    </div>
</body>
<script>
    ClassicEditor.create(document.querySelector('#deskripsi_1')).catch(error => {console.error(error);});
    ClassicEditor.create(document.querySelector('#deskripsi_2')).catch(error => {console.error(error);});
    ClassicEditor.create(document.querySelector('#visi')).catch(error => {console.error(error);});
    ClassicEditor.create(document.querySelector('#misi')).catch(error => {console.error(error);});

    // AJAX update for Tentang Kami
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('update-tentangkami-form');
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
                    // Optionally update image preview if data.gambar exists
                    if(data.gambar) {
                        const img = form.querySelector('img');
                        if(img) img.src = data.gambar;
                    }
                    // Reload page and scroll to top
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