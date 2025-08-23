<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kelola Maklumat Pelayanan - Admin</title>
    <link rel="apple-touch-icon" sizes="180x180" href="/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="/img/favicon/site.webmanifest">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css">
</head>
<body class="bg-gray-50 pt-20 min-h-screen">
    <x-admin.navbar />
    <div class="max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
    <!-- Alert Success -->
    @if(session('success'))
        <div class="mb-6">
            <div class="flex items-center bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                <svg class="fill-current w-5 h-5 mr-2" viewBox="0 0 20 20"><path d="M10 18a8 8 0 100-16 8 8 0 000 16zm-1-4h2v2h-2v-2zm0-8h2v6h-2V6z"/></svg>
                <span class="block font-semibold">{{ session('success') }}</span>
                <button onclick="this.parentElement.style.display='none'" class="absolute top-0 bottom-0 right-0 px-4 py-3">
                    <svg class="fill-current h-6 w-6 text-green-700" role="button" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 5.652a1 1 0 10-1.414-1.414L10 7.172 7.066 4.238a1 1 0 10-1.414 1.414L8.586 8.586l-2.934 2.934a1 1 0 101.414 1.414L10 9.828l2.934 2.934a1 1 0 001.414-1.414L11.414 8.586l2.934-2.934z"/></svg>
                </button>
            </div>
        </div>
    @endif
    <!-- Welcome Card -->
    <div class="bg-gradient-to-br from-blue-500 to-purple-600 rounded-2xl shadow-xl p-8 text-white mb-8">
        <div class="flex items-center justify-between">
            <div>
                <h2 class="text-3xl font-bold mb-2">Kelola Tupoksi</h2>
                <p class="text-blue-100 text-lg">Manajemen Tupoksi Satpol PP Tasikmalaya</p>
                <div class="mt-4 flex items-center space-x-4">
                    <!-- Tampilkan total per kategori -->
                    <div class="bg-white/20 backdrop-blur-sm rounded-lg px-4 py-2">
                        <span class="text-sm font-medium">Jenis: {{ $pelayanan->where('kategori', 'Jenis')->count() }}</span>
                    </div>
                    <div class="bg-white/20 backdrop-blur-sm rounded-lg px-4 py-2">
                        <span class="text-sm font-medium">Standar Pelayanan: {{ $pelayanan->where('kategori', 'Standar Pelayanan')->count() }}</span>
                    </div>
                    <div class="bg-white/20 backdrop-blur-sm rounded-lg px-4 py-2">
                        <span class="text-sm font-medium">Informasi Pelayanan: {{ $pelayanan->where('kategori', 'Informasi Pelayanan')->count() }}</span>
                    </div>
                </div>
            </div>
            <div class="hidden md:block">
                <div class="w-20 h-20 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center">
                    <i class="fas fa-list-alt text-3xl"></i>
                </div>
            </div>
        </div>
    </div>

    @php
        $kategoriList = ['Jenis', 'Standar Pelayanan', 'Informasi Pelayanan'];
    @endphp

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
    @foreach($kategoriList as $kategori)
        <div class="flex flex-col h-full">
            <!-- Card kategori -->
            <div class="bg-gradient-to-r from-blue-400 to-purple-500 rounded-xl shadow-lg p-6 text-white flex items-center justify-between mb-4">
                <div>
                    <h3 class="text-2xl font-bold">{{ $kategori }}</h3>
                    <p class="text-blue-100">Kelola Tupoksi kategori {{ $kategori }}</p>
                </div>
                <div class="hidden md:block">
                    <div class="w-14 h-14 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center">
                        <i class="fas fa-layer-group text-2xl"></i>
                    </div>
                </div>
            </div>
            <!-- Tombol Tambah Pelayanan per kategori (open modal) -->
            <div class="mb-4">
                <button type="button"
                    class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 w-fit shadow"
                    onclick="openTambahModal('{{ addslashes($kategori) }}')">
                    <i class="fas fa-plus mr-1"></i>Tambah Pelayanan
                </button>
            </div>
            <!-- Tabel Tupoksi per kategori -->
            <div class="bg-white rounded-lg shadow p-6 flex-1 flex flex-col">
                <h4 class="text-lg font-semibold mb-2">Daftar Tupoksi {{ $kategori }}</h4>
                <div class="overflow-x-auto">
                    <div class="max-h-64 overflow-y-auto">
                        <table class="min-w-full bg-white border border-gray-200 rounded-lg overflow-hidden">
                            <thead class="bg-gray-100">
                                <tr>
                                    <th class="border-b px-4 py-3 text-left text-sm font-semibold text-gray-700 w-12">No</th>
                                    <th class="border-b px-4 py-3 text-left text-sm font-semibold text-gray-700">Poin</th>
                                    <th class="border-b px-4 py-3 text-center text-sm font-semibold text-gray-700">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @foreach($pelayanan->where('kategori', $kategori) as $row)
                                <tr class="{{ $loop->even ? 'bg-gray-50' : 'bg-white' }} hover:bg-blue-50 transition">
                                    <td class="px-4 py-3 border-b text-gray-700">{{ $no++ }}</td>
                                    <td class="px-4 py-3 border-b text-gray-700">{{ $row->poin }}</td>
                                    <td class="px-4 py-3 border-b text-center">
                                        <div class="flex justify-center gap-2">
                                            <!-- Edit Button (open modal) -->
                                            <button type="button"
                                                class="bg-yellow-500 text-white px-3 py-1 rounded shadow hover:bg-yellow-600 transition"
                                                onclick="openEditModal({{ $row->id }}, '{{ addslashes($row->poin) }}', '{{ addslashes($row->isi) }}', '{{ addslashes($row->kategori) }}')">
                                                <i class="fas fa-edit mr-1"></i>Edit
                                            </button>
                                            <!-- Hapus -->
                                            <form action="{{ route('admin.pelayanan.destroy', $row->id) }}" method="POST" onsubmit="return confirm('Yakin hapus?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="bg-red-600 text-white px-3 py-1 rounded shadow hover:bg-red-700 transition">
                                                    <i class="fas fa-trash-alt mr-1"></i>Hapus
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                @if($pelayanan->where('kategori', $kategori)->count() == 0)
                    <div class="text-gray-500 text-center py-4">Belum ada data Tupoksi untuk kategori ini.</div>
                @endif
            </div>
        </div>
    @endforeach
    </div>

    <!-- Modal Tambah Pelayanan -->
    <div id="tambahModal" class="fixed inset-0 z-50 flex items-center justify-center bg-black/40 hidden">
        <div class="bg-white rounded-lg shadow-lg w-full max-w-md p-6 relative">
            <button onclick="closeTambahModal()" class="absolute top-2 right-2 text-gray-400 hover:text-gray-600 text-xl">&times;</button>
            <h3 class="text-xl font-bold mb-4">Tambah <span id="tambahKategoriLabel"></span></h3>
            <form id="tambahForm" action="{{ route('admin.pelayanan.store') }}" method="POST" class="flex flex-col gap-3">
                @csrf
                <input type="hidden" name="kategori" id="tambahKategori">
                <div id="poinInputArea">
                    <!-- Konten input poin akan diisi via JS -->
                </div>
                <div>
                    <label class="block mb-1 font-medium">Isi</label>
                    <textarea name="isi" class="border rounded px-3 py-2 w-full" required></textarea>
                </div>
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 w-fit">Tambah</button>
            </form>
        </div>
    </div>

    <!-- Edit Modal -->
    <div id="editModal" class="fixed inset-0 z-50 flex items-center justify-center bg-black/40 hidden">
        <div class="bg-white rounded-lg shadow-lg w-full max-w-md p-6 relative">
            <button onclick="closeEditModal()" class="absolute top-2 right-2 text-gray-400 hover:text-gray-600 text-xl">&times;</button>
            <h3 class="text-xl font-bold mb-4">Edit Tupoksi</h3>
            <form id="editForm" method="POST">
                @csrf
                @method('PUT')
                <input type="hidden" name="kategori" id="editKategori">
                <div class="mb-3">
                    <label class="block mb-1 font-medium">Poin</label>
                    <input type="text" name="poin" id="editPoin" class="border rounded px-3 py-2 w-full" required>
                </div>
                <div class="mb-3">
                    <label class="block mb-1 font-medium">Isi</label>
                    <textarea name="isi" id="editIsi" class="border rounded px-3 py-2 w-full" required></textarea>
                </div>
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Update</button>
            </form>
        </div>
    </div>

    <script>
    // Data poin Standar Pelayanan dari backend
    var standarPelayananPoin = @json($pelayanan->where('kategori', 'Standar Pelayanan')->pluck('poin')->unique()->values());

    function openTambahModal(kategori) {
        document.getElementById('tambahModal').classList.remove('hidden');
        document.getElementById('tambahKategori').value = kategori;
        document.getElementById('tambahKategoriLabel').innerText = kategori;

        var poinInputArea = document.getElementById('poinInputArea');
        if (kategori === 'Standar Pelayanan') {
            // Dropdown pilihan poin + input tambah poin baru
            var html = `
                <label class="block mb-1 font-medium">Poin</label>
                <select id="pilihPoin" class="border rounded px-3 py-2 w-full mb-2">
                    <option value="">-- Pilih Poin yang sudah ada --</option>
                    ${standarPelayananPoin.map(function(poin){
                        return `<option value="${poin}">${poin}</option>`;
                    }).join('')}
                    <option value="__tambah__">+ Tambah Poin Baru</option>
                </select>
                <input type="text" name="poin" id="inputPoinBaru" class="border rounded px-3 py-2 w-full" style="display:none;" placeholder="Masukkan poin baru">
            `;
            poinInputArea.innerHTML = html;

            var pilihPoin = document.getElementById('pilihPoin');
            var inputPoinBaru = document.getElementById('inputPoinBaru');
            pilihPoin.onchange = function() {
                if (this.value === '__tambah__') {
                    inputPoinBaru.style.display = '';
                    inputPoinBaru.required = true;
                    inputPoinBaru.name = 'poin';
                } else if (this.value !== '') {
                    inputPoinBaru.style.display = 'none';
                    inputPoinBaru.required = false;
                    inputPoinBaru.name = '';
                    // Buat hidden input untuk value dari dropdown
                    if (!document.getElementById('hiddenPoin')) {
                        var hidden = document.createElement('input');
                        hidden.type = 'hidden';
                        hidden.name = 'poin';
                        hidden.id = 'hiddenPoin';
                        poinInputArea.appendChild(hidden);
                    }
                    document.getElementById('hiddenPoin').value = this.value;
                } else {
                    inputPoinBaru.style.display = 'none';
                    inputPoinBaru.required = false;
                    inputPoinBaru.name = '';
                    if (document.getElementById('hiddenPoin')) {
                        document.getElementById('hiddenPoin').value = '';
                    }
                }
            };
        } else {
            // Input biasa
            poinInputArea.innerHTML = `
                <label class="block mb-1 font-medium">Poin</label>
                <input type="text" name="poin" class="border rounded px-3 py-2 w-full" required>
            `;
        }
    }
    function closeTambahModal() {
        document.getElementById('tambahModal').classList.add('hidden');
    }
    function openEditModal(id, poin, isi, kategori) {
        document.getElementById('editModal').classList.remove('hidden');
        document.getElementById('editPoin').value = poin;
        document.getElementById('editIsi').value = isi;
        document.getElementById('editKategori').value = kategori;
        var form = document.getElementById('editForm');
        form.action = "{{ url('admin/pelayanan') }}/" + id;
    }
    function closeEditModal() {
        document.getElementById('editModal').classList.add('hidden');
    }
    window.onclick = function(event) {
        var tambahModal = document.getElementById('tambahModal');
        var editModal = document.getElementById('editModal');
        if (event.target == tambahModal) {
            closeTambahModal();
        }
        if (event.target == editModal) {
            closeEditModal();
        }
    }
    </script>
</body>
</html>