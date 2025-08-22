<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kelola Struktur Organisasi - Admin</title>
    <link rel="apple-touch-icon" sizes="180x180" href="/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="/img/favicon/site.webmanifest">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 pt-20">

    <x-admin.navbar />

    <!-- Alert Messages -->
    @if(session('success'))
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-4">
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
        </div>
    @endif

    @if(session('error'))
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-4">
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                <span class="block sm:inline">{{ session('error') }}</span>
            </div>
        </div>
    @endif

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
        <!-- Welcome Card - Large -->
        <div class="grid grid-cols-1 gap-6 mb-8">
            <div class="bg-gradient-to-br from-blue-500 to-purple-600 rounded-2xl shadow-xl p-8 text-white">
                <div class="flex items-center justify-between">
                    <div>
                        <h2 class="text-3xl font-bold mb-2">Struktur Organisasi</h2>
                        <p class="text-blue-100 text-lg">Kelola data struktur organisasi secara mudah dan cepat</p>
                        <div class="mt-4 flex items-center space-x-4">
                            <div class="bg-white/20 backdrop-blur-sm rounded-lg px-4 py-2">
                                <span class="text-sm font-medium">Total Data: {{ $items->count() ?? 0 }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="hidden md:block">
                        <div class="w-20 h-20 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center">
                            <i class="fas fa-users text-3xl"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- CRUD Struktur Organisasi -->
        <div class="grid grid-cols-1 gap-6 mb-8">
            <!-- Form Tambah -->
            <div class="bg-white rounded-2xl shadow-lg p-6 border border-gray-100 mb-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">Tambah Struktur Organisasi</h3>
                <form action="{{ route('admin.strukturorganisasi.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
                    @csrf
                    <div>
                        <label class="block text-gray-700 text-sm font-semibold mb-2" for="foto">Foto</label>
                        <input class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-gray-50"
                               id="foto" name="foto" type="file" accept="image/*">
                    </div>
                    <div>
                        <label class="block text-gray-700 text-sm font-semibold mb-2" for="deskripsi">Deskripsi</label>
                        <textarea class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-gray-50"
                                  id="deskripsi" name="deskripsi" rows="3"></textarea>
                    </div>
                    <button class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-6 rounded-xl transition-all duration-200" type="submit">
                        <i class="fas fa-plus mr-2"></i>Tambah
                    </button>
                </form>
            </div>

            <!-- Tabel Data -->
            <div class="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-x-auto">
                <h3 class="text-xl font-bold text-gray-900 px-6 py-4 border-b border-gray-200">Daftar Struktur Organisasi</h3>
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase">#</th>
                            <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase">Foto</th>
                            <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase">Deskripsi</th>
                            <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @forelse($items as $item)
                        <tr class="hover:bg-blue-50 transition">
                            <td class="px-6 py-4 font-semibold text-gray-700">{{ $loop->iteration }}</td>
                            <td class="px-6 py-4">
                                @if($item->foto)
                                    <div class="flex items-center justify-center">
                                        <img src="{{ asset('storage/' . $item->foto) }}" alt="Foto" class="h-20 w-20 object-cover rounded-lg border-2 border-blue-200 shadow">
                                    </div>
                                @else
                                    <span class="text-gray-400">Tidak ada foto</span>
                                @endif
                            </td>
                            <td class="px-6 py-4">
                                <span class="block max-w-xs truncate" title="{{ $item->deskripsi }}">
                                    {{ $item->deskripsi }}
                                </span>
                            </td>
                            <td class="px-6 py-4">
                                <button 
                                    class="bg-yellow-400 hover:bg-yellow-500 text-white px-3 py-1 rounded text-xs font-semibold flex items-center gap-1"
                                    onclick="openEditModal({{ $item->id }}, `{{ asset('storage/' . ($item->foto ?? '')) }}`, `{{ addslashes($item->deskripsi) }}`)"
                                    type="button"
                                >
                                    <i class="fas fa-edit"></i> Edit
                                </button>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="px-6 py-12 text-center text-gray-500">Belum ada data struktur organisasi.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal Edit Struktur Organisasi -->
    <div id="editModal" class="fixed inset-0 z-[9999] bg-black bg-opacity-40 hidden items-center justify-center">
        <div class="bg-white rounded-2xl shadow-xl w-full max-w-md p-6 relative flex flex-col">
            <button type="button" onclick="closeEditModal()" class="absolute top-3 right-3 text-gray-400 hover:text-gray-600 text-xl">&times;</button>
            <h3 class="text-xl font-bold text-gray-900 mb-4">Edit Struktur Organisasi</h3>
            <form id="editForm" method="POST" enctype="multipart/form-data" class="flex flex-col gap-4">
                @csrf
                <input type="hidden" name="_method" value="PUT">
                <div>
                    <label class="block text-gray-700 text-sm font-semibold mb-2" for="editFoto">Foto</label>
                    <img id="editPreviewFoto" src="" alt="Foto" class="h-20 w-20 object-cover rounded-lg border mb-2 hidden">
                    <input class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-gray-50"
                           id="editFoto" name="foto" type="file" accept="image/*" onchange="previewEditFoto(this)">
                </div>
                <div>
                    <label class="block text-gray-700 text-sm font-semibold mb-2" for="editDeskripsi">Deskripsi</label>
                    <textarea class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-gray-50"
                              id="editDeskripsi" name="deskripsi" rows="3"></textarea>
                </div>
                <div class="flex gap-2">
                    <button class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-6 rounded-xl transition-all duration-200" type="submit">
                        <i class="fas fa-save mr-2"></i>Simpan
                    </button>
                    <button id="deleteBtn" type="button" class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-xl font-semibold flex items-center gap-1">
                        <i class="fas fa-trash"></i> Hapus
                    </button>
                </div>
            </form>
        </div>
    </div>

    <form id="deleteForm" method="POST" style="display:none;">
        @csrf
        <input type="hidden" name="_method" value="DELETE">
    </form>

    <script>
    function openEditModal(id, fotoUrl, deskripsi) {
        // Set form action
        document.getElementById('editForm').action = "{{ url('admin/strukturorganisasi') }}/" + id;
        document.getElementById('deleteForm').action = "{{ url('admin/strukturorganisasi') }}/" + id;
        // Set deskripsi
        document.getElementById('editDeskripsi').value = deskripsi.replace(/\\'/g, "'");
        // Set foto preview
        const preview = document.getElementById('editPreviewFoto');
        if (fotoUrl && !fotoUrl.endsWith('/')) {
            preview.src = fotoUrl;
            preview.classList.remove('hidden');
        } else {
            preview.src = '';
            preview.classList.add('hidden');
        }
        // Reset file input
        document.getElementById('editFoto').value = '';
        // Show modal (set display flex)
        const modal = document.getElementById('editModal');
        modal.classList.remove('hidden');
        modal.classList.add('flex');
    }
    function closeEditModal() {
        const modal = document.getElementById('editModal');
        modal.classList.add('hidden');
        modal.classList.remove('flex');
    }
    function previewEditFoto(input) {
        const preview = document.getElementById('editPreviewFoto');
        if (input.files && input.files[0]) {
            const reader = new FileReader();
            reader.onload = function(e) {
                preview.src = e.target.result;
                preview.classList.remove('hidden');
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    // Delete button handler
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('deleteBtn').onclick = function() {
            if(confirm('Yakin hapus?')) {
                document.getElementById('deleteForm').submit();
            }
        };
    });
    </script>
</body>
</html>