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
    <style>
        .modal-enter {
            opacity: 0;
            transform: scale(0.95);
            transition: all 0.2s;
        }
        .modal-show {
            opacity: 1;
            transform: scale(1);
        }
        .toast {
            animation: slideDown 0.5s;
        }
        @keyframes slideDown {
            from { transform: translateY(-30px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }
        .popup-alert-bg {
            position: fixed;
            inset: 0;
            background: rgba(0,0,0,0.2);
            z-index: 100;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .popup-alert {
            background: #22c55e;
            color: #fff;
            padding: 2rem 2.5rem;
            border-radius: 1rem;
            box-shadow: 0 8px 32px rgba(0,0,0,0.15);
            font-size: 1.1rem;
            display: flex;
            align-items: center;
            gap: 1rem;
            position: relative;
            animation: fadeInScale 0.3s;
        }
        @keyframes fadeInScale {
            from { opacity: 0; transform: scale(0.9);}
            to { opacity: 1; transform: scale(1);}
        }
        .popup-alert .close-btn {
            position: absolute;
            top: 0.5rem;
            right: 0.7rem;
            background: none;
            border: none;
            color: #fff;
            font-size: 1.3rem;
            cursor: pointer;
        }
    </style>
</head>
<body class="bg-gray-100 pt-20">
    <x-admin.navbar />
    <div class="max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
        <!-- Pop-up Alert Modal -->
        @if(session('success'))
        <div id="popup-alert-bg" class="popup-alert-bg">
            <div class="popup-alert">
                <i class="fas fa-check-circle text-2xl"></i>
                <span>{{ session('success') }}</span>
                <button class="close-btn" onclick="closePopupAlert()">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        <script>
            function closePopupAlert() {
                document.getElementById('popup-alert-bg').style.display = 'none';
            }
            setTimeout(closePopupAlert, 2000);
        </script>
        @endif

        <!-- Bento Grid Layout -->
        <div class="grid grid-cols-1 gap-6 mb-8">
            <!-- Welcome Card - Large -->
            <div class="bg-gradient-to-br from-blue-500 to-purple-600 rounded-2xl shadow-xl p-8 text-white">
                <div class="flex items-center justify-between">
                    <div>
                        <h2 class="text-3xl font-bold mb-2">Kelola Berita & Artikel</h2>
                        <p class="text-blue-100 text-lg">Akses cepat ke semua fitur berita dan artikel</p>
                    </div>
                    <div class="hidden md:block">
                        <div class="w-20 h-20 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center">
                            <i class="fas fa-newspaper text-3xl"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- CRUD Berita -->
        <div class="bg-white rounded-xl shadow p-6 mt-8">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-xl font-bold">Daftar Berita</h3>
                <button onclick="showModal('modal-tambah')" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                    <i class="fas fa-plus"></i> Tambah Berita
                </button>
            </div>
            <table class="min-w-full divide-y divide-gray-200">
                <thead>
                    <tr>
                        <th class="px-4 py-2">Judul</th>
                        <th class="px-4 py-2">Kategori</th>
                        <th class="px-4 py-2">Tanggal Publish</th>
                        <th class="px-4 py-2">Gambar</th>
                        <th class="px-4 py-2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @if(isset($berita) && $berita->count() > 0)
                        @foreach($berita as $item)
                        <tr class="border-b">
                            <td class="px-4 py-2">{{ $item->title ?? '-' }}</td>
                            <td class="px-4 py-2">{{ $item->category ?? '-' }}</td>
                            <td class="px-4 py-2">
                                @if($item->published_at)
                                    @if($item->published_at instanceof \Carbon\Carbon)
                                        {{ $item->published_at->format('d-m-Y') }}
                                    @else
                                        {{ \Carbon\Carbon::parse($item->published_at)->format('d-m-Y') }}
                                    @endif
                                @else
                                    -
                                @endif
                            </td>
                            <td class="px-4 py-2">
                                @if($item->image)
                                    <img src="{{ asset('storage/' . $item->image) }}" alt="Gambar Berita" class="w-20 h-14 object-cover rounded">
                                @else
                                    <span class="text-gray-400">-</span>
                                @endif
                            </td>
                            <td class="px-4 py-2 flex gap-2">
                                <button onclick="editBerita({{ $item->id }}, '{{ addslashes($item->title ?? '') }}', '{{ addslashes($item->category ?? '') }}', '{{ addslashes($item->content ?? '') }}')" class="bg-yellow-500 text-white px-2 py-1 rounded hover:bg-yellow-600">
                                    <i class="fas fa-edit"></i> Edit
                                </button>
                                <form action="{{ route('berita.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus berita ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-600 text-white px-2 py-1 rounded hover:bg-red-700">
                                        <i class="fas fa-trash"></i> Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="5" class="px-4 py-8 text-center text-gray-500">
                                <i class="fas fa-newspaper text-4xl mb-2 opacity-50"></i>
                                <p>Belum ada berita yang tersedia</p>
                            </td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>

        <!-- Modal Tambah Berita -->
        <div id="modal-tambah" class="fixed inset-0 bg-black bg-opacity-40 flex items-center justify-center hidden z-50 p-4">
            <div class="bg-white rounded-2xl shadow-2xl w-full max-w-4xl max-h-[90vh] overflow-hidden modal-enter" id="modal-tambah-content">
                <div class="flex items-center p-6 border-b gap-2">
                    <div class="bg-blue-100 rounded-full p-2">
                        <i class="fas fa-plus text-blue-600 text-xl"></i>
                    </div>
                    <h4 class="text-xl font-bold">Tambah Berita</h4>
                </div>
                <div class="overflow-y-auto max-h-[calc(90vh-140px)]">
                    <div class="p-6">
                        <form id="tambah-form" action="{{ route('berita.store') }}" method="POST" enctype="multipart/form-data" onsubmit="return syncTambahContent()">
                            @csrf
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                                <div>
                                    <label class="block font-semibold mb-1">Judul</label>
                                    <input type="text" name="title" class="w-full border rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-400" required>
                                </div>
                                <div>
                                    <label class="block font-semibold mb-1">Kategori</label>
                                    <select name="category" class="w-full border rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-400" required>
                                        <option value="">Pilih Kategori</option>
                                        <option value="Berita">Berita</option>
                                        <option value="Artikel">Artikel</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-4">
                                <label class="block font-semibold mb-1">Isi</label>
                                <div class="min-h-[300px]">
                                    <textarea name="content" id="tambah-content" class="w-full border rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-400" rows="4"></textarea>
                                </div>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                                <div>
                                    <label class="block font-semibold mb-1">Gambar</label>
                                    <input type="file" name="image" class="w-full border rounded-lg px-3 py-2">
                                </div>
                                <div>
                                    <label class="block font-semibold mb-1">Tanggal Publish</label>
                                    <input type="date" name="published_at" class="w-full border rounded-lg px-3 py-2">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="flex justify-end gap-2 p-2 border-t bg-gray-50">
                    <button type="button" onclick="closeModal('modal-tambah')" class="px-4 py-2 rounded-lg bg-gray-200 hover:bg-gray-300 font-semibold">Batal</button>
                    <button type="submit" form="tambah-form" class="px-4 py-2 rounded-lg bg-blue-600 hover:bg-blue-700 text-white font-semibold flex items-center gap-2">
                        <i class="fas fa-save"></i> Simpan
                    </button>
                </div>
            </div>
        </div>

        <!-- Modal Edit Berita -->
        <div id="modal-edit" class="fixed inset-0 bg-black bg-opacity-40 flex items-center justify-center hidden z-50 p-4">
            <div class="bg-white rounded-2xl shadow-2xl w-full max-w-4xl max-h-[90vh] overflow-hidden modal-enter" id="modal-edit-content">
                <div class="flex items-center p-6 border-b gap-2">
                    <div class="bg-yellow-100 rounded-full p-2">
                        <i class="fas fa-edit text-yellow-600 text-xl"></i>
                    </div>
                    <h4 class="text-xl font-bold">Edit Berita</h4>
                </div>
                <div class="overflow-y-auto max-h-[calc(90vh-140px)]">
                    <div class="p-6">
                        <form id="form-edit" method="POST" enctype="multipart/form-data" onsubmit="return syncEditContent()">
                            @csrf
                            @method('PUT')
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                                <div>
                                    <label class="block font-semibold mb-1">Judul</label>
                                    <input type="text" name="title" id="edit-title" class="w-full border rounded-lg px-3 py-2 focus:ring-2 focus:ring-yellow-400" required>
                                </div>
                                <div>
                                    <label class="block font-semibold mb-1">Kategori</label>
                                    <select name="category" id="edit-category" class="w-full border rounded-lg px-3 py-2 focus:ring-2 focus:ring-yellow-400" required>
                                        <option value="">Pilih Kategori</option>
                                        <option value="Berita">Berita</option>
                                        <option value="Artikel">Artikel</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-4">
                                <label class="block font-semibold mb-1">Isi</label>
                                <div class="min-h-[300px]">
                                    <textarea name="content" id="edit-content" class="w-full border rounded-lg px-3 py-2 focus:ring-2 focus:ring-yellow-400" rows="4"></textarea>
                                </div>
                            </div>
                            <div class="mb-4">
                                <label class="block font-semibold mb-1">Gambar <span class="text-gray-400 text-sm">(kosongkan jika tidak ingin mengubah)</span></label>
                                <input type="file" name="image" class="w-full border rounded-lg px-3 py-2">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="flex justify-end gap-2 p-1 border-t bg-gray-50">
                    <button type="button" onclick="closeModal('modal-edit')" class="px-4 py-2 rounded-lg bg-gray-200 hover:bg-gray-300 font-semibold">Batal</button>
                    <button type="submit" form="form-edit" class="px-4 py-2 rounded-lg bg-yellow-500 hover:bg-yellow-600 text-white font-semibold flex items-center gap-2">
                        <i class="fas fa-save"></i> Update
                    </button>
                </div>
            </div>
        </div>

        <script>
            let tambahEditor, editEditor;
            
            // Custom upload adapter
            class MyUploadAdapter {
                constructor(loader) {
                    this.loader = loader;
                }
                
                upload() {
                    return this.loader.file
                        .then(file => new Promise((resolve, reject) => {
                            const data = new FormData();
                            data.append('upload', file);
                            
                            fetch('/admin/berita/upload-image', {
                                method: 'POST',
                                body: data,
                                headers: {
                                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                                }
                            })
                            .then(response => response.json())
                            .then(result => {
                                if (result.url) {
                                    resolve({
                                        default: result.url
                                    });
                                } else {
                                    reject(result.error?.message || 'Upload failed');
                                }
                            })
                            .catch(error => {
                                reject('Network error: ' + error.message);
                            });
                        }));
                }
                
                abort() {
                    // Handle abort if needed
                }
            }
            
            function MyCustomUploadAdapterPlugin(editor) {
                editor.plugins.get('FileRepository').createUploadAdapter = (loader) => {
                    return new MyUploadAdapter(loader);
                };
            }
            
            ClassicEditor.create(document.querySelector('#tambah-content'), {
                extraPlugins: [MyCustomUploadAdapterPlugin],
                toolbar: [
                    'heading', '|',
                    'bold', 'italic', 'link', '|',
                    'bulletedList', 'numberedList', '|',
                    'outdent', 'indent', '|',
                    'imageUpload', 'blockQuote', 'insertTable', '|',
                    'undo', 'redo'
                ]
            }).then(editor => {
                tambahEditor = editor;
            }).catch(error => {
                console.error('Error initializing tambah editor:', error);
            });
            
            ClassicEditor.create(document.querySelector('#edit-content'), {
                extraPlugins: [MyCustomUploadAdapterPlugin],
                toolbar: [
                    'heading', '|',
                    'bold', 'italic', 'link', '|',
                    'bulletedList', 'numberedList', '|',
                    'outdent', 'indent', '|',
                    'imageUpload', 'blockQuote', 'insertTable', '|',
                    'undo', 'redo'
                ]
            }).then(editor => {
                editEditor = editor;
            }).catch(error => {
                console.error('Error initializing edit editor:', error);
            });

            function syncTambahContent() {
                if (tambahEditor) {
                    const data = tambahEditor.getData();
                    const hiddenInput = document.querySelector('textarea[name="content"]');
                    hiddenInput.value = data;
                    if (!data.trim()) {
                        alert('Isi berita wajib diisi.');
                        return false;
                    }
                }
                return true;
            }
            
            function syncEditContent() {
                if (editEditor) {
                    const data = editEditor.getData();
                    document.getElementById('edit-content').value = data;
                    if (!data.trim()) {
                        alert('Isi berita wajib diisi.');
                        return false;
                    }
                }
                return true;
            }

            function showModal(id) {
                const modal = document.getElementById(id);
                const content = document.getElementById(id + '-content');
                modal.classList.remove('hidden');
                setTimeout(() => content.classList.add('modal-show'), 10);
            }
            function closeModal(id) {
                const modal = document.getElementById(id);
                const content = document.getElementById(id + '-content');
                content.classList.remove('modal-show');
                setTimeout(() => modal.classList.add('hidden'), 200);
            }
            function editBerita(id, title, category, content) {
                document.getElementById('edit-title').value = title;
                document.getElementById('edit-category').value = category;
                if (editEditor) editEditor.setData(content);
                document.getElementById('form-edit').action = '/admin/berita/' + id;
                showModal('modal-edit');
            }
        </script>
    </div>
</body>
</html>
    </div>
</body>
</html>

